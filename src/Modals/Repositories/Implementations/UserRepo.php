<?php

namespace App\Modals\Repositories\Implementations;
use App\Mappers\UserMapper;
use PDO;
class UserRepo extends BaseRepo
{
    private $roleRepo;
    public function __construct($roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }

    public function fetchAll()
    {
        $query = "  SELECT u.*,c.min_salaire,rec.company_name,rec.company_domain
                    FROM users u
                    LEFT JOIN candidats c 
                        ON u.id = c.user_id
                    LEFT JOIN recruteurs rec 
                        ON u.id = rec.user_id;";

        $stmt = $this->conn->query($query);
        $rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = [];
        foreach ($rows as $row) {
            $users[] = UserMapper::map($row, $this->roleRepo->fetchByProperty('id', $row['roleId']));
        }
        return $users;
    }

    public function fetchByProperty($property, $value)
    {
        $query = "  SELECT u.*,c.min_salaire,r.company_name,r.company_domain
                    FROM users u
                    LEFT JOIN candidats c 
                        ON u.id = c.user_id
                    LEFT JOIN recruteurs r
                        ON u.id = r.user_id
                    WHERE {$property} = :{$property}
                        ;";
                    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':'.$property, $value);
        $stmt->execute([$value]);
        $rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = [];
        foreach ($rows as $row) {
            $users[] = UserMapper::map($row, $this->roleRepo->fetchByProperty('id', $row['roleId']));
        }
        return $users;
    }

    public function insert($objet){
        $data = UserMapper::reverseMap($objet);
        $query = "INSERT INTO users (nom, prenom, email, password, roleId) VALUES (:nom, :prenom, :email, :password, :roleId)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
        switch ($data['roleId']) {
            case 2:
                $query ="INSERT INTO Candidats (user_id, min_salaire ) VALUES (LAST_INSERT_ID(), :min_salaire)";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':min_salaire', $data['min_salaire']);
                $stmt->execute();
                break;
            case 3:
                $query ="INSERT INTO Recruteurs (user_id, company_name, company_domain ) VALUES (LAST_INSERT_ID(), :company_name, :company_domain)";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':company_name', $data['company_name']);
                $stmt->bindParam(':company_domain', $data['company_domain']);
                $stmt->execute();
                break;
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->tableName} WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}

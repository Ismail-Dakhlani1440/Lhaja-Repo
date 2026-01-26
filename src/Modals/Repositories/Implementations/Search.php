<?php

namespace App\Modals\Repositories\Implementations;
use App\Modals\DB\Database;
use App\Modals\Entity\Post;
use PDO;
use PDOException;


class Search
{
   private $pdo;
   public function __construct(){
   $this->pdo = Database::getInstance();
}
    public function search($keyword)
    {

    try {

        $sql = "SELECT id, lieu, poste, mission , salaire 
                FROM postes
                WHERE lieu LIKE :keyword
                   OR post LIKE :keyword
                   OR mission LIKE :keyword
                LIMIT 10";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':keyword' => "%$keyword%"
            ]);

            $return = $stmt->fetchAll(PDO::FETCH_OBJ);
            $holddata = [];
             foreach ($return as $key) {
                $objet = new Post($key->id , $key->lieu , $key->poste , $key->mission , $key->salaire);
                array_push($holddata , $objet);
             }

             return $holddata;


    } catch (PDOException $e) {
        echo"erorr" . $e->getMessage();
    }
        
    }
}




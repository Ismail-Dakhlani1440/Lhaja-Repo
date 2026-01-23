<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\DB\Database;
use App\Modals\Repositories\FetchInterface;
use App\Modals\Repositories\InsertIterface;
use App\Modals\Repositories\EditInterface;
use App\Modals\Repositories\DeleteIterface;
use PDO;

abstract class BaseRepo implements FetchInterface,EditInterface,InsertIterface,DeleteIterface
{
    protected ?pdo $conn;
    protected $tableName;
    public function __construct($tableName)
    {
        $this->conn = Database::getInstance();
        $this->tableName = $tableName;
    }

    //doesnt take anything
    public function fetchAll()
    {
        $query = "SELECT * FROM {$this->tableName}";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // returns null or an array of all the objects in the database

    // takes an string of the property name just like its called in the database and the value of the property example for users
    // UserRepo->fetchByProperty('id',1)
    public function fetchByProperty($property, $value)
    {
        $stmt = $this->conn->prepare("SELECT * FROM " . $this->tableName . " WHERE " . $property . " = :" . $property);
        $stmt->bindParam(':' . $property, $value);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // returns null or an array of objects that matches the property 

    // takes an object and inserts it into the database
   public function insert($data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $stmt = $this->conn->prepare("INSERT INTO " . $this->tableName . " ($columns) VALUES ($placeholders)");
        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        $stmt->execute();
    }
    // retuns the null or the last id insterted into the table of the repo called

    // takes an id and an object and updates the row based on the new data in the object;
    public function edit($id, $data)
    {
        $query = "UPDATE {$this->tableName} SET ";
        $placeholders = [];
        foreach ($data as $key => $value) {
            $placeholders[] = $key . " = :" . $key;
        }
        $query .= implode(", ", $placeholders);
        $query .= " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        return $stmt->execute([$id]);
    }
    //returns True or False based on if it finds the data in the database

    //takes an id and deletes the row
    public function delete($id)
    {
        $query = "DELETE FROM {$this->tableName} WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
    //returns True or False based on if it finds the data in the database
}
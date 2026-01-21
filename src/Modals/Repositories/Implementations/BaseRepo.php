<?php

abstract class BaseRepo implements FetchInterface,EditInterface,InsertIterface,DeleteIterface
{
    protected ?pdo $conn;
    protected $tableName;
    public function __construct($tableName)
    {
        $this->conn = Database::getInstance();
        $this->tableName = $tableName;
    }

    public function fetchAll()
    {
        $query = "SELECT * FROM {$this->tableName}";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchByProperty($property, $value)
    {
        $stmt = $this->conn->prepare("SELECT * FROM " . $this->tableName . " WHERE " . $property . " = :" . $property);
        $stmt->bindParam(':' . $property, $value);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

   public function insert($data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $stmt = $this->conn->prepare("INSERT INTO " . $this->tableName . " ($columns) VALUES ($placeholders)");
        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        return $stmt->execute();
    }

    public function edit($id, $data)
    {
        $query = "UPDATE {$this->tableName} SET ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$data, $id]);
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->tableName} WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }
}
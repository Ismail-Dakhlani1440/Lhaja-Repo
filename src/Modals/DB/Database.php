<?php
namespace App\Modals\DB;
use PDO;
use PDOException;
class Database
{

    private static ?Database $instance = null;

    private PDO $connection;

    private function __construct()
    {
        $host = "localhost";
        $dbname = "emploi";
        $user = "root";
        $port = "3308";
       $pass = "";

        try {
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8",
                $user,
                $pass
            );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->connection;
    }
    
}


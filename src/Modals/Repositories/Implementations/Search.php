<?php

namespace App\Modals\Repositories\Implementations;
use App\Modals\DB\Database;
use App\Modals\Entity\Post;
use PDO;


class Search
{
   private $pdo;
   public function __construct(){
   $this->pdo = Database::getInstance();
}
    public function search($keyword)
    {

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

           $stmt->fetchAll(PDO::FETCH_ASSOC);



    
        
    }
}




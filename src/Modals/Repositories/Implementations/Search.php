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
    $sql = "SELECT * FROM postes 
            WHERE poste LIKE :keyword 
               OR lieu LIKE :keyword 
               OR mission LIKE :keyword";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':keyword' => '%' . $keyword . '%'
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}




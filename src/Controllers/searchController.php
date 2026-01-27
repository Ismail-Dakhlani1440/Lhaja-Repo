<?php
namespace App\Controllers;
use App\Modals\Repositories\Implementations\Search;

class SearchController 
{
   public function search()
{
    $keyword = $_GET['search'] ?? '';
    $userModel = new Search();
    return $userModel->search($keyword);
}


    public function api(){
     header('Content-Type: application/json');
        echo json_encode($this->search());
    }
}

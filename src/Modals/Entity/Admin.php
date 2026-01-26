<?php


class Admin extends User{

   private $archives = [];

   public function getArchives(){
    return $this->archives;
   }


   public function addArchive($poste , $dateArchive="" , $id =null){
    $archive = new Archive($this,$poste,$dateArchive,$id);
    $this->archives[] = $archive;
    return $archive;
   }

   

}

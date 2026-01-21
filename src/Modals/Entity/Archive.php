<?php
class Archive
{
    private  $id;
    private  $admin;
    private  $poste;
    private  $dateArchive;

    public function __construct(
         $admin,
         $poste,
         $dateArchive = "",
         $id = null
    ) {
        $this->id = $id;
        $this->admin = $admin;
        $this->poste = $poste;
        $this->dateArchive = $dateArchive;
    }

    public function getid(){
        return $this->id;
    }
    public function getadmin(){
        return $this->admin;
    }
    public function getpost(){
        return $this->poste;
    }
    public function getdateArchive(){
        return $this->dateArchive;
    }

    public function setid($id){
         $this->id = $id;
    }
    public function setadmin($admin){
         $this->admin = $admin;
       
    }
    public function setposte($poste){
          $this->poste = $poste;
       
    }
    public function setdateArchives($dateArchive){
         $this->dateArchive = $dateArchive;
    }
}

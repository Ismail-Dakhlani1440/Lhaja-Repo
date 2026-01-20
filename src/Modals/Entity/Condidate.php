<?php
class Condidate extends User
{
    private  $minSalaire;
    private  $maxSalaire;

    public function __construct(
         $name,
         $email,
         $password,
         $roleId,
         $minSalaire,
         $maxSalaire,
         $id = 0
    ) {
        parent::__construct($name, $email, $password, $roleId, $id);
        $this->minSalaire = $minSalaire;
        $this->maxSalaire = $maxSalaire;
    }
}

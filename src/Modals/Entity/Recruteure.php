<?php
class Recruteure extends User
{
    private  $companyName;
    private  $companyDomain;

    public function __construct(
         $name,
         $email,
         $password,
         $roleId,
         $companyName,
         $companyDomain,
         $id = 0
    ) {
        parent::__construct($name, $email, $password, $roleId, $id);
        $this->companyName = $companyName;
        $this->companyDomain = $companyDomain;
    }
}

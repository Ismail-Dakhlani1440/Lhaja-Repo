<?php


class User
{
    protected  $id;
    protected  $name;
    protected  $email;
    protected  $password;
    protected  $roleId;

    public function __construct(
         $name,
         $email,
         $password,
         $roleId,
         $id = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->roleId = $roleId;
    }

    public function setid($id)
    {
        $this->id = $id;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }
    public function setpassword($password)
    {
        $this->password = $password;
    }
    public function setrolid($roleId)
    {
        $this->roleId = $roleId;
    }


    public function getid()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function getroleid()
    {
        return $this->roleId;
    }


}
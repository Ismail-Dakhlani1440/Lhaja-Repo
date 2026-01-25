<?php

namespace App\services;

use App\Modals\Repositories\Implementations\UserRepo;

class AuthService
{
    private UserRepo $userRepo;

    public function __construct($userRepo)
    {
        $this->userRepo = $userRepo;

        
    }

    public function register($data)
    {
        if ($this->userRepo->fetchByProperty('email',$data['email'])) {
            $error ='invalid credentials';
            return $error;
        }

        $passwordHash = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->userRepo->insert([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => $passwordHash,
            'role'     => $data['role']
        ]);

        return null;
    }

  
    public function login($email, $password)
    {
        $user = $this->userRepo->fetchByProperty('email',$email);

        if (count($user) !=1 || !password_verify($password, $user[0]->getPassword())) {
            return false;
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role']    = $user['role'];
        $_SESSION['email']   = $user['email'];

        return true;
    }

    public function logout()
    {
        session_destroy();
    }
}

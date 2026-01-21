<?php

namespace App\services;

use App\Models\Repositories\Implementation;

class AuthService
{
    private UserRepo $userRepo;

    public function __construct($userRepo)
    {
        $this->userRepo = $userRepo;

        
    }

    public function register($data)
    {
        if ($this->userRepo->findByProperty('email',$data['email'])) {
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
        $user = $this->userRepo->findByProperty('email',$email);

        if (!$user || !password_verify($password, $user['password'])) {
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

<?php

namespace App\Services;

use App\Modals\Repositories\Implementations\UserRepo;


class AuthService
{
    private UserRepo $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function register($data)
    {
        if ($this->userRepo->fetchByProperty('u.email',$data['email'])) {
            $error ='invalid credentials';
            return $error;
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $this->userRepo->insert($data);
    }

    public function login(string $email, string $password): bool
    {
        $user = $this->userRepo->fetchByProperty('email',$email);

        if (count($user) !=1 || !password_verify($password, $user[0]->getPassword())) {
            return false;
        }

        session_regenerate_id(true);
        $_SESSION['user'] = [
            'id'    => $user->getId(),
            'email' => $user->getEmail(),
            // Assuming Role object has a getTitle() method
            'role'  => $user->getRole()->getTitle(), 
        ];

        return true;
    }

    public function logout(): void
    {
        session_unset();
        session_destroy();
    }
}
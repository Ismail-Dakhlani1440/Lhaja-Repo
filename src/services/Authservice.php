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
        // FIX: Added || (OR) operators
        if (empty($data['name']) || empty($data['email']) || empty($data['password'])) {
            return false; // Or throw exception
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $this->userRepo->insert($data);
    }

    public function login(string $email, string $password): bool
    {
        // Returns User Object or Null
        $user = $this->userRepo->fetchByProperty('email', $email);

        // FIX: Check if null OR password mismatch
        // Note: Using ->getPassword() because $user is now an Object from UserMapper
        if (!$user || !password_verify($password, $user->getPassword())) {
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
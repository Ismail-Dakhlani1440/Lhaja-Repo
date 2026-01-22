<?php

namespace App\Services;

use App\Models\Repositories\Implementations\UserRepo;

class AuthService
{
    private UserRepo $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;

        
    }

    public function register(array $data): bool
    {
        if ($this->userRepo->findByProperty('email', $data['email'])) {
            return false; 
        }

        $passwordHash = password_hash($data['password'], PASSWORD_DEFAULT);

        $insertData = [
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => $passwordHash,
            'role'     => $data['role'],
            'city'     => $data['city'] ?? null,
        ];

        if ($data['role'] === 'candidate') {
            $insertData['title']  = $data['title'] ?? null;
            $insertData['skills'] = $data['skills'] ?? null;
            $insertData['salary'] = $data['salary'] ?? null;
        }

        if ($data['role'] === 'recruiter') {
            $insertData['company']  = $data['company'] ?? null;
            $insertData['category'] = $data['category'] ?? null;
        }

        $this->userRepo->insert($insertData);
        return true;
    }

    public function login(string $email, string $password): bool
    {
        $user = $this->userRepo->findByProperty('email', $email);

        if (!$user || !password_verify($password, $user['password'])) {
            return false;
        }

        session_regenerate_id(true);
        $_SESSION['user'] = [
            'id'    => $user['id'],
            'email' => $user['email'],
            'role'  => $user['role'],
        ];

        return true;
    }

    public function logout(): void
    {
        session_unset();
        session_destroy();
    }
}

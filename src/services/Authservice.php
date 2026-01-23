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
<<<<<<< HEAD
        // FIX: Added || (OR) operators
        if (empty($data['name']) || empty($data['email']) || empty($data['password'])) {
            return false; // Or throw exception
=======
        if ($this->userRepo->fetchByProperty('email',$data['email'])) {
            $error ='invalid credentials';
            return $error;
>>>>>>> c05d7f4b896c7092c0853726dd2db5db0e631a3c
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $this->userRepo->insert($data);
    }

    public function login(string $email, string $password): bool
    {
<<<<<<< HEAD
        // Returns User Object or Null
        $user = $this->userRepo->fetchByProperty('email', $email);

        // FIX: Check if null OR password mismatch
        // Note: Using ->getPassword() because $user is now an Object from UserMapper
        if (!$user || !password_verify($password, $user->getPassword())) {
=======
        $user = $this->userRepo->fetchByProperty('email',$email);

        if (count($user) !=1 || !password_verify($password, $user[0]->getPassword())) {
>>>>>>> c05d7f4b896c7092c0853726dd2db5db0e631a3c
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
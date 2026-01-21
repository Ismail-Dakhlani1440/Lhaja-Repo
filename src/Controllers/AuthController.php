<?php

namespace App\Controllers;

use App\Services\AuthService;

class AuthController
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        if ($_POST['password'] !== $_POST['password_confirm']) {
            die("Les mots de passe ne correspondent pas");
        }

        $data = [
            'name'     => trim($_POST['name']),
            'email'    => trim($_POST['email']),
            'password' => $_POST['password'],
            'role'     => $_POST['role']
        ];

        if ($this->authService->register($data)) {
            echo "Compte créé avec succès";
        } else {
            echo "Email déjà utilisé";
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        if ($this->authService->login($_POST['email'], $_POST['password'])) {
            echo "Connexion réussie";
        } else {
            echo "Email ou mot de passe incorrect";
        }
    }

    public function logout()
    {
        $this->authService->logout();
        echo "Déconnecté";
    }
}

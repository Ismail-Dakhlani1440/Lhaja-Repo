<?php

namespace App\Controllers;

use App\Services\AuthService;

class AuthController
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;

       
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') return;

        // Candidat
        if (isset($_POST['candidat'])) {
            $role = 'candidate';
            $passwordConfirm = $_POST['confirm password']; 
            $data = [
                'name'     => $_POST['name'],
                'email'    => $_POST['email'],
                'password' => $_POST['password'],
                'role'     => $role,
                'title'    => $_POST['titre'] ?? null,
                'skills'   => $_POST['compétences'] ?? null,
                'salary'   => $_POST['salaire'] ?? null,
                'city'     => $_POST['ville'] ?? null,
            ];

            if ($data['password'] !== $passwordConfirm) {
                die("Les mots de passe ne correspondent pas");
            }

            if ($this->authService->register($data)) {
                echo "Compte candidat créé avec succès";
            } else {
                echo "Email déjà utilisé";
            }
        }

        elseif (isset($_POST['recruteur'])) {
            $role = 'recruiter';
            $passwordConfirm = $_POST['confirmpassword'];
            $data = [
                'name'     => $_POST['name'],
                'email'    => $_POST['email'],
                'password' => $_POST['password'],
                'role'     => $role,
                'company'  => $_POST['nomentreprise'] ?? null,
                'category' => $_POST['categories'] ?? null,
                'city'     => $_POST['ville'] ?? null,
            ];

            if ($data['password'] !== $passwordConfirm) {
                die("Les mots de passe ne correspondent pas");
            }

            if ($this->authService->register($data)) {
                echo "Compte recruteur créé avec succès";
            } else {
                echo "Email déjà utilisé";
            }
        }
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') return;

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($this->authService->login($email, $password)) {
            echo "Connexion réussie";
            // Redirection selon rôle
            if ($_SESSION['user']['role'] === 'recruiter') {
                header('Location: /recruiter/dashboard');
            } else {
                header('Location: /candidate/dashboard');
            }
            exit;
        }

        die("Email ou mot de passe incorrect");
    }
    public function logout(): void
    {
        $this->authService->logout();
        header('Location: /login');
        exit;
    }
}

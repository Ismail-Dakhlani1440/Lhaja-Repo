<?php

namespace App\Controllers;

use App\Modals\Repositories\Implementations\RoleRepo;
use App\Modals\Repositories\Implementations\UserRepo;
use App\Services\AuthService;

class AuthController extends AbstractController
{
    private $authService;

    public function __construct()
    {
        // FIX: Chain the dependencies correctly
        // RoleRepo -> goes into -> UserRepo -> goes into -> AuthService
        $roleRepo = new RoleRepo();
        $userRepo = new UserRepo($roleRepo);

        $this->authService = new AuthService($userRepo);
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') return;

        $passwordConfirm = $_POST['passwordConfirm'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($password !== $passwordConfirm) {
            die("Les mots de passe ne correspondent pas");
        }

        // Simplify data gathering
        $data = [
            'name'     => trim($_POST['name']),
            'email'    => trim($_POST['email']),
            'password' => $password,
        ];

        // Specific logic
        if (isset($_POST['candidat'])) {
            $data['roleId'] = 2; // Example ID for Candidate
            // Add other candidate fields...
        } elseif (isset($_POST['recruteur'])) {
            $data['roleId'] = 3; // Example ID for Recruiter
            // Add other recruiter fields...
        }

        if ($this->authService->register($data)) {
            header('Location: /login');
            exit;
        } else {
            echo "Erreur lors de l'inscription";
        }
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') return;

        if ($this->authService->login($_POST['email'], $_POST['password'])) {
            // Redirect based on the session role set in AuthService
            if ($_SESSION['user']['role'] === 'recruiter') {
                header('Location: /recruteur/dashboard.php');
            } else {
                header('Location: /candidate/dashboard.php');
            }
            exit;
        }

        echo "Email ou mot de passe incorrect";
    }

    public function getViewRegister()
    {
        include_once "../Lhaja-Repo/src/Views/Auth/register.php";
    }

    public function logout(): void
    {
        $this->authService->logout();
        header('Location: /login.php');
        exit;
    }
}

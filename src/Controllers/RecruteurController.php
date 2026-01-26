<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Modals\Entity\Post;
use App\Modals\Repositories\Implementations\PostRepo;
use App\Modals\Repositories\Implementations\CategoryRepo;
use App\Modals\Repositories\Implementations\RoleRepo;
use App\Modals\Repositories\Implementations\UserRepo;

class RecruteurController extends AbstractController
{
    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        } else {
            $user = $_SESSION['user'];
            if ($user['role'] !== 'recruteur') {
                $this->redirect('/');
            } 
        }
    }

    public function dashboardRecruteur()
    {
        $categoryRepo = new CategoryRepo();
        $userRepo = new UserRepo(new RoleRepo());
        $postRepo = new PostRepo($categoryRepo, $userRepo);

        $this->getView('recruteure/dashboard.php', [
            'posts' => $postRepo->fetchByProperty('recruteur_id', $_SESSION['user']['id']),
        ]);
    }

    public function addPost()
    {
        $categoryRepo = new CategoryRepo();
        $userRepo = new UserRepo(new RoleRepo());
        $postRepo = new PostRepo($categoryRepo, $userRepo);
        if (isset($_POST['ajoute'])) {
            $category = $categoryRepo->fetchByProperty('id', $_POST['category']);
            $recruteur = $userRepo->fetchByProperty('id', $_SESSION['user']['id']);

            $post = new Post(
                $category,
                $recruteur,
                $_POST['lieu'],
                $_POST['mission'],
                $_POST['salary'],
                null
            );
            
            if ($postRepo->insert($post)) {
                $this->redirect('/dashboardRecruteur');
            } else {
                $this->getView('recruteure/dashboard.php', [
                    'error' => 'Une erreur est survenue'
                ]);
                exit;
            }
        }
    }

    public function updatePost()
    {
         $categoryRepo = new CategoryRepo();
        $userRepo = new UserRepo(new RoleRepo());
        $postRepo = new PostRepo($categoryRepo, $userRepo);

        if (isset($_POST['update'])) {
            $post = $postRepo->fetchByProperty('id', $_GET['id'])[0];
            $post->setMission($_POST['mission']);
            $post->setSalaire($_POST['salary']);
            $post->setLieu($_POST['location']);
            $category = $categoryRepo->fetchByProperty('id', $_POST['category']);
            $post->setCategorie($category);

            if ($postRepo->edit($post->getId(), $post)) {
                $this->redirect('/dashboardRecruteur');
            } else {
                $this->getView('recruteure/dashboard.php', [
                    'error' => 'Une erreur est survenue'
                ]);
                exit;
            }
        }
    }

    public function deletePost() {
        $categoryRepo = new CategoryRepo();
        $userRepo = new UserRepo(new RoleRepo());
        $postRepo = new PostRepo($categoryRepo, $userRepo);

        if (isset($_POST['delete'])) {
            $postRepo->delete($_GET['id']);
        }

        $this->redirect('/dashboardRecruteur');
    }
}

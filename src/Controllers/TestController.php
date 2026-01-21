<?php

namespace App\Controllers;

use App\Controllers\AbstractController;

class TestController extends AbstractController
{
    public function home()
    {
        $this->getView('home.php');
    }
    public function login()
    {
        $this->getView('Auth/login.php');
    }

    public function register()
    {
        $this->getView('Auth/register.php');
    }
    public function dashboard()
    {
        $this->getView('Admin/dashboard.php');
    }
    public function offres()
    {
        $this->getView('Admin/offres.php');
    }
    public function tags()
    {
        $this->getView('Admin/tags.php');
    }
    public function categories()
    {
        $this->getView('Admin/categories.php');
    }
    public function dashboardCandidate()
    {
        $this->getView('candidate/dashboard.php');
    }
    public function JobsRecommandés()
    {
        $this->getView('candidate/JobsRecommandés.php');
    }
    public function dashboardRecruteur()
    {
        $this->getView('recruteure/dashboard.php');
    }
    public function candidatures()
    {
        $this->getView('recruteure/candidatures.php');
    }
}

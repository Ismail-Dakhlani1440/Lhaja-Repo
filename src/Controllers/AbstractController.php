<?php

namespace App\Controllers;

abstract class AbstractController
{
    protected function getView(string $path, array $data = [])
    {
        extract($data);
        
        $templateName = __DIR__ . '/../Views/' . $path;
        require_once $templateName;
    }


    protected function redirect(string $path)
    {
        header("Location: $path");
        exit();
    }
}

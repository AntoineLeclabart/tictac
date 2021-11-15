<?php

namespace App\Controller;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

abstract class AbstractAPIController
{
    public function __construct()
    {
        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
    }
}
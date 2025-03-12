<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace App\Router;

// Importa a classe Router
use App\Router;

// Habilita mostrar erros
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// Carrega o autoload do composer
require_once __DIR__ . "/vendor/autoload.php";

// Cria uma instância da classe Router
$router = new Router();
$router->route();

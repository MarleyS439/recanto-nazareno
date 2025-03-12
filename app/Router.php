<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace App;

// Importa a classe ErrorController
use Controller\ErrorController;

/**
 * Classe responsável pelas rotas de controladores da aplicação
 *
 * @package App
 * @author @MarleyS439
 */
class Router
{
    /**
     * @var array $routes - Rotas
     */
    private array $routes = [
        "/" => ["HomeController", "index"],
    ];

    /**
     * Método acessar os controladores de cada rota
     *
     * @param void
     * @return void
     */
    public function route(): void
    {
        // Obtém os parâmetros da URL
        $url = $_GET["url"] ?? "/";
        $action = $_GET["action"] ?? null;
        $id = $_GET["id"] ?? null;

        if (array_key_exists($url, $this->routes)) {
            $controllerName = "\\Controller\\" . $this->routes[$url][0];
            $method = $this->routes[$url][1];

            if (!class_exists($controllerName)) {
                $this->handleError();
                return;
            }

            $controller = new $controllerName();

            if ($action && method_exists($controller, $action)) {
                $controller->$action($id);
            } elseif (method_exists($controller, $method)) {
                $controller->$method($id);
            } else {
                $this->handleError();
            }
        } else {
            $this->handleError();
        }
    }

    /**
     * Método para lidar com erros
     *
     * @param void
     * @return void
     */
    public function handleError(): void
    {
        $controller = new ErrorController();
        $controller->index();
    }
}

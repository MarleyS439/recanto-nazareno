<?php

declare(strict_types=1);

namespace App;

use Controller\ErrorController;

/**
 * Classe responsável pelas rotas de controladores da aplicação
 *
 * @author Marley de S. Santos (MarleyS439) <marleysantos439@gmail.com>
 */
class Router
{
    /**
     * @var array $routes - Rotas
     */
    private array $routes = [
        "/" => ["HomeController", "index"],
        "/budget" => ["HomeController", "requestBudget"],
    ];

    /**
     * Método acessar os controladores de cada rota
     *
     * @author Marley de S. Santos (MarleyS439) <marleysantos439@gmail.com>
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
     * @author Marley de S. Santos (MarleyS439) <marleysantos439@gmail.com>
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

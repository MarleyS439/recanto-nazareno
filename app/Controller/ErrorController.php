<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace Controller;

/**
 * Classe responsável por lidar com erros na URL
 *
 * @package App\Controller
 * @author @MarleyS439
 */
class ErrorController
{
    public function index(): void
    {
        http_response_code(404);
    }
}

<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace Controller;

/**
 * Classe responsável pela home
 *
 * @package App\Controller
 * @author @MarleyS439
 */
class HomeController
{
    /**
     * Método para direcionar o início
     *
     * @param void
     * @return void
     */
    public function index(): void
    {
        include "app/View/home.php";
    }
}

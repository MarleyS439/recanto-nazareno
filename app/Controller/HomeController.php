<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace Controller;

// Importa a classe DateTime
use DateTime;

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

    /**
     * Método para solicitar um orçamento
     *
     * @param void
     * @return bool
     */
    public function requestBudget(): void
    {
        // Verifica os dados
        $name = $_POST["name"] ?? "";
        $phone = $_POST["phone"] ?? "";
        $email = $_POST["email"] ?? "";
        $date = $_POST["date"] ?? null;
        $participants = $_POST["participants"] ?? null;
        $eventType = $_POST["eventType"] ?? "";

        // Caso não esteja vazio
        if (
            empty($name) &&
            empty($phone) &&
            empty($email) &&
            empty($date) &&
            empty($participants) &&
            empty($eventType)
        ) {
            echo "Todos os dados são obrigatórios!";
            exit();
        }

        // Cria um objeto de Data e Hora
        $date = new DateTime();
        $dateFormatted = $date->format("d/m/Y");

        // Mensagem
        $message = "Olá!\n\nMeu nome é $name. \n\nGostaria de mais informações para a locação da Chácara Recanto Nazareno para oas seguintes informações: \n\nData: $dateFormatted\nQuantidade de convidados: $participants\nTipo do evento: $eventType\nMeu contato: $phone\n Meu e-mail: $email";

        // Codifica a mensagem para a URL
        $encodeMessage = urlencode($message);

        // Link para o WhatsApp
        $link = "https://api.whatsapp.com/send?phone=+5511936180643&text=$encodeMessage";

        // Direciona para o link do WhatsApp
        header("Location: $link");
        exit();
    }
}

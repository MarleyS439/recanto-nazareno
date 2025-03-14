<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace App\Service;

// Importa a classe PHP Mailer
use DateTime;
use PHPMailer\PHPMailer\PHPMailer;

// Importa a classe Exception do PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Classe responsável pelo serviço de e-mail
 */
class EmailService
{
    /**
     * @var string $host - Servidor
     */
    private string $host;

    /**
     * @var string $username - Nome do Usuário do Servidor
     */
    private string $username;

    /**
     * @var string $password - Senha do Usuário
     */
    private string $password;

    /**
     * @var int $port - Porta
     */
    private int $port;

    /**
     * @var string $email - E-mail do Destinatário
     */
    private string $email;

    /**
     * @var string $name - Nome do Remetente
     */
    private string $name;

    /**
     * Construtor da classe EmailService
     *
     * Carrega as configurações do e-mail
     *
     * @author @MarleyS439
     */
    public function __construct()
    {
        $config = parse_ini_file(__DIR__ . "/../../config/config.ini", true);

        if (isset($config["email"])) {
            $this->host = $config["email"]["HOST"];
            $this->username = $config["email"]["USERNAME"];
            $this->password = $config["email"]["PASSWORD"];
            $this->port = (int) $config["email"]["PORT"];
        } else {
            die("Erro ao carregar configurações.");
        }
    }

    /**
     * Método para Enviar E-mail
     *
     * @param string $email - E-mail do destinatário
     * @param string $name - Nome do Remetente
     * @return bool
     */
    public function sendMail(
        string $email,
        string $name,
        string $phone,
        DateTime $date
    ): bool {
        // Cria uma instância do PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configurações do SMTP
            $mail->isSMTP();
            $mail->Host = $this->host;
            $mail->SMTPAuth = true;
            $mail->Username = $this->username;
            $mail->Password = $this->password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->CharSet = "UTF-8";
            $mail->Port = $this->port;

            // Remetente
            $mail->setFrom($this->username, "Chácara Recanto Nazareno");
            // Destinatário
            $mail->addAddress($email);

            // Corpo do E-mail
            $mail->isHTML(true);
            $mail->Subject = "Solicitação de Orçamento para Evento";
            $mail->AltBody = "Solicitação de Orçamento para Evento";
            $mail->Body = "Gostaria de mais informações sobre a Locação da Chácara Recanto Nazareno para {$this->$date}
            <br>
            Meu nome é:
            ";

            // Envia o e-mail
            $mail->send();
            return true;
        } catch (Exception $exception) {
            echo "Erro ao enviar e-mail: " . $exception->getMessage();
            return false;
        }
    }
}

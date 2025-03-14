<?php

// Declaração de tipagem forte
declare(strict_types=1);

// Declaração do namespace
namespace App\Model;

// Importa a classe DateTime
use DateTime;

/**
 * Classe responsável pelo modelo de Contato
 *
 * @package App\Model
 * @author @MarleyS439
 */
class Contact
{
    /**
     * @var string $name - Nome
     */
    private string $name;

    /**
     * @var string $phone - Número de celular
     */
    private string $phone;

    /**
     * @var string $email - E-mail
     */
    private string $email;

    /**
     * @var DateTime $date - Data do evento
     */
    private DateTime $date;

    /**
     * @var int $participants - Quantidade de convidados
     */
    private int $participants;

    /**
     * @var string $eventType - Tipo de evento
     */
    private string $eventType;

    /**
     * Método construtor da classe Contact
     *
     * @param string $name - Nome
     * @param string $phone - Número de celular
     * @param string $email - E-mail de contato
     * @param DateTime $date - Data do evento
     * @param int $participants - Quantidade de convidados
     * @param string $eventType - Tipo de evento
     */
    public function __construct(
        string $name,
        string $phone,
        string $email,
        DateTime $date,
        int $participants,
        string $eventType
    ) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->date = $date;
        $this->participants = $participants;
        $this->eventType = $eventType;
    }

    /**
     * Método para Obter o Nome
     *
     * @param void
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Método para Definir o Nome
     *
     * @param string $name - Nome
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Método para Obter o Número de Celular
     *
     * @param void
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Método para Definir o Número de Celular
     *
     * @param string
     * @return void
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Método para Obter o E-mail
     *
     * @param void
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Método para Definir o E-mail
     *
     * @param string $email - E-mail
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Método para Obter a Data do Evento
     *
     * @param void
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * Método para Definir a Data do Evento
     *
     * @param DateTime $date - Data do Evento
     * @return void
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * Método para Obter a Quantidade de Convidados
     *
     * @param void
     * @return int
     */
    public function getParticipants(): int
    {
        return $this->participants;
    }

    /**
     * Método para Definir a Quantidade de Convidados
     *
     * @param int $participants - Quantidade de Convidados
     * @return void
     */
    public function setParticipants(int $participants): void
    {
        $this->participants = $participants;
    }

    /**
     * Método para Obter o Tipo de Evento
     *
     * @param void
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * Método para Definir o Tipo de Evento
     *
     * @param string $eventType - Tipo de Evento
     * @return void
     */
    public function setEventType(string $eventType): void
    {
        $this->eventType = $eventType;
    }
}

<?php

/* Dados for formulário */
$nome =  $_POST['nome'];
$tipo_de_evento = $_POST['tipo'];
$quantidade_convidados = $_POST['quantidade'];
$celular = $_POST['celular'];

$data_string = $_POST['data'];
$timestamp = strtotime($data_string);

if ($timestamp === false) {
    echo "Data inválida.";
} else {
    $data_formatada = date('d/m/Y', $timestamp);
    echo "Data formatada: " . $data_formatada;
}


/* 
$dados = array(
    $nome,
    $tipo_de_evento,
    $quantidade_convidados,
    $data_formatada,
    $celular
);

var_dump($dados); */


$mensagem = "Olá!\n\nMeu nome é $nome. \n\nGostaria de um orçamento da locação da chácara das seguintes informações: \n\nData: $data_formatada\nQuantidade de pessoas: $quantidade_convidados\nTipo de evento: $tipo_de_evento\nMeu contato: $celular";

$mensagemCodificada = urlencode($mensagem);

$link = "https://api.whatsapp.com/send?phone=+551146783969&text=$mensagemCodificada";

header("Location: $link");
exit;

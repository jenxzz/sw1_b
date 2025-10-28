<?php
    header ("Content-Type: application/json");
    header ("Acess-Control-Allow-Origin: *");
    header ("Acess-Control-Allow-Methods: GET, POST, PUT, DELETE");

    $conexao = new mysqli ("localhost", "root", "", "AulaSW");

    if ($conexao->connect_error) {
        echo json_encode ("{ 'Conexão Falhou': '".conexao->connect_error."'}");
    }

    $MetodoHTTP = $_SERVER ['REQUEST_METHOD'];
    echo $MetodoHTTP;
?>
<?php 
  $conexao = new mysqli("localhost", "root", "");
  
  if ($conexao -> connect_error) {
    echo "Conexão falhou: ".$conexao -> connect_error;
  }

  $create_database = "CREATE DATABASE IF NOT EXISTS AulaSW";
  $conexao -> query($create_database);

  $tabela_clientes = "CREATE TABLE clientes (
      ID INT PRIMARY KEY AUTO_INCREMENT,
      Nome VARCHAR(180) NOT NULL,
      Telefone VARCHAR(20)
  )";

  $tabela_atendentes = "CREATE TABLE atendentes (
      ID INT PRIMARY KEY AUTO_INCREMENT,
      Nome VARCHAR(180) NOT NULL,
      Telefone VARCHAR(20) NOT NULL
  )";

  $tabela_servicos = "CREATE TABLE servicos (
      ID INT PRIMARY KEY AUTO_INCREMENT,
      Servico VARCHAR(180)
  )";

  $tabela_horarios = "CREATE TABLE horarios (
      ID INT PRIMARY KEY AUTO_INCREMENT,
      Horario_Inicio VARCHAR(5) NOT NULL,
      Horario_Termino VARCHAR(5) NOT NULL,
      Dia_Semana VARCHAR(10) NOT NULL
  )";

  $tabela_atendente_horario = "CREATE TABLE atendente_horario (
      ID INT PRIMARY KEY AUTO_INCREMENT,
      ID_Atendente INT NOT NULL,
      ID_Horario INT NOT NULL,
      CONSTRAINT FK_Atendentes FOREIGN KEY ID_Atendentes REFERENCES Atendentes(ID),
      CONSTRAINT FK_Horarios FOREIGN KEY ID_Horarios REFERENCES Horarios(ID)
  )";
?>
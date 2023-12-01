<?php

// Inicia a sessão
session_start();

// Inclui arquivos de conexão ao banco e funcionalidades
include_once("connection.php");
include_once("url.php");

// Recebe dados do formulário via POST
$data = $_POST;

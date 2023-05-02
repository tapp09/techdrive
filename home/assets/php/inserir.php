<?php

include("conecta.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["uf"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];

if(isset($_POST["inserir"])) {

    $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$nome', '$email', $cep, '$cidade', '$estado', '$cpf', '$senha', '$rua', '$bairro')");
    $resultado = $comando->execute();
    header("location: index.php");
}


?>
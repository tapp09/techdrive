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


$comando = $pdo->prepare("INSERT INTO cadastro (nome, email, cep, cidade, estado, cpf, senha, rua, bairro) VALUES($nome, $email, $cep, $cidade, $estado, $cpf, $senha, $rua, $bairro)");
$resultado = $comando->execute();

//para voltar para o formulario

header("location: index.php");


?>
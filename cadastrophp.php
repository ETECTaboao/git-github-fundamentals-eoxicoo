<?php
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];
$erro = 0;

if (empty($nome) || !strstr($nome, ' ')) 
{
    echo "Favor digitar seu nome.";
    $erro = 1;
}

if ($erro === 0) 
{
    echo "Cadastro concluido!";
}
?>

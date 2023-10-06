<?php
include_once("conexao.php");

$name = filter_input(INPUT_POST, 'nome_sobrenome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$data = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO usuarios (nome_completo, email, data_nascimento) VALUES ('$name', '$email', '$data')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    header("Location: /PI_ETE");
}else{
    header("Location: /PI_ETE");
}


$sugestao = filter_input(INPUT_POST, 'sugestao', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email_usuario', FILTER_SANITIZE_EMAIL);

$result_sugestao = "INSERT INTO sugestao (sugestao, email) VALUES ('$sugestao', '$email')";
$resultado_sugestao = mysqli_query($conn, $result_sugestao);

if(mysqli_insert_id($conn)){
    header("Location: /PI_ETE/contato.php");
}else{
    header("Location: /PI_ETE/contato.php");
}

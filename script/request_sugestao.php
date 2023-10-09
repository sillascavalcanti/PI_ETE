<?php
include_once("conexao.php");

$sugestao = filter_input(INPUT_POST, 'sugestao', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email_usuario', FILTER_SANITIZE_EMAIL);

$result_sugestao = "INSERT INTO sugestao (sugestao, email) VALUES ('$sugestao', '$email')";
$resultado_sugestao = mysqli_query($conn, $result_sugestao);

if(mysqli_insert_id($conn)){
    header("Location: /PI_ETE/contato.php");
}else{
    header("Location: /PI_ETE/contato.php");
}
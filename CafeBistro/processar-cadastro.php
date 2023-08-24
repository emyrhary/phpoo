<?php
include 'conexao.php';
include 'Usuario.php';

if (($_SERVER["REQUEST_METHOD"]=="POST")){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $repetirsenha = $_POST["repetir-senha"];

    if ($senha === $repetirsenha) {
        $usuario = new Usuario($conn);
        if ($usuario->cadastrar($nome,$email,$senha)){

            header("Location: cadastrar-usuario-sucesso.php");
            exit();
        }
    } else {
    header("Location: cadastrar-usuario.php?erro=1");
    exit();
    }
}

?>
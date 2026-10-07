<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "admin" && $senha == "1234") {
        $_SESSION["usuario"] = $usuario;
        echo "Login bem-sucedido! Bem-vindo, $usuario.";
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
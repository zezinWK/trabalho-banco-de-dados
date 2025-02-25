<?php
require "usuarios.php";
    
    session_start();

    
$nome_digitado = $_POST['nome'];
$senha_digitado = $_POST['senha'];

$usuario = verifica_usuario($nome_digitado, $senha_digitado);

if ($usuario) {
    
    $_SESSION['usuario'] = $usuario;     
    header("location: dashboard.php");
    

} else {
    echo "Erro: Usuário ou senha inválidos.";
    header("location: login.php?erro=1");
    exit();
}

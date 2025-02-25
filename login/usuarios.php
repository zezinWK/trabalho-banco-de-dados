<!-- FUNÇÕES PARA O BANCO DE DADOS NA TABELA USUÁRIOS -->

<?php
require 'db.php';

function selectAll() {
    global $pdo;
    $sql = "SELECT * FROM usuarios";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function selecrById($id) {
    global $pdo;
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $usuario = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $usuario[0];
}

function verifica_usuario($nome, $senha) {
    global $pdo;
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = $senha";
    $usuario = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $usuario;
}

function insert($nome, $senha, $cargo) {
    global $pdo;
    $sql = "INSERT INTO usuarios (nome, senha, cargo) VALUES ('$nome', '$senha', '$cargo')";
    $pdo->exec($sql);
}

function update($id, $nome, $senha, $cargo) {
    global $pdo;
    $sql = "UPDATE usuarios SET nome = '$nome', senha = '$senha', cargo = '$cargo' WHERE id = $id";
    $pdo->exec($sql);
}

function delete($id) {
    global $pdo;
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $pdo->exec($sql);
}
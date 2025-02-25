<!-- CONFUGURAÇÕES E CONEXÃO COM O BANCO -->
<?php
$host = 'localhost';  // Servidor MySQL (no XAMPP é "localhost")
$user = 'root';       // Usuário padrão do MySQL no XAMPP
$pass = '';           // Senha vazia por padrão no XAMPP
$dbname = 'banco'; // Nome do banco de dados (substitua pelo seu)

try {
    // Criando a conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // Configura PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage()); // Exibe erro caso a conexão falhe
}

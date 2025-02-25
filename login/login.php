<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Sigmar&display=swap');
    </style>
</head>
<body style="background-color: rgb(131, 40, 119)">
    </div>
    <main>
    <div class="default">
        <div class="form">
        <form action="auth.php" method="post">
            <h1>Login</h1>
            <label style="margin-right: 100px; font-size: 20px;" for="user">Usuário</label>
            <br>
            <br>
            <input type="nome" name="user" required></input>
            <br>
            <br>
            <label style="margin-right: 100px; font-size: 20px;" for="password">Senha</label>
            <br>
            <br>
            <input type="password" name="senha" required></input>
            <br>
            <br>
            <br>
            <button type="submit">Entrar</button>
        </form>
        </div>
    </div>
    </main>
</body>
</html>
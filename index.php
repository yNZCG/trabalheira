<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="login.php" method="POST">
    <h2>Cadastro de Funcionários</h2>

    <input type="text" name="usuario" placeholder="Usuário" required>
    <input type="password" name="senha" placeholder="Senha" required>

    <button type="submit">Entrar</button>
</form>

</body>
</html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>

<h2>Olá, Admin</h2>

<a href="cadastro.php">Cadastrar Funcionário</a><br>
<a href="listagem.php">Listar Funcionários</a><br>
<a href="logout.php">Sair</a>

<?php
session_start();
include("conexao.php");

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
$result = pg_query($conn, $sql);

if (pg_num_rows($result) > 0) {
    $_SESSION['user'] = $usuario;
    header("Location: dashboard.php");
} else {
    echo "Login inválido";
}
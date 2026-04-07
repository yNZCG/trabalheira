<?php
$conn = pg_connect("host=localhost dbname=funcionarios user=postgres password=123");

if (!$conn) {
    die("Erro na conexão");
}
?>
<?php
include("../conn.php");
header('Content-Type: application/json');

$id = $_GET['id'];
$categ = $_GET['categ'];
$nome = $_GET['nome'];
$valor = $_GET['valor'];
$qnt = $_GET['qnt'];

$sql_update = "UPDATE produto SET categoria_id = '$categ', nome = '$nome', preco = '$valor', qnt = '$qnt'
WHERE produto_id = '$id'";

if (mysqli_query($conn, $sql_update)) {
    echo json_encode("");
} else {
    echo json_encode("404" . mysqli_error($conn));
}

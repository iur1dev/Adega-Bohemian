<?php
include("../conn.php");
header('Content-Type: application/json');

$categoria = $_GET['categ'];
$nome = $_GET['nome'];
$valor = $_GET['valor'];
$qnt = $_GET['qnt'];

$sql = "INSERT INTO produto(categoria_id,nome,preco,qnt) 
    VALUE ('$categoria','$nome','$valor','$qnt')";

if (mysqli_query($conn, $sql)) {
    echo json_encode('');
} else {
    echo json_encode("404" . mysqli_error($conn));
}

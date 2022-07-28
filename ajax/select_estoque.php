<?php
include("../conn.php");
header('Content-Type: application/json');

$sql = "SELECT produto_id, categoria_id, nome, REPLACE(preco, '.', ','), qnt FROM produto";
$tabela = mysqli_query($conn, $sql);
$dados = mysqli_fetch_all($tabela);

if (mysqli_num_rows($tabela) > 0) {
    echo json_encode($dados);
} else {
    echo json_encode("404" . mysqli_error($conn));
}

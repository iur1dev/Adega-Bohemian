<?php
include("../conn.php");
header('Content-Type: application/json');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT produto_id, categoria_id, nome, REPLACE(preco, '.', ','), qnt FROM produto WHERE produto_id = '$id'";
    $tabela = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_all($tabela);

    if (mysqli_num_rows($tabela) > 0) {
        echo json_encode($dados);
    } else {
        echo json_encode("404" . mysqli_error($conn));
    }
} else {
    $id = 0;
}

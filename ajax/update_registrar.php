<?php
include("../conn.php");
header('Content-Type: application/json');

$id = $_GET['id'];
$quantidade = $_GET['quantidade'];

$sql = "UPDATE produto SET qnt = '$quantidade'
WHERE produto_id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo json_encode("");
} else {
    echo json_encode("404" . mysqli_error($conn));
}

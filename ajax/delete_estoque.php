<?php
include("../conn.php");

$id = $_GET['id'];

$sql = "DELETE FROM produto WHERE produto_id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo json_encode("");
} else {
    echo json_encode("404" . mysqli_error($conn));
}

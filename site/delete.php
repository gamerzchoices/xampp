<?php

include 'connection.php';

$id = $_GET['id'];

$delete = "DELETE FROM users where id='$id'";

$Query = $conn->query($delete);

if ($Query == TRUE) {
    header("location:index.php");
} else {
    echo "Try Later";
}

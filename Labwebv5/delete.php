<?php
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM reviews WHERE ReviewID= $id";

if (mysqli_query($conn, $sql)) {
    header("Location: account.php");
} else {
    echo "Delete failed: " . mysqli_error($conn);
}
?>
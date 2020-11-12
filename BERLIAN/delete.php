<?php
    include "../connection.php";
    $id = $_GET['rental_id'];

    // Delete data
    $delete = mysqli_query($conn, "DELETE FROM rental WHERE rental_id = $id");
    header("Location:list_transaction.php"); 
?>
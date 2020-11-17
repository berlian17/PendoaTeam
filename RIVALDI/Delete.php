<?php
    include "connection.php";
    $id = $_GET['item_id'];

    // Delete data
    $delete = mysqli_query($conn, "DELETE FROM item WHERE item_id = $id");
    header("Location:list_item.php"); 
?>
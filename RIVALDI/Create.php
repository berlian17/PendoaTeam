<?php
    include "connection.php";

    if(isset($_POST['add'])) {
        $name = $_POST['name'];
        $Type = $_POST['Type'];
        $Cap = $_POST['Cap'];
        $Speks = $_POST['Speks'];
        $Price1 = $_POST['Price1'];
        $Ava = $_POST['Ava'];
        $Loc = $_POST['Loc'];

        // Insert data
        $queryinsert = "INSERT INTO item (item_name, item_type, capacity, specification, price, availability, location) 
                        VALUES ('" . $name . "', '" . $Type . "', '" . $Cap . "', '" . $Speks . "', " . $Price1 . ", '" . $Ava . "', '" . $Loc . "')";

        if (mysqli_query($conn, $queryinsert)) {
            echo "<script>alert('Data tersimpan');</script>";
            header("Location:ItemCreate.php");
        } else {
            echo "<script>alert('Gagal tersimpan');</script>";
            header("Location:ItemCreate.php");
        }
    }
?>
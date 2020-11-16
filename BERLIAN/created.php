<?php
    include "../connection.php";

    if(isset($_POST['Submit'])) {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];
        $amount = $_POST['amount'];
        $dateOut = $_POST['dateOut'];
        $dateIn = $_POST['dateIn'];
        $nameCard = $_POST['nameCard'];
        $numberCard = $_POST['numberCard'];
        $expiration = $_POST['expiration'];
        $securityCode = $_POST['securityCode'];

        // Insert data
        $queryinsert = "INSERT INTO rental (email, phone, address, zip_code, amount, date_out, date_in, debit_card_number, name_card, expiration, security_code, created_at) 
                        VALUES ('" . $email . "', '" . $phone . "', '" . $address . "', '" . $zip . "', " . $amount . ", '" . $dateOut . "', '" . $dateIn . "', " . $numberCard . ", '" . $nameCard . "', '" . $expiration . "', " . $securityCode .", NOW())";

        if (mysqli_query($conn, $queryinsert)) {
            echo "<script>alert('Data tersimpan');</script>";
            header("Location:list_transaction.php");
        } else {
            echo "<script>alert('Gagal tersimpan');</script>";
            header("Location:form_rental.php");
        }
    }
?>
<?php
    include "../connection.php";

    if(isset($_POST['Edit'])) {

        $id = $_POST['rental_id'];
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

        $queryupdate = "UPDATE rental SET email='$email', phone='$phone', address='$address', zip_code='$zip', amount=$amount, date_out='$dateOut', date_in='$dateIn', name_card='$nameCard', debit_card_number=$numberCard, expiration='$expiration', security_code=$securityCode WHERE rental_id=$id";

        // Update data
        if (mysqli_query($conn, $queryupdate)) {
            echo "<script>alert('Data terupdate');</script>";
            header("Location:list_transaction.php"); 
        } else {
            echo "<script>alert('Gagal terupdate');</script>";
            mysqli_error($queryupdate);
        }
    }
?>
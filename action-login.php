<?php
    include "connection.php";

    if(isset($_POST['signin'])) {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Select data
        $query = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username'") or die("Query salah");
        foreach ($query as $data) {
            if($username == $data['username'] && $password == $data['password']) {
                session_start();
                $_SESSION['username'] = $data['username'];
                echo "<script>alert('Login berhasil');</script>";
                header("Location: homepage.php");
            } else {
                echo "<script>alert('Login gagal');</script>";
                header("Location: sign_in.php");
            }
            echo "<script>alert('Tidak ada data user');</script>";
        }
    }
?>
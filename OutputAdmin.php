<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="topnav">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#">CENTRAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Form Rental.php">Berlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Maria</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="InputAdmin.php">Richard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rivaldi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <?php
        $NIK = $_POST['nik'];
        $Department = $_POST['departemen'];
        $FullName = $_POST['nama'];
        $Username = $_POST['username'];
        $Email = $_POST['email'];
        $Password = $_POST['pass'];
        $PhoneNumber = $_POST['phone'];
        $City = $_POST['city'];
        $Region = $_POST['region'];
        $Gender = $_POST['gender'];

        if ($Department == "Sales") {
            $Department = "Sales";
        } else if ($Department == "Finance") {
            $Department = "Finance";
        } else if ($Department == "Marketing") {
            $Department = "Marketing";
        }

        if ($Gender == "Male") {
            $Gender = "Male";
        } else if ($Gender == "Female") {
            $Gender = "Female";
        } 
    ?>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-start">
            <table class="table">
                <thead class="table-active">
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Department</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone number</th>
                        <th>City</th>
                        <th>Region</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1.</th>
                        <td><?= $NIK ?></td>
                        <td><?= $Department ?></td>
                        <td><?= $FullName ?></td>
                        <td><?= $Username ?></td>
                        <td><?= $Email ?></td>
                        <td><?= $Password ?></td>
                        <td><?= $PhoneNumber ?></td>
                        <td><?= $City ?></td>
                        <td><?= $Region ?></td>
                        <td><?= $Gender ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <a href="InputAdmin.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Back</a>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
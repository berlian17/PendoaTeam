<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Rental form</title>
</head>
<body>
    <!-- Navbar -->
    <div class="topnav">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="width: 2500px;">
            <a class="navbar-brand" href="#">CENTRAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="Form Rental.php">Berlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Maria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Richard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rivaldi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <?php
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $zip = $_POST['zip'];
        $amount = $_POST['amount'];
        $dateOut = $_POST['dateOut'];
        $dateIn = $_POST['dateIn'];
        $payment = $_POST['payment'];
        $nameCard = $_POST['nameCard'];
        $numberCard = $_POST['numberCard'];
        $expiration = $_POST['expiration'];
        $securityCode = $_POST['securityCode'];

        if ($payment == "Credit card") {
            $Payment = "Credit card";
        } else if ($payment == "Debit card") {
            $Payment = "Debit card";
        }
    ?>

    <div class="container">
        <div class="row mt-5 d-flex justify-content-start" style="width: 2300px;">
            <table class="table" style="width: 2000px;">
                <thead class="table-active">
                    <tr>
                        <th>No</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>Region</th>
                        <th>Zip code</th>
                        <th>Amount</th>
                        <th>Date out</th>
                        <th>Date due in</th>
                        <th>Payment</th>
                        <th>Name on card</th>
                        <th>Card number</th>
                        <th>Expiration</th>
                        <th>Security code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1.</th>
                        <td><?= $firstName ?></td>
                        <td><?= $lastName ?></td>
                        <td><?= $email ?></td>
                        <td><?= $phone ?></td>
                        <td><?= $street ?></td>
                        <td><?= $city ?></td>
                        <td><?= $region ?></td>
                        <td><?= $zip ?></td>
                        <td><?= $amount ?></td>
                        <td><?= $dateOut ?></td>
                        <td><?= $dateIn ?></td>
                        <td><?= $Payment ?></td>
                        <td><?= $nameCard ?></td>
                        <td><?= $numberCard ?></td>
                        <td><?= $expiration ?></td>
                        <td><?= $securityCode ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <a href="Form Rental.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Back</a>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
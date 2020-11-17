<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Rental form</title>
    <style>
        .navbar {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        div.container {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        hr.hr1 {
            border-top: 3px solid;
        }
        hr.hr2 {
            border-top: 2px solid rgba(0,0,0,.1);
        }
    </style>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location:../sign_in.php");
    }
?>

    <!-- Navbar -->
    <div class="topnav">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#">CENTRAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link active" href="../homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="item_list.php">Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list_user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list_transaction.php">Transaction</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Container -->
    <div class="container mt-5 mb-5 p-4">
        <h2><b>Rental Form</b></h2>
        <p>Please fill in our Rental Application Form in order to express your interest in renting a property.</p>
        <hr class="hr1">

        <!-- Form -->
        <div class="row mt-4">
            <div class="col-md-8">
                <form action="created.php" method="post" class="form needs-validation" novalidate>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                        <div class="invalid-feedback">
                            Email is required.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone" required>
                        <div class="invalid-feedback">
                            Phone number is required.
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="10" placeholder="Current Address" required></textarea>
                            <div class="invalid-feedback">
                                Address is required.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputZip" name="zip" placeholder="Zip Code" required>
                            <div class="invalid-feedback">
                                Zip code is required.
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="amount">Rent Amount</label>
                        <input type="number" min="0" class="form-control" id="inputAmount" name="amount" required>
                        <div class="invalid-feedback">
                            Rent Amount is required.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="totalPrice">Total Price</label>
                        <input type="text" class="form-control" id="TP" name="totalPrice" disabled>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="period">Rental Period</label>
                            <input type="date" class="form-control" id="inputOut" name="dateOut" required>
                            <small id="hint" class="form-text text-muted">Date OUT</small>
                            <div class="invalid-feedback">
                                Date out is required.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="#" class="text-white">#</label>
                            <input type="date" class="form-control" id="inputIn" name="dateIn" required>
                            <small id="hint" class="form-text text-muted">Date DUE IN</small>
                            <div class="invalid-feedback">
                                Date due in is required.
                            </div>
                        </div>
                    </div>
                    <hr class="hr2">
                    <div class="form-group">
                        <h3><b>Payment</b></h3>
                    </div>
                    <div class="form-group">
                        <label for="nameCard">Name on card</label>
                        <input type="text" class="form-control" id="inputNameCard" name="nameCard" required>
                        <small id="hint" class="form-text text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                            Name on card is required.
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="numberCard">Debit card number</label>
                            <input type="number" min="0" class="form-control" id="inputNumberCard" name="numberCard" required>
                            <div class="invalid-feedback">
                                Credit card number is required.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Expiration">Expiration</label>
                            <input type="date" class="form-control" id="inputExpiration" name="expiration" required>
                            <div class="invalid-feedback">
                                Expiration is required.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="securityCode">Security Code</label>
                            <input type="number" min="0" class="form-control" id="inputSecurityCode" name="securityCode" required>
                            <div class="invalid-feedback">
                                Security code is required.
                            </div>
                        </div>
                    </div>
                    <hr class="hr2">
                    <div>
                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary col-md mb-2">
                    </div>
                </form>
            </div>

            <!-- Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-head">
                        <img src="concrete pump.jpg" alt="image" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table-active text-center" colspan="3">VEHICLE INFORMATION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>TYPE</b></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td><b>CAPACITY</b></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td><b>PRICE</b></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td><b>AVAILABILITY</b></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td><b>LOCATION</b></td>
                                    <td colspan="2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>         
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    // JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
</html>
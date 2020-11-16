<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Sign Up</title>
    <style>
        .navbar {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .main-col {
            float: right;
            width: 70%;
            height: 700px;
        }
        .side-col {
            float: left;
            width: 30%;
            height: 700px;
        }
        .card {
            top: 100px;
            left: 200px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        hr.hr1 {
            border-top: 3px solid;
        }
        .carousel-item {
            width: 400px;
            height: 300px;
        }
        .carousel {
            top: 200px;
            left: 100px;
        }
    </style>
</head>
<body>
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
                        <a class="nav-link active" href="homepage.php">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Container -->
    <div class="container side-col bg-light"></div>
    <div class="container main-col bg-primary">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="MARIA/3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="MARIA/5.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="MARIA/7.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </div>

    <!-- Card -->
    <div class="card position-fixed m-5 col-md-4">
        <div class="card-body">
            <h2><b>Sign In</b></h2>
            <hr class="hr1">

            <!-- Form -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <form action="action-login.php" method="post" class="form needs-validation" novalidate>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="username" required>
                            <div class="invalid-feedback">
                                Username is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password" required>
                            <div class="invalid-feedback">
                                Password is required.
                            </div>
                        </div>
                        <hr class="hr2">
                        <div>
                            <input type="submit" name="signin" value="Sign In" class="btn btn-primary col-md mb-2">
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-check form-check-inline col-sm-5">
                                <input class="form-check-input" type="checkbox" id="Checkbox" name="remember">
                                <label class="form-check-label" for="Checkbox">Remember me</label>
                            </div>
                            <div class="col-sm-5 ml-5" align="right">
                                <a href=""><h6>Forgot password?</h6></a>
                            </div>
                        </div>
                    </form>
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
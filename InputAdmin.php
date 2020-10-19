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
<div class="container mt-5">
         <div class="row">
            <div class="col-md-5">
                <img src="Image/foto FB.jpg" class="img-fluid" alt="picture">
                <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Acceptable image format (.jpg, .jpeg)</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                </form>
            </div>
            <div class="col-md-5">
            <h4 class="display-5 font-weight-bold text-dark text-center">Register as Admin</h4>
               <form action="OutputAdmin.php" method="post" class="form needs-validation" novalidate>
                  <div class="form-group">
                     <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                     <div class="invalid-feedback">
                        NIK is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <select class="custom-select" id="departemen" name="departemen">
                        <option>Department</option>
                        <option value="Sales">Sales</option>
                        <option value="Finance">Finance</option>
                        <option value="Marketing">Marketing</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="nama" name="nama" placeholder="Full Name" required>
                     <div class="invalid-feedback">
                        Full Name is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                     <div class="invalid-feedback">
                        Username is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                     <div class="invalid-feedback">
                        Email is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                     <div class="invalid-feedback">
                        Password is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                     <div class="invalid-feedback">
                        Phone number is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                     <div class="invalid-feedback">
                        City is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="region" name="region" placeholder="Region" required>
                     <div class="invalid-feedback">
                        Region is required.
                     </div>
                  </div>
                  <div class="form-group">
                     <select class="custom-select" id="gender" name="gender">
                        <option>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                     </select>
                  </div>
                  <div>
                    <input type="submit" class="btn btn-primary btn-md col-md" value="Sign Up"></input>
                  </div>
                </form>
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
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <title>CENTRAL</title>
    <style>
        body {
            background-image: url(5.jpg);
        }
        .p-custom{
            padding: 5% 10%;
        }
        .bg-custom{
            background-color: #f1f1f1;
        }
        iframe{
            width: 95%; 
            height: 37%;
        }
                
        li a:hover:not(.active) {
        background-color: #000;
        }

        .active {
        background-color: #f4b800;
        }
    </style>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a style="font-family: arial; font-size: 25px;" class="navbar-brand" href="thome.php"><b>CENTRAL</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active"> <a style="font-family: gramin;" class="nav-link" href="thome.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"> <a style="font-family: gramin;" class="nav-link" href="booking.php">BOOKING</a>
                </li>
                <li class="nav-item"> <a style="font-family: gramin;" class="nav-link" href="booking.php">CONTCAT</a>
                </li>
                <li class="nav-item"> <a style="font-family: gramin;" class="nav-link" href="booking.php">OUR TEAM</a>
                </li>
            </ul>    
        </div>
    </nav>
    
    <div class="container d-flex flex-coulumn p-3">
    <div class="row">   
        
    <!-- Form -->
    <div class="col-lg-6">
    <div class="container d-flex flex-coulumn p-10">
    <div class="container d-flex flex-coulumn p-2">
    <div class="col col-md-12 p-custom" style="width:15cm;">
    <h4 class="text-light" style="font family : arial"> Create an Account </h4>
        <form action="" method="POST">
        </form>
				<form>
					<fieldset>
                    <div class="form-group" style="font-family: gramin">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                     </div>
                     <div class="form-group" style="font-family: arila">
                        <label for="name">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email">
                     </div>
                     <div class="form-group" style="font-family: arial">
                        <label for="name">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Enter your password">
                     </div>
                     <button type="submit" style="font-family: arial" class="btn btn-dark btn-block">Sign Up</button>
					</fieldset>
                    <br>
                    
    <div style="text-align:center">
    <h6 class="text-light" style="font-family : arial"> Already have an account? </h6> 
    <a href="#" class="text-warning primary-link" style="font-family : arial">Sign In</a>

                </form>
                </div>
                </div>
              
        <!-- Carousel -->
        
    <div class="col-lg-12 p-3">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
     <div class="carousel-item active">
        <img src="4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100" alt="...">
    </div>
        </div>
        </div>
        </div>
						
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
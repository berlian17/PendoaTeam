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
    background-image: url('7.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;;
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
    <br><br><br><br><br><br><br><br>
    <div class="justify-content-center">
    <div class="p-4" style="text-align:center">
        <h3 class="text-light" style="font-family: arial;"><b>CONSTRUCTION EQUIPMENT RENTAL</b></h3>
        <!-- Send the data to booking page -->
        <div class="p-3">
        <form method="POST" action="tregister.php">
            <button class="btn btn-warning text-light" style="font-family: gramin" type="submit" name="register" value="register">REGISTER NOW</button>
        </form>
</div>
</div>
</div>
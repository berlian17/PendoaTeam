<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container">
         <div class="row">
            <div class="col-md-5">
                <img src="image/hotel room.jpg" class="img-fluid" alt="picture">
            </div>
            <div class="col-md-5">
            <h4 class="display-5 font-weight-bold text-dark text-center">Register as Admin</h4>
               <form action="OutputAdmin.php" method="post" class="form">
                  <div class="form-group">
                     <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="nama" name="nama" placeholder="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <label for="choice" class="col-sm-3 col-form-label">Room Type</label>
                     <select class="custom-select" id="pilihan" name="choice">
                        <option value="Standard">Standard</option>
                        <option value="Superior">Superior</option>
                        <option value="Luxury">Luxury</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="services" class="col-sm-3 col-form-label">Add Service(s)</label>
                     <div class="form-check">
                        <input type="checkbox" id="pilihan1" name="services" class="form-check-input" value="Room Service">
                        <label for="services"class="form-check-label"> Room Service </label>
                     </div>
                     <div class="form-check">
                        <input type="checkbox" id="pilihan2" name="services" class="form-check-input" value="Breakfast">
                        <label for="services" class="form-check-label"> Breakfast </label>
                     </div>
                  </div>
                  <div class="form-group">
                    <label for="Phone" class="col-sm-3 col-form-label">Phone</label>
                    <input type="number" class="form-control" id="Phone" name="phone">
                  </div>
                  <div>
                    <input type="submit" class="btn btn-primary btn-md col-md" value="Book"></input>
                  </div>
                </form>
              </div>
          </div>
      </div>
</body>
</html>
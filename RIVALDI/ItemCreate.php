<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


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
                    <li class="nav-item">
                        <a class="nav-link" href="item_list.php">Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list_user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list_transaction">Transaction</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <pre></pre>
    <pre></pre>

    <div class="card w-auto" align="center">
  <div class="card-body">
    <h1 class="card-title">Add Item Gan</h1>
  </div>
</div>

<pre></pre>
    <pre></pre>


<div class="container">
  <div class="row">
    <div class="col">
    <img src="..." class="img-fluid" alt="Responsive image">
    </div>
    <div class="col">
    
    <form method="POST" action="Create.php">
  <div class="container">
  <div class="card-deck mb-3 text-left">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <label for="name">Heavy Equipment</label>
        <input type="text" class="form-control" id="name" name="name">
        <label for="Type">Type</label>
        <input type="text" class="form-control" id="Type" name="Type">
        <label for="Cap">Capacity</label>
        <input type="text" class="form-control" id="Cap" name="Cap">
        <label for="AreaBoss">Specification</label>
        <textarea class="form-control" id="Speks" name="Speks" rows="3" placeholder="Example: 1 Unit Volvo SD100D C"></textarea>
        <label for="Price1">Price</label>
        <input type="text" class="form-control" id="Price1" name="Price1">
        <small class="form-text text-muted">Rupiah(Rp)</small>
        <label for="Ava">Availability</label>
        <input type="text" class="form-control" id="Ava" name="Ava">
        <label for="Loc">Location</label>
        <input type="Loc" class="form-control" id="Loc" name="Loc">
        
        <pre></pre>
        
            <button class="btn btn-primary btn-lg active" type="submit" name="add" value="add">Submit</button>
        
      </div>
    </div>
    
  </div>
</div>
</form>
    </div>
  </div>  
</body>
</html>  
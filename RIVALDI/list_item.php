<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>List Transaction</title>
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
        th, td {
            text-align: center;
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
            </div>
        </nav>
    </div>

    <!-- Container -->
    <div class="container mt-5">
        <h2 class="pt-4"><b>List Item</b></h2>
        <hr class="hr1">

        <div class="row mt-3">
            <table class="table m-3">
                <thead class="table-active">
                    <tr>
                        <th>Item_id</th>
                        <th>Heavy Equipment</th>
                        <th>Type</th>
                        <th>Capacity</th>
                        <th>Specification</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            include "connection.php";

                            $query = mysqli_query($conn, "SELECT * FROM item") or die("Query salah");
                            foreach ($query as $data) {
                        ?>
                    </tr>
                    <tr>
                        <td><?= $data['item_id'] ?></td>
                        <td><?= $data['item_name'] ?></td>
                        <td><?= $data['item_type'] ?></td>
                        <td><?= $data['capacity'] ?></td>
                        <td><?= $data['specification'] ?></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $data['availability'] ?></td>
                        <td><?= $data['location'] ?></td>
                        <td><a href="#?item_id=<?= $data['item_id'] ?>"
                                class="btn btn-info">Edit</a>
                            <a href="Delete.php?item_id=<?= $data['item_id'] ?>"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                            }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
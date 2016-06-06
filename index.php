<?php
    require_once( 'connect.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Square Parts - WebStore</title>
    <link href='https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic' rel='stylesheet' type='text/css'>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button> <a class="navbar-brand" href="index.php">SqareParts Shop</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav ">
                            <li>
                                <a href="buy.php">Sale reports</a>
                            </li>
                            <li>
                                <a href="categories.php">Manage Categories</a>
                            </li>
                            <li>
                                <a href="manage.php">Manage Products</a>
                            </li>
                            <li>
                                <a href="productslist.php">Product List</a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-default">
                                Search
                            </button>
                        </form>
                    </div>

                </nav>
            </div>
        </div>
    </div>
    <div class="container col-sm-8 center">
        <div class="row">
              <?php 
    
    $query = "SELECT * FROM Products"; 
    $result = mysqli_query($db,$query);
    
    echo "<table class='table table-hover table-bordered'>";
    echo "<thead><tr><td>Category ID</td><td>Product Name</td><td>Price</td><td>Quantity</td><td>Description</td><td>Buy Amount</td><td>Operation</td></tr></thead>";
    
    while($row = mysqli_fetch_array($result)){
        $currid = $row['c_id'];
        $query2 = "SELECT c_id, name FROM Categories WHERE c_id = '$currid'";
        $result2 = mysqli_query($db,$query2);
        $row2 = mysqli_fetch_assoc($result2);
        if($row['quantity']>0){
            echo "<tr><td>" . $row2['name'] . "</td><td>" . $row['name'] . "</td><td>" . $row['price'] . "$</td><td>" . $row['quantity'] . "</td><td>" . $row['description'] . "</td><td class='quantity-val'><input type='number' class='form-control qunit' name='quantity' min='0' max='999' placeholder='0'></td><td><button type='button' class='btn btn-success quantity-buy' name="."'".$row['id']."'"." >Buy</button></td></tr>";  
        }
        }
    
    echo "</table>"; 
    
    mysqli_close($db); 
    ?>
    </div>
    </div>
    <script type="text/javascript" src="app.js"></script>
    </body>

    </html>
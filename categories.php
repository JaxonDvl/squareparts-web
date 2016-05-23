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
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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
                                <a href="buy.php">Add sale</a>
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
<div class="row">
    <div class="container col-sm-4">
        <h4>Add Category</h4>
        <form role="form">
            <div class="form-group">
                <label for="price">Category id:</label>
                <input type="number" class="form-control" id="cid" name="cid" min="0" max="999" placeholder="Category UID">
            </div>
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
            </div>

            <div class="form-group">
                <label for="price">Description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
            </div>
            <button type="button" class="btn btn-primary" id="add_category">Add Category</button>
        </form>
    </div>
</div>
<br/>

<div class="container col-sm-6">
    <div class="row">
        <h4>Delete Category</h4>
       <?php 
    
    $query = "SELECT * FROM Categories"; 
    $result = mysqli_query($db,$query);
    
    echo "<table class='table table-hover table-bordered'>";
    echo "<thead><tr><td>C_ID</td><td>Name</td><td>Description</td><td>Operation</td></tr></thead>";
    
    while($row = mysqli_fetch_array($result)){   
    echo "<tr><td>" . $row['c_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td ><td style='text-align:center'><button type='button' class='btn btn-danger delete_category' name="."'".$row['c_id']."'"." >X</button></td></tr>";  
    }
    
    echo "</table>"; 
    
    mysqli_close($db); 
    ?>
    
</div>
    </div>
      <script type="text/javascript" src="app.js"></script>
    </body>

    </html>
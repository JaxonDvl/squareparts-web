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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
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
        <div>
            <div class="container col-sm-4">
                <legend>Please select time span</legend>
<form class="form-inline">
	
	<div class="form-group">
		<label for="fromDatePicker">From</label>
	    <div class='input-group date' id='from-date'>
	        <input type='text' class="form-control" />
	        <span class="input-group-addon">
	            <span class="glyphicon glyphicon-calendar"></span>
	        </span>
	    </div>
	</div>

	<div class="form-group">
		<label for="toDatePicker">To</label>
	    <div class='input-group date' id='to-date'>
	        <input type='text' class="form-control" />
	        <span class="input-group-addon">
	            <span class="glyphicon glyphicon-calendar"></span>
	        </span>
	    </div>
	</div>
</form>
        </div>
    </div>
    </div>
    <br/><br/>
    <div class="container mytable">
        
    </div>
    
      <script type="text/javascript" src="reportapp.js"></script>
    </body>

    </html>
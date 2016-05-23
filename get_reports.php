<?php
    require_once('connect.php');
    $from = $_POST['from'];
    $to = $_POST['to'];
    $query = "SELECT name, quantity, date FROM Sales WHERE date>='$from' and date<='$to'"; 
    $result = mysqli_query($db,$query);
    
    echo "<table class='table table-hover table-bordered addedtable' >";
    echo "<thead><tr><td>Product Name</td><td>Quantity</td><td>Date</td></tr></thead>";
    
    while($row = mysqli_fetch_array($result)){
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['quantity'] . "</td><td>" . $row['date'] . "</td></tr>";  
    }
    
    echo "</table>"; 
    
    mysqli_close($db); 
?>
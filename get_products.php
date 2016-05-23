<?php
    require_once( 'connect.php');
    $category = $_POST['category'];
    
    $query = "SELECT * FROM Products"; 
    $result = mysqli_query($db,$query);
    
    echo "<table class='table table-hover table-bordered'>";
    echo "<thead><tr><td>Category ID</td><td>Product Name</td><td>Price</td><td>Quantity</td><td>Description</td></tr></thead>";
    
    while($row = mysqli_fetch_array($result)){
        $currid = $row['c_id'];
        $query2 = "SELECT c_id, name FROM Categories WHERE c_id = '$currid'";
        $result2 = mysqli_query($db,$query2);
        $row2 = mysqli_fetch_assoc($result2);
        if($row2['name']===$category)
    echo "<tr><td>" . $row2['name'] . "</td><td>" . $row['name'] . "</td><td>" . $row['price'] . "$</td><td>" . $row['quantity'] . "</td><td>" . $row['description'] . "</td></tr>";  
    }
    
    echo "</table>"; 
    mysqli_close($db); 
?>
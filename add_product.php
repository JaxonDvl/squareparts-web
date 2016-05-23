<?php
    require_once( 'connect.php');
    
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $getcat_query = "SELECT c_id FROM Categories WHERE name='$category'";
    $get_result = mysqli_query($db, $getcat_query); 
    if($get_result){
        echo "got result";
    }
    else{
        echo "no such category";
    }
    $row = mysqli_fetch_array($get_result, MYSQLI_ASSOC);
    $category_id=$row["c_id"];
    $getname_query = "SELECT id,name FROM Products WHERE name='$name'";
    $get_result = mysqli_query($db, $getname_query);
   
    $insert_query = "INSERT INTO Products (c_id, name, price, quantity, description) VALUES ('$category_id', '$name', '$price', '$quantity', '$description')";
    if($get_result->num_rows ===0){
        mysqli_query($db, $insert_query );
    echo "Records added successfully.";
    } else{
    echo "ERROR: Product already added " ;
    }
    mysqli_close($db); 

?>
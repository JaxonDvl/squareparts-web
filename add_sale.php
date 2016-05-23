<?php
    require_once('connect.php');
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $date = date('Y-m-d H:i:s');
    $insert_query = "INSERT INTO Sales ( name, quantity, date) VALUES ( '$name', '$quantity', '$date')" ;
    if(mysqli_query($db, $insert_query)){
        echo 'inserted';
    }
    else{
        echo 'not inserted';
    }
    $update_query = "UPDATE Products SET quantity=quantity-'$quantity'  WHERE name='$name'";
    if (mysqli_query($db, $update_query)){
        echo 'succes';
    }
    else{
        echo 'fail';
    }
    mysqli_close($db); 
?>
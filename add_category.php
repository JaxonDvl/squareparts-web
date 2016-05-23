<?php
    require_once( 'connect.php');
    $cid = $_POST['cid'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $getcat_query = "SELECT c_id FROM Categories WHERE name='$name'";
    $get_result = mysqli_query($db, $getcat_query); 
    if($get_result->num_rows!==0){
        echo "Error: category already exists";
    }
    else{
        $insert_query = "INSERT INTO Categories (c_id, name, description) VALUES ('$cid', '$name', '$description')";
        mysqli_query($db, $insert_query );
        echo "category added";
    }
    mysqli_close($db); 

?>
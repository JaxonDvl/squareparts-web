<?php
    require_once( 'connect.php');
    $cid = $_POST['cid'];
    $remove_query = "DELETE FROM Categories WHERE c_id = '$cid' ";
    $remove_products = "DELETE FROM Products WHERE c_id = '$cid' ";
    if(mysqli_query($db, $remove_products )){
        echo 'removed products';
    }
    else{
        echo 'not removed products';
    }
    if(mysqli_query($db, $remove_query )){
        echo 'removed category';
    }
    else{
        echo 'not removed category';
    }
    mysqli_close($db); 

?>
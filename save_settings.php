<?php
    require_once('connect.php');
    $oldcategory = $_POST['category'];
    $newcid = $_POST['cid'];
    $newname = $_POST['name'];
    $newdescription = $_POST['description'];
    $update_query = "UPDATE Categories SET c_id='$newcid', name='$newname',description='$newdescription' WHERE name='$oldcategory'";
    if (mysqli_query($db, $update_query)){
        echo 'succes';
    }
    else{
        echo 'fail';
    }
    mysqli_close($db); 
    
?>
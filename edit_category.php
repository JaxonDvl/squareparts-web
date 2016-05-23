<?php
    require_once('connect.php');
    $category = $_POST['category'];
    $query2 = "SELECT c_id, name, description FROM Categories WHERE name='$category'"; // Run your query
    $result2 = mysqli_query($db, $query2);
    while ($row2 = mysqli_fetch_object($result2)) {
    echo json_encode($row2);
    //$row2['c_id'].$row2['name'].$row2['description']
    }

mysqli_close($db); 
?>
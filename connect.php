<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "mirabel007";
    $database = "c9";
    $dbport = 3306;

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$respconn="Sucessfuly connected to server";
//echo "Connected successfully"; 

$db_selected = mysql_select_db($database, $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
else{
    //echo "Sucessfuly connected to DB";
}
//echo $servername.$username;
header('HTTP/ 200 Reason Phrase As You Wish');
?>
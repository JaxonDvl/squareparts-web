<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "squareparts";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$db_selected = mysql_select_db($database, $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
else{
    echo "Sucessfuly connected to DB";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Square Parts - WebStore</title>
</head>
<body>
    <p>Hello this is the first page</p>
<p>later edit</p>
<p>git succes</p>

</body>
</html>
<?php
require '_functions.php';
$conn = db_connect();    

if(!$conn) 
    die("Connection Failed");

if (isset($_POST['seats'])) {
    $seats = $_POST['seats'];
    $query = "INSERT INTO `demotable` VALUES('$seats')";
    $result = mysqli_query($conn, $query);
}
?>
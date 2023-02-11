<?php
require 'assets/partials/_functions.php';
$conn = db_connect();    

if(!$conn) 
    die("Connection Failed");

if (isset($_POST['seats'])) {
    $seats = $_POST['seats'];
    $query = "INSERT INTO `demotable` (`seatno`) VALUES(`$seats[0]')";
    $result = mysqli_query($conn, $query);
    echo json_encode(array("blablabla"=>$seats[0]));
}
?>
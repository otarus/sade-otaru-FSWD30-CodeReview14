<?php
 
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "cr14_sade_otaru_bigevents";
 
// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);
 
// check connection
if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}
 
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registered";

//creating Database Connection
$con = mysqli_connect($servername,$username,$password,$database);

//check Connection
if(!$con){
    die("Failed To Connect". mysqli_connect_error());
}


?>
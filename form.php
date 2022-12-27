<?php

$name=$_POST["Name"];

$parish=$_POST["Parish"];

$mekhala=$_POST["Mekhala"];

$gender=$_POST["Gender"];

$host="localhost";
$dbname="participants";
$username="root";
$password="Amalekh@11";

$conn=mysqli_connect($host, $username, $password, $dbname);


$sql= "INSERT INTO  Details (name,parish,mekhala,gender)  
      VALUES ('$name', '$parish', '$mekhala', '$gender')";
    (mysqli_query($conn, $sql));
    ?>
   
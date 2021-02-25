<?php

$servername = "localhost";
$username = "id15860656_dbhydromon";
$password = "R@silwa150800";
$dbname = "id15860656_hydromon";

$conn = mysqli_connect("$servername", "$username", "$password","$dbname");

$hasil = mysqli_query ($conn,"INSERT INTO ESP01 (debit) VALUES ($debit)"); 
    
if (!$result) 
    {
        die ('Invalid query: '.mysqli_error($conn));
    } 

?>
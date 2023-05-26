<?php

$databaseHost = 'localhost';
$databaseUser = 'root';
$databasePassword = '';
$databaseName = 'challenge11';

$con = mysqli_connect($databaseHost, $databaseUser , $databasePassword , $databaseName);
if ( mysqli_connect_error() ) {
   
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


?>



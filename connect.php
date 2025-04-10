<?php
$servername="localhost";
$username="root";
$password="";
$database_name="alumni";
$connection=[
    "Database" => "alumni",
    "Username" => "root",
    "Password" => ""
];
$conn=sqlsrv_connect($servername,$connection);
if(!$conn){
    die(print_r(sqlsrv_errors(),true));}
else
echo 'Connection Success';    
?>





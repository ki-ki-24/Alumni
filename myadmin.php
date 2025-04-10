<?php
$connection = mysqli_connect("localhost", "root", "", "alumni");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection established";
}

?>


<?php
$host = "localhost";
$user = "root"; // Default user for XAMPP
$password = ""; // Default password is empty in XAMPP
$dbname = "alumni";

// Connect to database
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["fname"] . " - Last Name: " . $row["lname"] . " - DOB: " . $row["dob"] . " - Graduation year: " . $row["grad_yr"] . "<br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
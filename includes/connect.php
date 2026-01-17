<?php
// Collect form data safely
$firstName = $_POST['firstName'] ?? '';
$lastName  = $_POST['lastName'] ?? '';
$age       = $_POST['age'] ?? '';
$gender    = $_POST['gender'] ?? '';
$phNumber  = $_POST['phNumber'] ?? '';

// Database connection
$servername = "localhost";
$username   = "root";
$password   = ""; // add your MySQL password here if any
$dbname     = "data_mini_project";
$port       = 3307; // use this since your MySQL runs on port 3307

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO tekker_data(firstName, lastName, age, gender, phNumber) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $firstName, $lastName, $age, $gender, $phNumber);
    $stmt->execute();
    echo "Entry successfully added!";
    $stmt->close();
    $conn->close();
}
?>

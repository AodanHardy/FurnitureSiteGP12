<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = $_POST['name'];


  
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "funiturestoredb";
$conn = new mysqli($servername, $username, $password, $dbname);
  
  // Insert the new user into the database
  $sql = "INSERT INTO categories (name) VALUES ('$name')";
  if ($conn->query($sql) === TRUE) {
    echo "Category created successfully";
    header("Location: ../categories.php");
    exit;
  } else {
    echo "Error creating user: " . $conn->error;
  }
  
  // Close the database connection
  $conn->close();
}
?>
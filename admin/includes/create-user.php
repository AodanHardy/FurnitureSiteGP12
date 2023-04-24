<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $uname = $_POST['username'];
  $passw = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $email = $_POST['email'];
  $is_admin = isset($_POST['is_admin']) ? "admin" : "customer";


  
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "funiturestoredb";
    $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Insert the new user into the database
  $sql = "INSERT INTO users (name, email, password, type) VALUES ('$uname', '$email', '$passw', '$is_admin')";
  if ($conn->query($sql) === TRUE) {
    echo "User created successfully";
    header("Location: ../users.php");
    exit;
  } else {
    echo "Error creating user: " . $conn->error;
  }
  
  // Close the database connection
  $conn->close();
}
?>



<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "test 1";
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "funiturestoredb";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
var_dump($_POST);
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "test 3";
  // Get the form data
  $productName = $_POST['name'];
  $productDesc = $_POST['description'];
  $productPrice = $_POST['price'];
  $categoryId = $_POST['category'];
  
  // Get the file data
  $fileName = $_FILES['image']['name'];
  $fileTmpName = $_FILES['image']['tmp_name'];
  $fileSize = $_FILES['image']['size'];
  $fileError = $_FILES['image']['error'];
  $fileType = $_FILES['image']['type'];

  // Check if a file was uploaded
  if ($fileSize > 0) {
    
    // Get the file extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
    // Define the allowed file extensions
    $allowedExt = array('jpg', 'jpeg', 'png', 'gif');
    
    // Check if the file extension is allowed
    if (in_array($fileExt, $allowedExt)) {
      
      // Generate a unique file name
      $newFileName = uniqid('', true) . '.' . $fileExt;
      
      // Define the file destination
      $fileDestination = '../../images/' . $newFileName;

      

      
      // Upload the file to the server
      move_uploaded_file($fileTmpName, $fileDestination);
      
      // Save the product data and image URL to the database
      //$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
      $query = "INSERT INTO products (name, description, price, image_url, category_id) VALUES ('$productName', '$productDesc', '$productPrice','$fileDestination', '$categoryId')";
      mysqli_query($conn, $query);
      
      // Redirect to the product list page
      header('Location: ../funiture.php');
      exit();
      
    } else {
      // Invalid file type
      $errorMessage = 'Invalid file type. Only JPG, JPEG, PNG and GIF files are allowed.';
    }
    
  } else {
    // No file uploaded
    $errorMessage = 'Please select a file to upload.';
  }
  
}

?>

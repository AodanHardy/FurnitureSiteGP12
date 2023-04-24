<?php

include_once "db_connection.php"; // Include database connection code


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id'])) {
        // get the user ID from the form data
        $id = $_POST['id'];
        
        // create a SQL query to delete the user
        $sql = "DELETE FROM categories WHERE id=$id";
        
        // execute the query
        if (mysqli_query($conn, $sql)) {
          // redirect to the user list page
          header("Location: ../categories.php");
          exit;
        } else {
          echo "Error deleting record: " . mysqli_error($conn);
        }
      }

}

// close the database connection
mysqli_close($conn);
?>
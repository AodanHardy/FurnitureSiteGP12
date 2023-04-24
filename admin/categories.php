<?php
session_start();

if (!isset($_SESSION['user-id'])) {
    header('Location: admin-signin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-styles.css">
    <title>Admin</title>
</head>
<body>

    <div class="container">
        <?php
            include_once "includes/side-bar.php";
        ?>

        <div class="main-content">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>

                </tr>    
            <?php
                // Establish database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "funiturestoredb";
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


                $sql = "SELECT * FROM categories";
                $result = $conn->query($sql);
                
                // Check if any users were found
                if ($result->num_rows > 0) {
                    
                  // Output each user as a table row
                  while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
 
                    echo "</tr>";
                  }
                } else {
                  echo "No users found.";
                }
                
                // Close database connection
                $conn->close();
            
            ?>
            </table>

            <div class="modify-form">
                <h2>Create New Category</h2>
                <form action="includes/create-category.php" method="POST">
                    <label for="name">Category Name:</label>
                    <input type="text" name="name" id="name" required>
                    <br>
                    <input type="submit" value="Create Category">
              </form>
            </div>

            <div class="modify-form">
              <h2>Delete Category</h2>
              <form method="post" action="includes/delete-category.php">
                <label for="id">Please enter user ID</label>
                <input type="text" name="id" required>
                <input type="submit" value="Delete User">
              </form>
            </div>
              
        </div>
</body>
</html>
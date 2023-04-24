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
                <th>Description</th>
                <th>Price</th>
            </tr>
            
            <?php


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

                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                
                // Check if any users were found
                if ($result->num_rows > 0) {
                    
                  // Output each user as a table row
                  while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";    
                    echo "<td>" . $row["price"] . "</td>";     
                    echo "</tr>";
                  }
                } else {
                  echo "No users found.";
                }
                
                // Close database connection
                


            ?>
            </table>

            <div class="modify-form">
                <form action="includes/create-product.inc.php" method="post" enctype="multipart/form-data">
                    <label for="name">Product Name:</label>
                    <input type="text" id="name" name="name"><br><br>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description"></textarea><br><br>

                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price"><br><br>

                    <label for="category">Category:</label>
                    <select id="category" name="category">
                        <?php
                        // connect to the database
                        //$conn = mysqli_connect("localhost", "username", "password", "database");

                        // query to retrieve the categories from the database
                        $query = "SELECT id, name FROM categories ORDER BY name";

                        // execute the query
                        $result = mysqli_query($conn, $query);

                        // loop through the categories and create an option element for each one
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                        }

                        // close the database connection
                        mysqli_close($conn);
                        ?>
                    </select><br><br>

                    <label for="image">Product Image:</label>
                    <input type="file" id="image" name="image"><br><br>

                    <input type="submit" value="Create Product">
                </form>

            </div>

            <div class="modify-form">
              <h2>Delete Product</h2>
              <form method="post" action="includes/delete-product.php">
                <label for="id">Please enter user ID</label>
                <input type="text" name="id" required>
                <input type="submit" value="Delete User">
              </form>
            </div>
        </div>
    </div>
</body>
</html>
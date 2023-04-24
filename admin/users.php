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
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Type</th>
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
                
                // Retrieve all users from the database
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                
                // Check if any users were found
                if ($result->num_rows > 0) {
                    
                  // Output each user as a table row
                  while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["type"] . "</td>";
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

              <form method="POST" action="includes/create-user.php">
                <h2>Create new User</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="is_admin">Is Admin:</label>
                <input type="checkbox" id="is_admin" name="is_admin"><br><br>
                <input type="submit" value="Create User">
              </form>
            </div>



            
            <div class="modify-form">
              <h2>Delete User</h2>
              <form method="post" action="includes/delete-user.php">
                <label for="id">Please enter user ID</label>
                <input type="text" name="id" required>
                <input type="submit" value="Delete User">
              </form>
            </div>



      </div>
    </div>
</body>

<style>

</style>
</html>
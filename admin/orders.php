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

                $sql = "SELECT orders.id, orders.user_id, orders.status, orders.created_at, SUM(order_items.quantity * order_items.price) AS total_price, COUNT(order_items.id) AS total_items, users.name 
                        FROM orders 
                        LEFT JOIN order_items ON orders.id = order_items.order_id
                        LEFT JOIN users ON orders.user_id = users.id
                        GROUP BY orders.id
                        ORDER BY orders.created_at DESC";

                $result = mysqli_query($conn, $sql);


                echo "<table>";
                echo "<tr><th>ID</th><th>User</th><th>Total Items</th><th>Total Price</th><th>Status</th><th>Created At</th></tr>";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $user = $row['name'] ? $row['name'] : '-';
                    $total_items = $row['total_items'] ? $row['total_items'] : 0;
                    $total_price = $row['total_price'] ? '$' . number_format($row['total_price'], 2) : '-';
                    $status = $row['status'] ? $row['status'] : '-';
                    $created_at = $row['created_at'] ? date('Y-m-d H:i:s', strtotime($row['created_at'])) : '-';
                
                    echo "<tr><td>$id</td><td>$user</td><td>$total_items</td><td>$total_price</td><td>$status</td><td>$created_at</td></tr>";
                }
                echo "</table>";
                
                // Close the database connection
                mysqli_close($conn);

            ?>

            <div class="modify-form">
                <form action="includes/change-order-status.php" method="post">
                    <h2>Update Order Status</h2>
                    <label for="order_id">Order ID:</label>
                    <input type="text" id="order_id" name="order_id" required><br><br>
                    
                    <label for="status">Status:</label>
                    <select id="status" name="status">
                        <option value="pending">Pending</option>
                        <option value="processing">Processing</option>
                        <option value="shipped">Shipped</option>
                        <option value="delivered">Delivered</option>
                        <option value="canceled">Canceled</option>
                    </select><br><br>
                    
                    <input type="submit" name="submit" value="Update Status">
                </form>

            </div>
        </div>
    </div>
</body>
</html>
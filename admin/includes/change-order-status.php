<?php

include_once "db_connection.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the order id and status from the form
    $orderId = $_POST['order_id'];
    $status = $_POST['status'];


    $sql = "UPDATE orders SET status = '$status' WHERE id = '$orderId'";

    if ($conn->query($sql) === TRUE) {
        echo "Category created successfully";
        header("Location: ../orders.php");
        exit;
      } else {
        echo "Error creating user: " . $conn->error;
      }

}
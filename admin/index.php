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
            <h2>Welcome to The Funiture Store admin site</h2>
            <p>Please use the side pannel to update website</p>
        </div>
    </div>
</body>
</html>
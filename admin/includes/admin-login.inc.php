<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'db_connection.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if inputs are empty
    if (empty($username) || empty($password)) {
        header("Location: ../admin-signin.php?login=empty");
        exit();
    } else {
        // Check if admin exists in database
        $sql = "SELECT * FROM users WHERE name='$username'";
        $result = $conn->query($sql);
        $resultCheck = $result->num_rows;

        if ($resultCheck < 1) {
            header("Location: ../admin-signin.php?login=errorkk");
            exit();
        } else {
            if ($row = $result->fetch_assoc()) {
                echo $password;
                // Verify password
                $pwdCheck = password_verify($password, $row['password']);
                //if ($password == $row['password']){$pwdCheck= true;}else{$pwdCheck=false;}
                if ($pwdCheck == false) {
                    header("Location: ../admin-signin.php?login=errorpw");
                    exit();
                } elseif ($pwdCheck == true) {

                    // Check if user is admin
                    if ($row['type'] == 'admin'){
                        // Set session variables
                        $_SESSION['user-id'] = $row['id'];
                        $_SESSION['username'] = $row['name'];
                        header("Location: ../index.php");
                        exit();
                    }
                    else  {
                        header("Location: ../admin-signin.php?login=NotAuthorised");
                        exit();
                    }
                }
            }
        }
    }
} else {
    header("Location: ../admin-signin.php?login=errork");
    exit();
}

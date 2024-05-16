<?php
include './databaseconnection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT id, username, password FROM Users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {

        mysqli_stmt_bind_param($stmt, "s", $email);

        if (mysqli_stmt_execute($stmt)) {

            mysqli_stmt_bind_result($stmt, $user_id, $username, $hashed_password);


            if (mysqli_stmt_fetch($stmt)) {

                if (password_verify($password, $hashed_password)) {

                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    header("Location: ../profile.php");
                    exit();
                } else {

                    echo "<p>Incorrect password. Please try again.</p>";
                }
            } else {

                echo "<p>Email not found. Please register.</p>";
            }
        } else {

            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }


        mysqli_stmt_close($stmt);
    } else {

        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }


    mysqli_close($conn);
}
?>

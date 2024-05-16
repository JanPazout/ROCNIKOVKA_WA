<?php
include './databaseconnection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);

        if (mysqli_stmt_execute($stmt)) {

            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;

            header("Location: ../profile.php");
            exit();
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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/mainstyles.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/forms.css">
    <title>Profil</title>
</head>
<body>
<?php include 'navbar.php'?>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="container d-flex justify-content-center align-items-center flex-column">

        <img src="./images/pfp_placeholder.png" alt="" class="pfp">

        <?php

        if(isset($_SESSION['username']) && isset($_SESSION['email'])) {
            echo "<div class='container d-flex flex-row justify-content-center' style='gap: 10px'>
            <p class='text-dark fs-3'>Uživatelské jméno:</p>
            <p class='fs-3'>{$_SESSION['username']}</p>
            </div>";

            echo "<div class='container d-flex flex-row justify-content-center' style='gap: 10px'>
                <p class='text-dark fs-3'>E-mail:</p>
            <p class='fs-3'>{$_SESSION['email']}</p>
            </div>";



        } else {
            echo "<p>User not logged in.</p>";
        }
        ?>

    </div>
</div>

<?php include 'footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
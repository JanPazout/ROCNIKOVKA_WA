<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    nav{
        background-color:steelblue;
    }
</style>

<nav class="navbar navbar-expand-lg sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Autobazar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Domů</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="adverts.php">Inzeráty</a>
                </li>
                <li class="nav-item">
                    <?php
//                    session_start();
                    if(isset($_SESSION['username'])) {
                        echo '<a class="nav-link active" href="profile.php">Profil</a>';
                    } else {
                        echo '<a class="nav-link active" href="login.php">Profil</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./support.php">Podpora</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


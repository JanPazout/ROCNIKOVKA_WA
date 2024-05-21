<?php
session_start();
include './scripts/databaseconnection.php';


$sql = "SELECT id, title, description FROM Advert";
/** @var aby_tonervalo $conn */
$result = $conn->query($sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/adverts.css">
    <link rel="stylesheet" href="./css/animations.css">
    <title>AutoBazar</title>
</head>
<body>
<?php include 'navbar.php'?>

<div class="container">
    <div class="container d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="">
                    <div class="card mb-3 hover opacityUp">
                        <div class="card-body" style="max-width: 500px">
                            <h5 class="card-title"><?php echo $row["title"]; ?></h5>
                            <p class="card-text"><?php echo $row["description"]; ?></p>
                            <a href="#" id="go-to-advert-button">Zobrazit</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No adverts found.";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

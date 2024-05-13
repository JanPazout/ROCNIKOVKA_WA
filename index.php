<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/animations.css">
    <title>AutoBazar</title>
</head>
<body>
<?php include 'navbar.php'?>
<div class="container d-flex justify-content-center align-items-center flex-column opacityUp" style="height: 100vh" >
    <h1 style="font-size: 70px; margin: 0px">Autobazar Pezot</h1>
    <p class="fs-3">neni kara jako kar</p>
</div>
<div class="container d-flex justify-content-center flex-column hover">
    <h1 class="text-center">Doporučené inzeráty</h1>
    <div class="container d-flex justify-content-center align-items-center">
        <div id="carouselExampleCaptions" class="carousel slide shadow-lg">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/car1.jpg" class="d-block w-100 carousel-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size: 40px;">Volkswagen ID.3</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/car2.jpg" class="d-block w-100 carousel-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size: 30px;">Volkswagen passat</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="service-container">
        <h2 class="text-dark ">Naše služby</h2>
        <div class="tbr">
            <table class="table table-bordered rounded">
                <thead>
                <tr>
                    <th scope="col">Služba</th>
                    <th scope="col">Cena</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Dovoz vozidla</th>
                    <td>3000</td>
                </tr>
                <tr>
                    <th scope="row">Prohlídka vozidla</th>
                    <td>2500</td>
                </tr>
                <tr>
                    <th scope="row">Dovoz + prohlídka</th>
                    <td colspan="2">5300</td>
                </tr>
                </tbody>
            </table>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><strong>Výhody</strong></li>
            <li class="list-group-item">Prováděné profesionály</li>
            <li class="list-group-item">Vše z pohodlí vašeho domova</li>
            <li class="list-group-item">Garance vrácení peňěz</li>
        </ul>
    </div>
</div>

<?php include 'footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
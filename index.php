<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/98690cc59f.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">

    <!--Favicon-->
    <link rel="icon" href="https://waitly.dk/wp-content/uploads/2020/03/cropped-waitly-logo-1-32x32.png" sizes="32x32">
    <link rel="icon" href="https://waitly.dk/wp-content/uploads/2020/03/cropped-waitly-logo-1-192x192.png" sizes="192x192">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'header.php'; ?>

<!--Hero Image, Overlay og indhold.-->
<div class="img-overlay">
    <img class="hero" src="./img/hero.jpg" alt="hero">
    <div class="centered project-overlay">
        <div class="centered w-75">
            <h1 class="text-center text-white lato-text">Vil du købe en andelsbolig?</h1>
            <p class="text-center text-white lato-text pt-3">Find populære ventelister i hele landet</p>
            <div class="container bg-white rounded-3 mb-2">
                <div class="mt-4">
                    <div class="row p-3">
                        <div class="col-md-9 col-12 border-bottom">
                            <small class="tinyt lato-text">Hvor vil du søge?</small>
                            <input type="text" class="border-0 w-100 lato-text"  placeholder="Søg på Forenings navn eller Adresse">
                        </div>
                        <div class="col-md-3 col-12 text-center">
                            <a class="btn cream d-flex mt-2 mt-md-0 justify-content-center" href="./search.php">
                                <p class="text-white">Søg</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container"> <!--mobile-->
                    <div class="row pb-2 px-2 d-sm-none d-flex">
                        <div class="col-12 p-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text left cream text-white">Max Salgspris</span>
                                </div>
                                <input type="number" min="0" class="form-control center1" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text left cream text-white">Min. Areal</span>
                                </div>
                                <input type="number" min="0" class="form-control center1" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                                <div class="input-group-append">
                                    <span class="input-group-text right cream text-white">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text left cream text-white">Max. Areal</span>
                                </div>
                                <input type="number" min="0" class="form-control center1" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                                <div class="input-group-append">
                                    <span class="input-group-text right cream text-white">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-none"> <!--pc-->
                <div class="row pb-2 d-none d-sm-flex m-auto">
                    <div class="col-12 col-xl-6 p-2 py-none">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text left cream text-white">Max Salgspris</span>
                            </div>
                            <input type="number" min="0" class="form-control center" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 p-2 pl-none">
                        <div class="input-group pb-sm-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text left cream text-white">Min. Areal</span>
                            </div>
                            <input type="number" min="0" class="form-control center" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                            <div class="input-group-append">
                                <span class="input-group-text right cream text-white">m<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 p-2 pr-none">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text left cream text-white">Max. Areal</span>
                            </div>
                            <input type="number" min="0" class="form-control center" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                            <div class="input-group-append">
                                <span class="input-group-text right cream text-white">m<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cream">
    <div class="container">
        <div class="row infoseg">
            <div class="col-lg-5 col-10 offset-lg-6 py-3 my-auto">
                <h3 class="h-text text-white">Er du bestyrelse og administration?</h3>
                <p class="u-text text-white">Læs mere om, hvad Waitly kan tilbyde dig og din forening</p>
            </div>
            <div class="col-lg-1 col-2 text-center my-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFF" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Her skal sidens indhold ligge -->

<div class="container">
    <div class="row pt-4">
        <div class="col-md-6">
            <h1 class="text-center">Text Goes Here!</h1>
            <p class="">Lorem Ipsum or something like that, this is just text to take up space. Lorem Ipsum or something like that, this is just text to take up space. Lorem Ipsum or something like that, this is just text to take up space. Lorem Ipsum or something like that, this is just text to take up space.</p>
        </div>
        <div class="col-md-6">
            <h1 class="text-center">Here Too!</h1>
            <p class="">Lorem Ipsum or something like that, this is just text to take up space. Lorem Ipsum or something like that, this is just text to take up space. Lorem Ipsum or something like that, this is just text to take up space. Lorem Ipsum or something like that, this is just text to take up space. Lorem Ipsum or something like that, this is just text to take up space.</p>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>

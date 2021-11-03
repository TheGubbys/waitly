<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Waitly</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

<div class="pt-5"></div>

<div class="container pt-5 px-2">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="row p-3 border border-2 rounded-3 mx-2">
                <div class="col-9 border-bottom">
                    <input type="text" class="border-0 w-100 b-text" placeholder="Søg på navn eller addresse">
                </div>
                <div class="col-3 text-center">
                    <a class="btn cream d-flex mt-2 mt-md-0 justify-content-center" href="#input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#FFF" class="bi bi-search d-sm-flex d-none" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                        <p class="text-white">Søg</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-2 d-md-flex d-none">
    <div class="row mx-2">
        <div class="col-md-6 col-12">
            <div class="row">
                <p class="b-text">Tryk for at tilføje nogle filtre til din søgning</p>
                <a class="col-md-6 col-12 btn text-center border border-2 rounded-3" href="#"> Filtrer søgning
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
            <div class="beholder"> <!--til at smide fra database i-->
                <div class="row pt-4"> <!--BoligBlock-->
                    <div class="col-4 bblock">
                        <img src="./img/hero.jpg" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-10 border-bottom pb-3">
                                <div class="d-flex">
                                    <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                                    <h3 class="h-text">1.961.789,-</h3>
                                </div>
                                <p>Sundtoldvej 5. 3. th.</p>
                                <sub>3000 Helsingør</sub>
                            </div>
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <sub class="creamt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                    </div>
                </div><!--BoligBlock-->
                <div class="row pt-4"> <!--BoligBlock-->
                    <div class="col-4 bblock">
                        <img src="./img/hero.jpg" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-10 border-bottom pb-3">
                                <div class="d-flex">
                                    <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                                    <h3 class="h-text">1.961.789,-</h3>
                                </div>
                                <p>Sundtoldvej 5. 3. th.</p>
                                <sub>3000 Helsingør</sub>
                            </div>
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <sub class="creamt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4"> <!--BoligBlock-->
                    <div class="col-4 bblock">
                        <img src="./img/hero.jpg" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-10 border-bottom pb-3">
                                <div class="d-flex">
                                    <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                                    <h3 class="h-text">1.961.789,-</h3>
                                </div>
                                <p>Sundtoldvej 5. 3. th.</p>
                                <sub>3000 Helsingør</sub>
                            </div>
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <sub class="creamt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4"> <!--BoligBlock-->
                    <div class="col-4 bblock">
                        <img src="./img/hero.jpg" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-10 border-bottom pb-3">
                                <div class="d-flex">
                                    <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                                    <h3 class="h-text">1.961.789,-</h3>
                                </div>
                                <p>Sundtoldvej 5. 3. th.</p>
                                <sub>3000 Helsingør</sub>
                            </div>
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <sub class="creamt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4"> <!--BoligBlock-->
                    <div class="col-4 bblock">
                        <img src="./img/hero.jpg" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-10 border-bottom pb-3">
                                <div class="d-flex">
                                    <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                                    <h3 class="h-text">1.961.789,-</h3>
                                </div>
                                <p>Sundtoldvej 5. 3. th.</p>
                                <sub>3000 Helsingør</sub>
                            </div>
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <sub class="creamt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4"> <!--BoligBlock-->
                    <div class="col-4 bblock">
                        <img src="./img/hero.jpg" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-10 border-bottom pb-3">
                                <div class="d-flex">
                                    <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                                    <h3 class="h-text">1.961.789,-</h3>
                                </div>
                                <p>Sundtoldvej 5. 3. th.</p>
                                <sub>3000 Helsingør</sub>
                            </div>
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <sub class="creamt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9205.445724557325!2d11.858232786608506!3d54.77361336030297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sdk!4v1635855078569!5m2!1sen!2sdk" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="container pt-2 d-md-none d-flex justify-content-center">
    <div class="row mx-2 text-center">
        <p class="b-text">Tryk for at tilføje nogle filtre til din søgning</p>
        <a class="col-md-6 col-12 btn text-center border border-2 rounded-3" href="#"> Filtrer søgning
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
        </a>
    </div>
</div>
<div class="beholder d-md-none d-flex">
    <div class="row">
        <div class="col-12">
            <div class="container pt-4"> <!--BoligBlock-Mobile-->
                <div class="thumbnail">
                    <img src="./img/hero.jpg" alt="" class="img-fluid">
                    <div class="caption">
                        <div class="text-white p-2 b-text">
                            <h5>Sundtoldvej 5. 3. th.</h5>
                            <p>3000 Helsingør</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex p-2">
                            <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                            <h3 class="h-text">1.961.789,-</h3>
                        </div>
                        <div class="row text-center border-bottom pb-1">
                            <div class="col-4">
                                <sub class="creamt tinyt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt tinyt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt tinyt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                        <div class="row text-center pt-2">
                            <div class="col-6 d-flex justify-content-center">
                                <a class="btn-sm btn cream text-white">
                                    Se Forening
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                                <p class="creamt">Se på kort</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="container pt-4"> <!--BoligBlock-Mobile-->
                <div class="thumbnail">
                    <img src="./img/hero.jpg" alt="" class="img-fluid">
                    <div class="caption">
                        <div class="text-white p-2 b-text">
                            <h5>Sundtoldvej 5. 3. th.</h5>
                            <p>3000 Helsingør</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex p-2">
                            <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                            <h3 class="h-text">1.961.789,-</h3>
                        </div>
                        <div class="row text-center border-bottom pb-1">
                            <div class="col-4">
                                <sub class="creamt tinyt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt tinyt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt tinyt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                        <div class="row text-center pt-2">
                            <div class="col-6 d-flex justify-content-center">
                                <a class="btn-sm btn cream text-white">
                                    Se Forening
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                                <p class="creamt">Se på kort</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="container pt-4"> <!--BoligBlock-Mobile-->
                <div class="thumbnail">
                    <img src="./img/hero.jpg" alt="" class="img-fluid">
                    <div class="caption">
                        <div class="text-white p-2 b-text">
                            <h5>Sundtoldvej 5. 3. th.</h5>
                            <p>3000 Helsingør</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex p-2">
                            <h4 class="h-text">Priser fra: &#8203 &#8203</h4>
                            <h3 class="h-text">1.961.789,-</h3>
                        </div>
                        <div class="row text-center border-bottom pb-1">
                            <div class="col-4">
                                <sub class="creamt tinyt">Antal Lejligheder: 11</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt tinyt">Byggeår: 1990</sub>
                            </div>
                            <div class="col-4">
                                <sub class="creamt tinyt">Kvadratmeter: 86</sub>
                            </div>
                        </div>
                        <div class="row text-center pt-2">
                            <div class="col-6 d-flex justify-content-center">
                                <a class="btn-sm btn cream text-white">
                                    Se Forening
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffa56c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                                <p class="creamt">Se på kort</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>

<nav class="navbar navbar-expand-xl text-white bg-dark sticky-top primary-bg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="./img/logo.png" width="150px" height="80px" class="d-inline-block align-top" alt="Logo">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item text-right raleway-text tinyt">
                    <a class="nav-link text-white" href="#boligsøgende">Er du boligsøgende?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white raleway-text tinyt" href="#administrator">For bestyrelser og administratorer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white raleway-text tinyt" href="#interesseliste">Interesseliste</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white raleway-text tinyt" href="#andelsbolig">Blog om andelsboligmarkedet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white raleway-text tinyt" href="#webinarer">Webinarer</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white raleway-text tinyt" href="#konto">Min konto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 1080);
    });
</script>

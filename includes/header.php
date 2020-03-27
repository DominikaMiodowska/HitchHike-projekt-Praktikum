<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content=" Die Anzahl der Personenwagen hat sich in der Schweiz seit 1980 verdoppelt.
                    Statistisch betrachtet verfügt somit jeder zweite Einwohner der Schweiz über ein Auto. Der massive
                    Zuwachs der Personenwagen wurde spürbar. Das grosse mediale Interesse zeigt das Gewicht dieser
                    gesellschaftlichen Problematik. Aggregierte Verkehrsprognosen vom Bundesamt für Raumentwicklung
                    zeigen den unbedingten
                    Handlungsbedarf.">
    <title>HitchHike - HitchHike</title>
    <!-- Styles  -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

    <div id="body">
        <div id="header" class="container header py-3 pb-sm-4 pt-sm-3">

            <!--############################   DESKTOP MENU    ############################  -->
            <div class="language d-none d-lg-block pt-1">
                <a class="businesskunden" href="businesskunden.php">Businesskunden</a>

                <div class="dropdown">
                    <a class="btn dropdown-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                        <strong>Deutsch</strong>
                        <img class="open-language" src="img/Open_Language_Selector.svg" alt="Open Language List">
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Englisch</a>
                        <a class="dropdown-item" href="#">Französisch</a>
                        <a class="dropdown-item" href="#">Italienisch</a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg pt-3 pt-sm-4">
                <a class="logo-img-link" href="index.php"><img class="logo-img" src="img/HitchHike_Logo.svg"
                        alt="Logo"></a>
                <button class="nav-hamburger-link nav-hambuger navbar-toggler" id='hamburger' type="button"
                    data-toggle="collapse" data-target="#navbarNavAltMarkup">
                    <img src="./img/Hamburger.svg" alt="Menu">
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                    <div class="menu-desktop d-none d-lg-block">
                        <ul id="navigation" class="navigation nav mb-1 ">
                            <li class="nav-item">
                                <a class="nav-link mx-3 my-3 active" href="index.php">Lösung</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3 my-3" href="ueberUns.php">Über uns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3 my-3" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item login-item">
                                <a class="nav-link mx-3 my-3 btn-nav-login" href="#login-popup">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!--############################   MOBILE MENU    ############################  -->
                    <div class="menu-mobile fixed-top vw-100 vh-100 d-lg-none " id="menu-mobile">
                        <button class="nav-close-link nav-close navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup">
                            <img src="./img/Close.svg" alt="Close">
                        </button>
                        <div class="mobile-language  mt-6 pl-1">
                            <div class="dropdown">
                                <a class="btn-language dropdown-btn" href="#" role="button" id="dropdownMenuLinkMobile"
                                    data-toggle="dropdown"><strong>Deutsch</strong>
                                    <img class="open-language" src="img/Open_Language_Selector.svg" alt="open">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkMobile">
                                    <a class="dropdown-item" href="#">Englisch</a>
                                    <a class="dropdown-item" href="#">Französisch</a>
                                    <a class="dropdown-item" href="#">Italienisch</a>
                                </div>
                            </div>
                        </div>
                        <ul id="mobile-navigation" class="mobile-navigation nav mb-3">
                            <li class="nav-item">
                                <a class="nav-link active mobile-menu" href="index.php">Lösung</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mobile-menu" href="ueberUns.php">Über uns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mobile-menu" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mobile-menu" href="businesskunden.php">Businesskunden</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mobile-menu mobile-nav-link">Co2-Rechner</a>
                            </li>
                        </ul>
                        <div class="login-footer mt-6">
                            <a class="btn-login" href="#login-popup">Login</a>
                            <p class="l-frage mb-0 mt-4 ml-1">
                                Du hast noch keinen Account?
                            </p>
                            <a class="btn_registrieren-text-gray" href="https://sayhi.hitchhike.ch/de/communities">Hier
                                registrieren</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
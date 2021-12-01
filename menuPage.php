<?php
session_start();

/* AK NIEJE ADMIN PRIHLASENY NEPUSTI HO NA STRANKU*/

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php?sessionExpired=1");
    exit;
}
?>

<link rel="stylesheet" href="CSS/menuPage.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- HLAVNE MENU -->

<main class="site-wrapper">
<div class="pt-table desktop-768">
    <div class="pt-tablecell page-home relative" style="background-image: url(https://images3.alphacoders.com/101/thumb-1920-1010294.jpg);
    background-position: center;
    background-size: cover;">
        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div class="page-title  home text-center">
                              <span class="heading-page"> Hlavné menu
                              </span>
                        <p class="mt20">Vitajte v hlavnom menu. Vyberte si na akú stránku chcete ísť.</p>
                    </div>

                    <!-- HEXAGONY S VYBEROM STRANKY NA KTORU SA CHCE IST -->

                    <div class="hexagon-menu clear">
                        <div class="hexagon-item">
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <a href="oNasPage.php" class="hex-content">
                                        <span class="hex-content-inner">
                                            <span class="icon">
                                                <i class="fa fa-universal-access"></i>
                                            </span>
                                            <span class="title">O nás.</span>
                                        </span>
                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                          fill="#1e2530"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="hexagon-item">
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <a href="pacientData.php" class="hex-content">
                                        <span class="hex-content-inner">
                                            <span class="icon">
                                                <i class="fa fa-bullseye"></i>
                                            </span>
                                            <span class="title">Zoznam pacientov</span>
                                        </span>
                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                          fill="#1e2530"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="hexagon-item">
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <a class="hex-content">
                                        <span class="hex-content-inner">
                                            <span class="icon">
                                                <i class="fa fa-braille"></i>
                                            </span>
                                            <span class="title">Štatistiky pacientov (nedostupné)</span>
                                        </span>
                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                          fill="#1e2530"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="hexagon-item">
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <a class="hex-content">
                                        <span class="hex-content-inner">
                                            <span class="icon">
                                                <i class="fa fa-id-badge"></i>
                                            </span>
                                            <span class="title">Mapa liečebne (nedostupné)</span>
                                        </span>
                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                          fill="#1e2530"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="hexagon-item">
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <a class="hex-content">
                                        <span class="hex-content-inner">
                                            <span class="icon">
                                                <i class="fa fa-life-ring"></i>
                                            </span>
                                            <span class="title">Zoznam pracovníkov (nedostupné)</span>
                                        </span>
                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                          fill="#1e2530"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="hexagon-item">
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <a href="kontaktPage.php" class="hex-content">
                                        <span class="hex-content-inner">
                                            <span class="icon">
                                                <i class="fa fa-clipboard"></i>
                                            </span>
                                            <span class="title">Kontakt</span>
                                        </span>
                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                          fill="#1e2530"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="hexagon-item">
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="hex-item">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <a href="Logout.php" class="hex-content">
                                        <span class="hex-content-inner">
                                            <span class="icon">
                                                <i class="fa fa-map-signs"></i>
                                            </span>
                                            <span class="title">Odhlásiť sa</span>
                                        </span>
                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                          fill="#1e2530"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
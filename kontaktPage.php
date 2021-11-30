<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php?sessionExpired=1");
    exit;
}
?>

<link rel="stylesheet" href="CSS/kontaktPage.css">
<link rel="stylesheet" href="CSS/button.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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
                                  <span class="heading-page"> Konktakt
                                  </span>
                            <h1>Telefónne čísla:</h1>
                            <h4>* Vrátnica, spojovateľka:	+421 43 4293202-7</h4>
                            <h4>* Sekretariát:	+421 43 4293209</h4>
                            <h4>* Finančná učtáreň:	+421 43 4293211</h4>
                            <h4>* Vedúci OTP:	+421 43 4293200</h4>


                            <h1>Návštevné hodiny:</h1>
                            <h4>* Akútne oddelenie:	Utorok, štvrtok: 14,00–15,00 hod.
                                Sobota, nedeľa: 13,00–14,30 hod</h4>
                            <h4>* Ostatné oddelenia:	Denne: 14,00–17,00 hod.</h4>


                            <a href="menuPage.php">    <!-- poznamka button -->
                                <input class="buttonik"  align="center" type="button" value="Späť" />
                            </a>
                             </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



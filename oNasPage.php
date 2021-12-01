<?php
session_start();

/* AK ADMIN NIEJE PRIHLASENY NEPUSTI HO NA STRANKU */

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php?sessionExpired=1");
    exit;
}
?>

<link rel="stylesheet" href="CSS/oNasPage.css">
<link rel="stylesheet" href="CSS/button.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<main class="site-wrapper">
    <div class="pt-table desktop-768">
        <div class="pt-tablecell page-home relative" style="background-image: url(https://images3.alphacoders.com/101/thumb-1920-1010294.jpg);
    background-position: center;
    background-size: cover;">
            <div class="overlay"></div>

            <!-- TEXT O INFO LIECEBNE -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">

                        <div class="page-title  home text-center">
                                  <span class="heading-page"> O nás
                                  </span>
                            <h1>Psychiatrická liečebňa Trnové</h1>
                            <p class="mt20">Predstavuje významnú inštitúciu, prezentujúcu odbor psychiatrie na severnom Slovensku.
                                Psychiatrická liečebňa Trnové, so sídlom v Trnovom ul. Dolná Cintorínska 24, IČO 17335692, bola
                                zriadená zriaďovacou listinou Ministerstva zdravotníctva SR č.3724 /1991-A/V-5 dňa 30.11.2021,
                                ako príspevková organizácia s právnou subjektivitou.
                                Nadriadeným orgánom Psychiatrickej liečebne Trnové je Ministerstvo zdravotníctva SR.
                                Predmetom činnosti je poskytovanie špecializovanej liečebno-preventívnej starostlivosti pacientom
                                postihnutým psychickými chorobami a poruchami, akútnym psychotickým stavom, výkon ochranných
                                protialkoholických a psychiatrických liečieb.
                                Liečebňa zabezpečuje zdravotnícke služby pre celý Žilinský kraj. Ochranné liečby nariadené súdom
                                zabezpečuje pre celý Žilinský kraj a čiastočne Trenčiansky kraj okresy Považská Bystrica, Prievidza a Ilava.
                                Štatutárnym orgánom organizácie je riaditeľ, ktorý je oprávnený konať v mene organizácie vo všetkých veciach.
                                Poslanie, úlohy a organizačné usporiadanie organizácie je dané organizačným poriadkom.</p>



                            <h1>Základné organizačné členenie je:</h1>
                            <h4>* Úsek riaditeľa</h4>
                            <h4>* Úsek liečebno – preventívnej starostlivosti</h4>
                            <h4>* Úsek ošetrovateľskej starostlivosti</h4>
                            <h4>* Úsek ekonomický</h4>
                            <p class="mt20">Psychiatrická liečebňa Trnové v súčasnosti disponuje 250 lôžkami, ktoré sú rozmiestnené na 5 oddeleniach.
                                Hospitalizácia je realizovaná na podklade doporučenia ambulantného psychiatra, alebo pri ochranných liečbach na
                                základe nariadenia výkonu liečby.</p>

                            <h1>Poskytujeme:</h1>
                            <h4>* Kultúrne akcie: divadelné predstavenie, knižnicu</h4>
                            <h4>* Športové akcie: výlety do okolia, športové hry, posilňovňu, telocvičňu</h4>
                            <h4>* Duchovné vyžitie pri bohoslužbách</h4>
                            <p>* Ďalej liečebňa disponuje kompletným administratívnym úsekom a úsekom pomocných prevádzok (kotolňa, kuchyňa, údržbárska
                                dielňa, práčovňa). Liečebňa mení svoj charakter, stáva sa dynamickým ústavom, ktorý spĺňa odborné kritériá. Veľký dôraz kladieme
                                na vzdelávanie zdravotníckych pracovníkov na všetkých stupňoch. Cieľom snaženia všetkých pracovníkov liečebne je vytvoriť samostatný
                                moderný ústav, ktorý bude zabezpečovať komplexnú psychiatrickú starostlivosť na vysokej úrovni.</p>

                            <a href="menuPage.php">    <!-- BUTTON SPAT -->
                                <input class="buttonik"  align="center" type="button" value="Späť" />
                            </a>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>


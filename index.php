<?php
session_start();

//OBRAZ POZADIA
$url = 'https://wallpaperaccess.com/full/1282794.jpg';


//KONTROLUJE AKY JE SESSION DO URL , AK JE SESSION EXPIRED ROVNE 1 TAK VYPISE BANNER S HLASKOU
if (isset($_GET['sessionExpired'])) {
    if ($_GET['sessionExpired'] = 1) {
        echo '<div class="alert alert-danger"  role="alert">
            Prihlásenie vypršalo. Je potrebné sa znovu prihlásiť.
            </div>';
    }
}

//KONTROLUJE CI JE ATRIBUT NESPRAVNE UDAJE V URL , AK JE ROVNY JEDNA , TAK VYPISE BANNER S HLASKOU
if (isset($_GET['nespravneUdaje'])) {
    if ($_GET['nespravneUdaje'] = 1) {
        echo '<div class="alert alert-danger"  role="alert">
            Nesprávne zadané údaje. Vyskúšajte znova.
            </div>';
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="CSS/loginForm.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <meta charset="UTF-8">
    <title>Psychiatrická liečebňa</title>

    <!-- POZADIE -->
    <style type="text/css">
        body {
            background-image: url('<?php echo $url ?>');
            background-size: cover;
        }
    </style>
</head>
<body>


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <p>
            </p>
            <p>Prihláste sa.</p>
        </div>

        <!-- LOGIN FORM -->
        <form method="post" action="Login.php">
            <input type="text" id="login" class="fadeIn second" name="name" placeholder="Prihlasovacie meno"
                   required="required" pattern="[A-Za-z0-9]{1,20}">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Heslo"
                   required="required" pattern="[A-Za-z0-9]{1,20}">
            <input type="submit" class="fadeIn fourth" name="login" value="Prihlásiť">
        </form>

        <!-- PREPOJENIE NA STRANKU ZABUDLI STE HESLO (NEFUNKCNA STRANKA , HODI NAS NA ERROR PAGE) -->
        <div id="formFooter">
            <a class="underlineHover" href="errorPage.php">Zabudli ste heslo?</a>
        </div>

    </div>
</div>
</body>
</html>

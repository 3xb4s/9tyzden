<?php

if(isset($_GET['nespravneUdaje']))
{
    if($_GET['nespravneUdaje'] = 1) {
        echo '<div class="alert alert-danger"  role="alert">
            Nesprávne zadané údaje. Vyskúšajte znova.
            </div>';
    }
}
?>



<!DOCTYPE html>

<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="CSS/loginForm.css" >
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <meta charset="UTF-8">
    <title>Psychiatrická liečebňa</title>
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

        <!-- Login Form -->
        <form method="post" action="Login.php">
            <input type="text" id="login" class="fadeIn second" name="name" placeholder="Prihlasovacie meno" required="required" pattern="[A-Za-z0-9]{1,20}">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Heslo" required="required" pattern="[A-Za-z0-9]{1,20}">
            <input type="submit" class="fadeIn fourth" name="login" value="Prihlásiť">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Zabudli ste heslo?</a>
        </div>

    </div>
</div>
</body>
</html>

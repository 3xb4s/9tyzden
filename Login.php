<?php

require_once ("DatabaseSklad.php");
require_once ("Admin.php");

/* ZLE PRIHLASOVACIE UDAJE SPRAVA */
$msg = "Zle zadane prihlasovacie udaje.";
$newDB = new DatabaseSklad();

/* AK ADMIN NEHA PRAZDE UDAJE , ALEBO NAPISE ZLE UDAJE , VYPISE SA SPRAVA */
if(isset($_POST['login']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];

    /** @var  Admin $admin*/
    $admin = $newDB->getAdmin($name);

    if (empty($admin)){
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("Location: index.php?nespravneUdaje=1");
        die();
    }

    if ($password !== $admin[0]->getHeslo()){
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("Location: index.php?nespravneUdaje=1");
        die();
    }

    /* AK SA USPESNE PRIHLASI ADMIN , TAK HO PUSTI NA MENU PAGE */
    session_start();
    $_SESSION["loggedin"] = true;

    header("Location: menuPage.php");
    exit;
}
?>
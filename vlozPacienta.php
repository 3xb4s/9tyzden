<?php

require_once ("DatabaseSklad.php");

/* VYTVORENIE NOVEHO SKLADU A PRAZDNYCH PARAMETROV */

$db = new DatabaseSklad();

$meno = "";
$priezvisko = "";
$pohlavie = 0;
$diagnoza = "";

/* HOD DO PARAMETRU MENA MENO KTORE SME ZADALI , A TO ISTE S OSTATNYMI UDAJMI */

if (isset($_POST['meno'])) {
    $meno = $_POST['meno'];
}

if (isset($_POST['priezvisko'])) {
    $priezvisko = $_POST['priezvisko'];
}
if (isset($_POST['pohlavie'])) {
    $pohlavie = $_POST['pohlavie'];
}
if (isset($_POST['diagnoza'])) {
    $diagnoza = $_POST['diagnoza'];
}

/* AK JE HOCICO PRAZDNE , TAK SA NIC NEHODI DO DATABAZY */

if (empty($meno) || empty($priezvisko) || empty($diagnoza) ) {
    header("Location: pacientData.php");
    die();
}

/* VYTVOR NOVEHO PACIENTA S NAMI PRIDANYMI UDAJMI */

$pacient = new Pacient(0, $meno, $priezvisko, $pohlavie, $diagnoza);

/* HOD NOVO VYTVORENEHO PACIENTA DO DATABAZY */

$db->storePacienta($pacient);

/* REFRESHNI STRANKU */

header("Location: pacientData.php");

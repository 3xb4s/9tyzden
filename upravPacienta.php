<?php
require_once ("DatabaseSklad.php");

/* VYTVORENIE NOVEHO SKLADU A PRAZDNYCH PARAMETROV */
$db = new DatabaseSklad();

/* NAMIESTO PRAZDNYCH UDAJOV MAME LEN IDCKO PRIDELE UPRAVOVANEJ OSOBY */
if (isset($_POST['editId'])) {
    $id = $_POST['editId'];
}

if (isset($_POST['editMeno'])) {
    $meno = $_POST['editMeno'];
}

if (isset($_POST['editPriezvisko'])) {
    $priezvisko = $_POST['editPriezvisko'];
}

if (isset($_POST['editPohlavie'])) {
    $pohlavie = $_POST['editPohlavie'];
}
if (isset($_POST['editPricinaPobytu'])) {
    $diagnoza = $_POST['editPricinaPobytu'];
}

var_dump($_POST);

/* AK JE HOCICO PRAZDNE , TAK SA NIC NEHODI DO DATABAZY */
if (empty($id) || empty($meno) || empty($priezvisko) || empty($diagnoza) ) {
    header("Location: pacientData.php");
    die();
}

/* VYTVOR NOVEHO PACIENTA S UPRAVENYMI UDDAJMI */
$pacient = new Pacient($id, $meno, $priezvisko, $pohlavie, $diagnoza);

/* UPRAV EXISTUJUCEHO PACIENTA PODLA NOVO VYTVORENEHO PACIENTA */
$db->updatePacient($pacient);

/* REFRESHNI STRANKU */
header("Location: pacientData.php");

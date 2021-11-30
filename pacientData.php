<?php
session_start();



if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php?sessionExpired=1");
    exit;
}

require_once("DatabaseSklad.php");
require_once("Pacient.php");

$db = new DatabaseSklad();

$pacienti = $db->getAllPacienti();

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db->deletePacient($id);
    header("location: pacientData.php");
}
$count = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dáta pacientov</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="CSS/pacientData.css">
    <link rel="stylesheet" href="CSS/button.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        body {
            background-image: url("image (1).png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;

        }
    </style>

</head>



<body >
<div class="container-fluid" >
    <div class="row col-md-12 col-md-offset-2 custyle h-100 row align-items-center">
        <table class="table custab table-secondary font-size">
            <thead>
            <a href="menuPage.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Späť</a>
            <tr>
                <th>Poradie</th>
                <th>Číslo pacienta</th>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Pohlavie</th>
                <th>Príčina pobytu</th>
                <th>Dátum zaradenia</th>
            </tr>
            </thead>

            <?php foreach($pacienti as $pacient): ?>
                <tr>
                    <td><?=$count++?></td>
                    <td><?=$pacient->getId()?></td>
                    <td><?=$pacient->getMeno()?></td>
                    <td><?=$pacient->getPriezvisko()?></td>
                    <td><?=$pacient->getPohlavie()?></td>
                    <td><?=$pacient->getPricinaPobytu()?></td>
                    <td><?=$pacient->getDobaZaradenia()?></td>
                    <td class="text-center">
                        <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                    </td>
                    <td class="text-center">
                        <a onclick="return confirm('Chcete naozaj vymazať pacienta menom <?php echo $pacient->getMeno() . " " . $pacient->getPriezvisko()?>?');" href="pacientData.php?del=<?= $pacient->getId() ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Vymazať</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>
    <div align="center" class="center">
    <a href="menuPage.php">    <!-- poznamka button -->
        <input class="buttonik"  align="center" type="button" value="Späť" />
    </a>
    </div>
</body>


</html>
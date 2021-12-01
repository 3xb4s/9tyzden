<?php
session_start();

/* AK NIEJE ADMIN LOGNUTY NEPUSTI HO NA STRANKU */

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php?sessionExpired=1");
    exit;
}

require_once("DatabaseSklad.php");
require_once("Pacient.php");

$db = new DatabaseSklad();

$pacienti = $db->getAllPacienti();

/* AK JE V URL PREMENA DEL , TAK DO ID SI TO CO JE V DEL , A DELETNE PACIENTA S TYM ID , A REFRESHNE PAGE */

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db->deletePacient($id);
    header("location: pacientData.php");
}
/* COUNT SLUZI PRI VYTVARANI TABULKY NA POCITANIE KOLKO LUDI JE V TABULKY , AKA PORADIE */

$count = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dáta pacientov</title>
    <link href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- JS code -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
    <!--JS below-->

    <link rel="stylesheet" href="CSS/pacientData.css">
    <link rel="stylesheet" href="CSS/button.css">
    <script type="text/javascript" src="pacientData.js"></script>

    <!------ BACKROUND ---------->

    <style>
        body {
            background-image: url("image (1).png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;

        }
    </style>

</head>

<body>

<div class="container-fluid">
    <!-- BUTTON MODALU , NA PRIDANIE PACIENTA -->
    <div align="center">
        <button type="button" class="btn btn-primary buttonik buttonik-horemedzera" data-toggle="modal" data-target="#addModal">
            + Pridať pacienta
        </button>
    </div>

    <div class="row col-md-12 col-md-offset-2 custyle h-100 row align-items-center">
        <table id="table_id" class="display table custab table-secondary font-size">
            <thead>
            <!-- VYTVORENIE TABULKY S FOREACHOM PRE TAKY POCET , KOLKO ICH MAME V DATABAZE -->
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
            <tbody>
                <?php foreach ($pacienti as $pacient): ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $pacient->getId() ?></td>
                        <td><?= $pacient->getMeno() ?></td>
                        <td><?= $pacient->getPriezvisko() ?></td>
                        <td><?= $pacient->getPohlavie() == 0 ? "Muž" :" Žena" ?></td>
                        <td><?= $pacient->getPricinaPobytu() ?></td>
                        <td><?= $pacient->getDobaZaradenia() ?></td>
                        <td class="text-center">

                            <!-- ZAVOLA SI FUNKCIU UPDATE , KTORA ZOABRAZI MODAL SPREDVYPLNENYMI UDAJMI PACIENTA -->

                            <a id="edit<?= $count?>" onclick="predvypln(<?= $pacient->getId() ?>, '<?= $pacient->getMeno() ?>', '<?= $pacient->getPriezvisko() ?>', <?= $pacient->getPohlavie() ?>, '<?= $pacient->getPricinaPobytu() ?>')" class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        </td>
                        <td class="text-center">
                            <a onclick="return confirm('Chcete naozaj vymazať pacienta menom <?php echo $pacient->getMeno() . " " . $pacient->getPriezvisko() ?>?');"
                               href="pacientData.php?del=<?= $pacient->getId() ?>" class="btn btn-danger btn-xs"><span
                                        class="glyphicon glyphicon-remove"></span> Vymazať</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <!-- MODAL NA PRIDANIE PACIENTA , PRICOM JE MOZOST MUZ ALEBO ZENA PRI POHLAVI , PRICOM OSTATNE UDAJE MUSIA BYT LEN PISMENA ALEBO CISLA -->

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModal">Zadajte údaje pacienta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="vlozPacienta" id="vlozPacienta" method="post" action="vlozPacienta.php">
                        <div class="form-group">
                            <label for="meno" class="col-form-label">Meno:</label>
                            <input required="required" name="meno" type="text" class="form-control" id="meno">
                        </div>

                        <div class="form-group">
                            <label for="priezvisko" class="col-form-label">Priezvisko:</label>
                            <input required="required" name="priezvisko" type="text" class="form-control" id="priezvisko">
                        </div>

                        <div class="form-group">
                            <label for="pohlavie">Pohlavie:</label>
                            <select name="pohlavie" class="form-control" id="pohlavie">
                                <option value=0 >Muž</option>
                                <option value=1 >Žena</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="diagnoza" class="col-form-label">Príčína pobytu:</label>
                            <input  required="required" name="diagnoza" type="text" class="form-control" id="diagnoza">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
                    <button onclick="form_submit()" type="submit" value="vlozPacienta" class="btn btn-primary">Pridať pacienta</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDITU PACIENTA -->
    <div class="modal" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit pacienta</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="edit-form" onsubmit="update()" method="post" action="upravPacienta.php">
                        <input class="form-control" type="hidden" name="editId" id="editId">
                        <div class="form-group">
                            <label for="editMeno">Meno:</label>
                            <input required="required" class="form-control" type="text" name="editMeno" id="editMeno">
                        </div>
                        <div class="form-group">
                            <label for="priezvisko">Priezvisko:</label>
                            <input required="required" class="form-control" type="text" name="editPriezvisko" id="editPriezvisko">
                        </div>
                        <label for="editPohlavie">Pohlavie:</label>
                        <select name="editPohlavie" class="form-control" id="editPohlavie">
                            <option value=0 >Muž</option>
                            <option value=1 >Žena</option>
                        </select>
                        <div class="form-group">
                            <label for="editPricinaPobytu">Príčina pobytu:</label>
                            <input required="required" class="form-control" type="text" name="editPricinaPobytu" id="editPricinaPobytu">
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnUpdateSubmit">Update</button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    </form>


                </div>

            </div>
        </div>
    </div>

</div>
<div align="center" class="center">
    <a href="menuPage.php">    <!-- poznamka button -->
        <input class="buttonik buttonik-dolemedzera" align="center" type="button" value="Späť"/>
    </a>
</div>
</body>


</html>


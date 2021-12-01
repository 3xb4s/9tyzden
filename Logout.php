<?php
session_start();

// UNSETNE VSETKY SESSION VARIABLES
$_SESSION = array();

// ZNICENIE SESSION PRED ODCHODOM
session_destroy();

// AK SA ODHLASI ADMIN , TAK HO TO VRATI SPAT NA HLAVNY A.K.A INDEX PAGE
header("location: index.php");
exit;
?>
<?php



require_once ("DatabaseSklad.php");
require_once ("Admin.php");

$msg = "Zle zadane prihlasovacie udaje.";
$newDB = new DatabaseSklad();

if(isset($_POST['login']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];

    /** @var  Admin $admin*/
    $admin = $newDB->getAdmin($name);
    //var_dump($admin);
    //exit;


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
    session_start();
    $_SESSION["loggedin"] = true;

    header("Location: menuPage.php");
    exit;
}
?>
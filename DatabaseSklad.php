<?php
require_once "Pacient.php";

class DatabaseSklad
{
    private $con;

    public function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=localhost;
            dbname=9T",
                "root",
                "dtb456");

            $this->con->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Chyba:" . $e->getMessage());
        }
    }

    //FUNKCIA STORE PACIENTA , KTORA ULOZI PACIENTA Z PARAMETRAMI DO DATABAZY
    public function storePacienta(Pacient $pacient)
    {
        $this->con->prepare("INSERT INTO pacienti(meno,priezvisko,dobaZaradenia,pohlavie) VALUES (?,?,?,?)")
        ->execute([$pacient->getMeno(),$pacient->getPriezvisko(),$pacient->getDatetime(),$pacient->getPohlavie()]);
    }

    //GETTERI ADMINA A PACIENTA/PACIENTOV
    public function getAllPacienti()
    {
        return $this->con->query("SELECT * FROM pacienti")->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Pacient::class );
    }

    public function getPacient(int $id)
    {
        return $this->con->query("SELECT * FROM pacienti WHERE id='$id' ")->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Pacient::class );
    }

    public function getAdmin(?string $pm)
    {
        return $this->con->query("SELECT * FROM admin WHERE prihlasovacieMeno='$pm' ")->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Admin::class );
    }

    //FUNKCIA DELETE PACIENT
    public function deletePacient(int $id)
    {
        $this->con->query("DELETE FROM pacienti WHERE id='$id'");
    }
}
<?php

class Pacient
{
    /*  KONSTRUKTOR PACIENTA */
    public function __construct(
        private int     $id = 0,
        private ?string $meno = null,
        private ?string $priezvisko = null,
        private int     $pohlavie = 0,
        private ?string $pricinaPobytu = null,
        private         $dobaZaradenia = null)
    {

    }

    /* GETTERE SETTERE */
    /**
     * @return string|null
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @param string|null $meno
     */
    public function setMeno($meno)
    {
        $this->meno = $meno;
    }

    /**
     * @return string|null
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param string|null $priezvisko
     */
    public function setPriezvisko($priezvisko)
    {
        $this->priezvisko = $priezvisko;
    }

    /**
     * @return int
     */
    public function getPohlavie()
    {
        return $this->pohlavie;
    }

    /**
     * @param int $pohlavie
     */
    public function setPohlavie($pohlavie)
    {
        $this->pohlavie = $pohlavie;
    }

    /**
     * @return string|null
     */
    public function getPricinaPobytu()
    {
        return $this->pricinaPobytu;
    }

    /**
     * @param string|null $pricinaPobytu
     */
    public function setPricinaPobytu($pricinaPobytu)
    {
        $this->pricinaPobytu = $pricinaPobytu;
    }

    /**
     * @return string
     */
    public function getDobaZaradenia()
    {
        $date = date_create($this->dobaZaradenia);
        return date_format($date, "Y-m-d");
    }

    /**
     * @param mixed $dobaZaradenia
     */
    public function setDobaZaradenia($dobaZaradenia)
    {
        $this->dobaZaradenia = $dobaZaradenia;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
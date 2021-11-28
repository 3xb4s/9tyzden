<?php

class Pacient
{
    public function __construct(
        private int     $id = 0,
        private ?string $meno = null,
        private ?string $priezvisko = null,
        private ?string $pricinaPobytu = null,
        private         $datetime = null,
        private int     $pohlavie = 0)
    {

    }

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
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param mixed $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
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
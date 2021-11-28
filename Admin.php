<?php

class Admin
{
    public function __construct(
        private int     $id = 0,
        private ?string $prihlasovacieMeno = null,
        private ?string $heslo = null
        )


{

}

    /**
     * @return string|null
     */
    public function getPrihlasovacieMeno(): ?string
    {
        return $this->prihlasovacieMeno;
    }

    /**
     * @param string|null $prihlasovacieMeno
     */
    public function setPrihlasovacieMeno(?string $prihlasovacieMeno): void
    {
        $this->prihlasovacieMeno = $prihlasovacieMeno;
    }

    /**
     * @return string|null
     */
    public function getHeslo(): ?string
    {
        return $this->heslo;
    }

    /**
     * @param string|null $heslo
     */
    public function setHeslo(?string $heslo): void
    {
        $this->heslo = $heslo;
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
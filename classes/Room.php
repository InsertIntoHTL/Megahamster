<?php


class Room
{
    private $preis=0;
    private $bezeichnung="";
    private $length="";
    private $width="";
    private $height="";


    function __construct(string $bezeichnung, float $preis, int $length, int $width, int $height) {
        $this->preis = $preis;
        $this->bezeichnung = $bezeichnung;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;

    }

    /**
     * @return int
     */
    public function getPreis() : float
    {
        return $this->preis;
    }

    /**
     * @return string
     */
    public function getBezeichnung() : string
    {
        return $this->bezeichnung;
    }

    /**
     * @return int|string
     */
    public function getLength() : int
    {
        return $this->length;
    }

    /**
     * @param int|string $length
     */
    public function setLength($length) : void
    {
        $this->length = $length;
    }

    /**
     * @return int|string
     */
    public function getWidth() : int
    {
        return $this->width;
    }

    /**
     * @param int|string $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return int|string
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @param int|string $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }



    function __toString()
    {
        return $this->getBezeichnung()." : ".$this->getPreis();
    }
}
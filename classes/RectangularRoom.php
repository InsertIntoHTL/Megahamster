<?php


class RectangularRoom
{
    private $preis=0;
    private $bezeichnung="";
    private $length="";
    private $width="";


    function __construct(string $bezeichnung, float $preis, float $length, float $width) {
        $this->preis = $preis;
        $this->bezeichnung = $bezeichnung;
        $this->length = $length;
        $this->width = $width;
    }

    public function toHtml() {
        return "<tr>
            <td>{$this->getBezeichnung()}</td>
            <td>{$this->getPreis()}</td>
            <td>{$this->getLength()}</td>
            <td>{$this->getWidth()}</td>
            <td></td>
            <td>{$this->calcArea()}m²</td>
        </tr>";
    }

    public function calcArea() {
        return $this->length * $this->width;
    }

    /**
     * @return float
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
     * @return float
     */
    public function getLength() : float
    {
        return $this->length;
    }


    /**
     * @return float
     */
    public function getWidth() : float
    {
        return $this->width;
    }



    function __toString()
    {
        return $this->getBezeichnung()." : ".$this->getPreis();
    }
}
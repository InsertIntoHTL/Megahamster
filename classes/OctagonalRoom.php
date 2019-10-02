<?php


class OctagonalRoom
{
    private $preis = 0;
    private $bezeichnung = "";
    private $sidelength = "";

    function __construct(string $bezeichnung, float $preis, float $sidelength)
    {
        $this->preis = $preis;
        $this->bezeichnung = $bezeichnung;
        $this->sidelength = $sidelength;
    }

    public function calcArea()
    {
        return round(pow($this->sidelength, 2) * (2+2*sqrt(2)), 2);
    }

    public function toHtml() {
        return "<tr>
            <td>{$this->getBezeichnung()}</td>
            <td>{$this->getPreis()}</td>
            <td></td>
            <td></td>
            <td>{$this->getSidelength()}</td>
            <td>{$this->calcArea()}m²</td>
        </tr>";
    }

    /**
     * @return float|int
     */
    public function getPreis(): float
    {
        return $this->preis;
    }

    /**
     * @return string
     */
    public function getBezeichnung(): string
    {
        return $this->bezeichnung;
    }

    /**
     * @return float
     */
    public function getSidelength(): float
    {
        return $this->sidelength;
    }


}
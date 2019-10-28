<?php

namespace InsertIntoHTL\Megahamster\Living;

class OctagonalRoom extends Room implements \JsonSerializable {
    private $side;

    public function __construct(string $name, float $price, float $side, array $bezeichnung) {
        parent::__construct($name, $price, $bezeichnung);
        $this->side = $side;
    }

    /**
     * @return float
     */
    public function getSide() : float {
        return $this->side;
    }

    public function calcArea() : float {
        return 2 * (sqrt(2) + 1) * pow($this->side, 2);
    }

    public function __toString() : string {
        return parent::getName() . ' ' . parent::getPrice() . '$';
    }


    public function toHTML() : string {
        return
            "<tr>" .
                "<td>" . parent::getName() . "</td>" .
                "<td>" . number_format(parent::getPrice(), 1) . " €</td>" .
                "<td></td>" .
                "<td></td>" .
                "<td>" . number_format($this->getSide(), 1) . " cm</td>" .
                "<td>" . number_format($this->calcArea(), 1). " cm²</td>" .
                "<td>" . $this->getBezeichnung() . "</td>" .
            "</tr>";
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        $rv['name'] = $this->getName();
        $rv['preis'] = $this->getPrice();
        $rv['seite'] = $this->getSide();
        $rv['bezeichnung'] = $this->getBezeichnung();
        return $rv;
    }
}
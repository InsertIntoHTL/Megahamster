<?php

namespace InsertIntoHTL\Megahamster\Living;

class OctagonalRoom extends Room {
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
}
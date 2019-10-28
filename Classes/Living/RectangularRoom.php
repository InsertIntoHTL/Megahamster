<?php

namespace InsertIntoHTL\Megahamster\Living;

class RectangularRoom extends Room implements \JsonSerializable {
    private $length;
    private $width;

    public function __construct(string $name, float $price, float $length, float $width, array $bezeichnung) {
        parent::__construct($name, $price, $bezeichnung);
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getLength() : float {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth() : float {
        return $this->width;
    }

    public function calcArea() : float {
        return $this->width * $this->length;
    }

    public function __toString() : string {
        return parent::getName() . ' ' . parent::getPrice() . '$';
    }


    public function toHTML() : string {
        return
            "<tr>" .
                "<td>" . parent::getName() . "</td>" .
                "<td>" . number_format(parent::getPrice(), 1) . " €</td>" .
                "<td>" . number_format($this->getLength(), 1) . " cm</td>" .
                "<td>" . number_format($this->getWidth(), 1) . " cm</td>" .
                "<td></td>" .
                "<td>" . number_format($this->calcArea(), 1) . " cm²</td>" .
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
        $rv['length'] = $this->getLength();
        $rv['width'] = $this->getWidth();
        $rv['bezeichnung'] = $this->getBezeichnung();
        return $rv;
    }
}
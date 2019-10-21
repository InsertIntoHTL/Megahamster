<?php

namespace InsertIntoHTL\Megahamster\Living;

abstract class Room {
    private $price;
    private $name;
    private $bezeichnung = [];

    public function __construct(string $name, float $price, array $bezeichnung) {
        $this->price = $price;
        $this->name = $name;
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * @return string
     */
    public function getName() : string {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice() : float {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getBezeichnung(): string
    {
        $str = "";
        foreach ($this->bezeichnung as $info) {
            $str .= $info . "<br>";
        }
        return $str;
    }




    public abstract function calcArea() : float ;
    public abstract function toHTML() : string ;
}
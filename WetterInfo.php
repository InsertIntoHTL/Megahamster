<?php

namespace FIS\JSONDemo;

class WetterInfo implements \JsonSerializable
{
    private $grad;
    private $witterung;
    private $stadt;

    public function __construct(int $grad, string $witterung, string $stadt) {
        $this->grad = $grad;
        $this->witterung = $witterung;
        $this->stadt = $stadt;
    }

    /**
     * @return int
     */
    public function getGrad(): int
    {
        return $this->grad;
    }

    /**
     * @return string
     */
    public function getWitterung(): string
    {
        return $this->witterung;
    }

    /**
     * @return string
     */
    public function getStadt(): string
    {
        return $this->stadt;
    }

    public function jsonSerialize()
    {
        $rv['grad'] = $this->grad;
        $rv['witterung'] = $this->witterung;
        $rv['stadt'] = $this->stadt;
        return $rv;
    }


}
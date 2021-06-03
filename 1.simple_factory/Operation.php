<?php

class Operation
{
    private $numberA;
    private $numberB;


    public function getNumberA()
    {
        return $this->numberA;
    }

    public function getNumberB()
    {
        return $this->numberB;
    }

    public function setNumberA($numberA)
    {
        $this->numberA = $numberA;
    }

    public function setNumberB($numberB)
    {
        $this->numberB = $numberB;
    }


    public function getResult()
    {
        throw new \Exception('does not implement getResult method');
    }

}
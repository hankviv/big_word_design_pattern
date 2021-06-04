<?php

class ToyotaBuilder extends Builder
{
    private $product;
    public function __construct()
    {
        $this->product = new Car();
    }

    public function BuilderPartA()
    {
        $this->product->add('丰田发动机');
    }

    public function BuilderPartB()
    {
        $this->product->add('丰田变速箱');
    }

    public function GetResult()
    {
        return $this->product;
    }

}
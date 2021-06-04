<?php

class BMWBuilder extends Builder
{
    private $product;
    public function __construct()
    {
        $this->product = new Car();
    }

    public function BuilderEngine()
    {
        $this->product->add('宝马发动机');
    }

    public function BuilderGearBox()
    {
        $this->product->add('宝马变速箱');
    }

    public function GetResult()
    {
        return $this->product;
    }

}
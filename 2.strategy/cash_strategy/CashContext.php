<?php

class CashContext
{
    private $cs;

    public function __construct(string $type)
    {
        switch ($type) {
            case '原价':
                $this->cs = new CashNormal();
                break;
            case '八折':
                $this->cs = new CashRebate(0.8);
                break;
            case '满500减200':
                $this->cs = new CashSub(500, 200);
                break;
        }
    }

    //委托Cash的子类去实现acceptCash
    public function getResult($money)
    {
        return $this->cs->acceptCash($money);
    }

}
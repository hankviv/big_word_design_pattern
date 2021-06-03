<?php

class CashRebate extends Cash
{
    private $moneyRebate = 1;

    //打折活动 传多少折扣就打多少
    public function __construct(float $moneyRebate)
    {
        $this->moneyRebate = $moneyRebate;
    }


    public function acceptCash(float $money)
    {
        return $money * $this->moneyRebate;
    }

}
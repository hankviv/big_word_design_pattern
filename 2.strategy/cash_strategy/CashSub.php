<?php

class CashSub extends Cash
{
    private $moneyCondition;
    private $moneySub;

    //满减活动 满多少减去多少
    public function __construct(int $moneyCondition, int $moneySub)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneySub = $moneySub;
    }


    public function acceptCash(float $money)
    {
        if ($money >= $this->moneyCondition) {
            $money = $money - $this->moneySub;
        }
        return $money;
    }
}
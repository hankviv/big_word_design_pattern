<?php

class CashNormal extends Cash
{
    public function acceptCash(float $money)
    {
        return $money;
    }
}
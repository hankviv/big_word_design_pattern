<?php

class CashFactory
{
    public static function createCashAccept(string $type)
    {
        $cash = null;
        switch($type){
            case '原价':
                $cash = new CashNormal;
                break;
            case '八折':
                $cash = new CashRebate(0.8);
                break;
            case '满500减200':
                $cash = new CashSub(500,200);
                break;
        }
        return $cash;
    }
}
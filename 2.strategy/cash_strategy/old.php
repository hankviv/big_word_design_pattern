<?php

/*
 * 促销活动 输入 活动类型，单价， 数量  输出价格
 */
function compute($discount, $price, $number)
{
    $totalPrice = $price * $number;
    switch ($discount) {
        case '八折':
            $totalPrice = $totalPrice * 0.8;
            break;
        case '六折':
            $totalPrice = $totalPrice * 0.6;
            break;
        case '满300减200':
            if ($totalPrice >= 300) {
                $totalPrice = $totalPrice - 200;
            }
            break;
        case '满400减100':
            if ($totalPrice >= 400) {
                $totalPrice = $totalPrice - 100;
            }
            break;
        case '原价':
            $totalPrice = $totalPrice * 1;
            break;
    }
    return $totalPrice;
}
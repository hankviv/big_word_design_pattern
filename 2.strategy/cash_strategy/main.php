<?php

$cashType = $argv[1] ?? '满500减200';
$price = $argv[2] ?? 50;
$number = $argv[3] ?? 2;

$totalPrice = $price * $number;

//我们使用CashContext将Cash所有的算法封闭起来，让用户只需要关注CashContext。
$cc = new CashContext($cashType);

$price = $cc->getResult($totalPrice);
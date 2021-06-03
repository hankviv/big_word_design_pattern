<?php

$cashType = $argv[1] ?? '满500减200';
$price = $argv[2] ?? 50;
$number = $argv[3] ?? 2;

$totalPrice = $price * $number;

//通过工厂模式 获取对象, 传递不同的折扣类型 获取不同的折扣方法
$cash = CashFactory::createCashAccept($cashType);

//调用子类实现的方法
$totalPrice = $cash->acceptCash($totalPrice);
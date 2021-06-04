<?php

//创建一个人
$person = new Person('小王');

$TShirts = new TShirts();

$TShirts->show();


//穿上鞋子 T恤
$person->WearSneakers();
$person->WearTShirts();

//展示
$person->show();

//创建一个人
$person = new Person('小王');

//穿上鞋子 西装
$person->WearSneakers();
$person->WearSuit();

//展示
$person->show();



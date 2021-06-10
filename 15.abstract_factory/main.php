<?php


$factory = $argv[1] ?? 'dell';

//每个工厂都有鼠标和键盘两个产品，鼠标都有左右键，键盘都有数字和字母键盘，当我们需要鼠标键盘的时候，任意使用某个厂的都可以实现
//例如： 数据库连接 每种类型的数据库引擎 如SQL Server 或者 Mysql 都有数据库连接 和 增删改查的功能。数据库连接又分为连接池，单连接，
//增删改查每个都有不一样的实现。


switch($factory){
    case 'dell':
       $factory = new DellFactory();
       break;
    case 'HP':
        $factory = new HPFactory();
}

$mouse = $factory->createMouse();
$keyboard = $factory->createKeyboard();

$mouse->leftClick();
$mouse->rightClick();

$keyboard->WordClick();
$keyboard->numberClick();
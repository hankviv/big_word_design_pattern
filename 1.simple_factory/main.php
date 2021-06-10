<?php

/*
 * 实现一个计算器 operate 是操作类型 numberA是第一个数字，numberB是第二个数字
 */
$operate = $argv[1] ?? '+';
$numberA = $argv[2] ?? 1;
$numberB = $argv[3] ?? 1;

//通过工厂模式 获取对象, 传递不同的运算符号，输出对应的运算对象
$operation = OperationFactory::createOperation($operate);


//调用子类重写的对象
$result = $operation->getResult($numberA,$numberB);
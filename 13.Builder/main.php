<?php


$BMWBuild = new BMWBuilder();

//让指挥官负责调用builder内部的方法
new Director($BMWBuild);

//让bwm造车，造好后返回
$car = $BMWBuild->getResult();

//车展示一下都有啥组件
$car->show();

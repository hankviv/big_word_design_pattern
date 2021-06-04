<?php


$BMWBuild = new BMWBuilder();

new Director($BMWBuild);

$car = $BMWBuild->getResult();
$car->show();

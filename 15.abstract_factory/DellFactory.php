<?php

require_once('./I3CFactory.php');

class DellFactory implements I3CFactory
{
    public static function createMouse()
    {
        return new DellMouse();
    }

    public static function createKeyBoard()
    {
        return new DellKeyBoard();
    }
}
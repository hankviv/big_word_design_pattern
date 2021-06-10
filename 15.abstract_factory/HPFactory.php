<?php

class HPFactory implements I3CFactory
{
    public static function createMouse()
    {
        return new HPMouse();
    }

    public static function createKeyBoard()
    {
        return new HPKeyBoard();
    }
}
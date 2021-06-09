<?php

class AddFactory implements IFactory
{
    public static function createOperation()
    {
        return new OperationAdd();
    }
}
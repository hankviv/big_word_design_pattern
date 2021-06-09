<?php

class DivFactory implements IFactory
{
    public static function createOperation()
    {
        return new OperationDiv();
    }
}
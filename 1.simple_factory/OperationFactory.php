<?php

class OperationFactory
{
    public static function createOperation(string $operate)
    {
        $operation = '';
        switch($operate){
            case '+':
                $operation = new OperationAdd();
                break;
            case '/':
                $operation = new OperationDiv();
                break;
        }
        return $operation;
    }
}
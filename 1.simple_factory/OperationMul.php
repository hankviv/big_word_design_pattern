<?php

class OperationMul extends Operation
{

    public function getResult()
    {
        return $this->getNumberA() * $this->getNumberB();
    }

}
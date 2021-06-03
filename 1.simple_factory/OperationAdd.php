<?php

class OperationAdd extends Operation
{

    public function getResult()
    {
        return $this->getNumberA() + $this->getNumberB();
    }

}
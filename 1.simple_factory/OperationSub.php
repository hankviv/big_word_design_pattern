<?php

class OperationSub extends Operation
{

    public function getResult()
    {
        return $this->getNumberA() - $this->getNumberB();
    }

}
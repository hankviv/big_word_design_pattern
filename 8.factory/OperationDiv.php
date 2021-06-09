<?php

class OperationDiv extends Operation
{

    public function getResult()
    {
        return $this->getNumberA() / $this->getNumberB();
    }

}
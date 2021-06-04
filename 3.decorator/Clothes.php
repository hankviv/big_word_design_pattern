<?php

class Clothes extends Person
{

    private $person;

    public function show()
    {
        if ($this->person != null) {
            $this->person->show();
        }
    }
}
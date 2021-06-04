<?php

class Worker implements Person
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show()
    {
        print_r("穿上了". $this->name);
    }
}
<?php

class Car
{
    public $parts = [];

    public function add(string $part)
    {
        $this->parts[] = $part;
    }

    public function show()
    {
        foreach ($this->parts as $part) {
            print_r($part);
        }
    }

}
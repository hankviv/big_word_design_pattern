<?php

class Director
{
    public function __construct(Builder $builder)
    {
        $builder->BuilderEngine();
        $builder->BuilderGearBox();
    }
}
<?php

class Person
{
    private $clothes = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function WearTShirts()
    {
        $this->clothes[] = 'T恤';
    }

    public function WearSuit()
    {
        $this->clothes[] = '西装';
    }

    public function WearSneakers()
    {
        $this->clothes[] = '球鞋';
    }

    public function show()
    {
        foreach ($this->clothes as $clothe) {
            print_r($clothe);
        }
    }
}



//创建一个人
$person = new Person('小王');

//穿上鞋子 T恤
$person->WearSneakers();
$person->WearTShirts();

//展示
$person->show();

//创建一个人
$person = new Person('小王');

//穿上鞋子 西装
$person->WearSneakers();
$person->WearSuit();

//展示
$person->show();



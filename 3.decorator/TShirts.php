<?php

class TShirts extends Clothes
{
    public function show()
    {
        print_r("穿上了T恤");
        parent::show();
    }
}
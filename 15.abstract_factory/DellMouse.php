<?php

class DellMouse implements IMouse
{
    public function leftClick()
    {
        print_r('dell mouse leftClick');
    }

    public function rightClick()
    {
        print_r('dell mouse rightClick');
    }
}
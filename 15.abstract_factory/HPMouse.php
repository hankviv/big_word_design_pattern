<?php

class HPMouse implements IMouse
{
    public function leftClick()
    {
        print_r('HP mouse leftClick');
    }

    public function rightClick()
    {
        print_r('HP mouse rightClick');
    }
}
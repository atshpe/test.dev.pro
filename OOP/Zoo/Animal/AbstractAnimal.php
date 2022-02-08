<?php

namespace Zoo\Animal;

abstract class AbstractAnimal
{
    public
        $color,
        $size;

    public function move()
    {

    }

    public function eat()
    {

    }

    abstract function makeNoize();
}

<?php

namespace Zoo\Animal\CatFamily;

require dirname(__FILE__) . '/../AbstractAnimal.php';

class Cat extends \Zoo\Animal\AbstractAnimal
{
    public function makeNoize()
    {
        echo 'meow meow meow';
    }
}

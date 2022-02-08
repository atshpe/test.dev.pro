<?php

namespace Zoo\Animal\DogFamily;

require dirname(__FILE__) . '/../AbstractAnimal.php';

class Dog extends \Zoo\Animal\AbstractAnimal
{
    public function makeNoize()
    {
        echo 'bark bark bark';
    }
}

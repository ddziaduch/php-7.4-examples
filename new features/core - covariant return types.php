<?php declare(strict_types=1);

interface Animal
{
    public static function factory(): Animal;
}

interface Dog extends Animal
{
    // 7.3 wyrzuci
    // PHP Fatal error: Declaration of Dog::factory(): Dog must be compatible
    // with Animal::factory(): Animal
    public static function factory(): Dog;
}
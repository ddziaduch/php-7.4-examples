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

interface Ancestor
{
    public function toArray(Iterator $i);
}

interface Descendant extends Ancestor
{
    // 7.3 wyrzuci
    // Fatal error: Declaration of Descendant::toArray(Traversable $i) must be
    // compatible with Ancestor::toArray(Iterator $i)
    public function toArray(Traversable $i);
}
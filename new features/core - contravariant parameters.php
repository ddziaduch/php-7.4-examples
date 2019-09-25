<?php declare(strict_types=1);

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

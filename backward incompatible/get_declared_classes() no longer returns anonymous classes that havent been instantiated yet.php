<?php declare(strict_types=1);

class Base {}

class Factory {
    public static function build(): Base {
        return new class() extends Base {};
    }
}

function isUnusedAnonymousClassDeclared(): bool {
    foreach (get_declared_classes() as $class) {
        $reflectionClass = new ReflectionClass($class);
        if (
            $reflectionClass->isAnonymous()
            && $reflectionClass->isSubclassOf(Base::class)
        ) {
            return true;
        }
    }
    return false;
}

// 7.3 -> true
// 7.4 -> false
var_dump(isUnusedAnonymousClassDeclared());
Factory::build();
// 7.3 -> true
// 7.4 -> true
var_dump(isUnusedAnonymousClassDeclared());



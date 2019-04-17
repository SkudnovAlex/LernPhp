<?php

class A
{
    const CONST1 = 'Константа класса А';

    public function getConst ()
    {
        var_dump(self::CONST1);
    }
    public function getConst2 ()
    {
        var_dump(static::CONST1);
    }
}

class B extends A
{
    const CONST1 = 'Константа класса B';

}

$a = new A();
$b = new B();
$a->getConst();
echo "<br>";
$b->getConst2();
echo "<br>";
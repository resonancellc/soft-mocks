<?php
/**
 * @author Konstantin Kuklin <konstantin.kuklin@gmail.com>
 */
namespace Badoo\SoftMock\Tests;

class AnonymousTestClass
{
    const SOMETHING = 1;

    public function doSomething()
    {
        return new class {
            public function meth()
            {
                return [self::class, static::class, get_called_class()];
            }
        };
    }
}

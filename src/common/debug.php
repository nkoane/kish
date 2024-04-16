<?php

namespace Kish\Common;

class Debug
{
    public static function prepend(bool $end = false): void
    {
        if (php_sapi_name() !== 'cli') {
            echo $end ? '</pre>' :  '<pre>';
        } else {
            echo "\n\n";
        }
    }

    public static function dump(mixed $value, mixed ...$values): void
    {
        self::prepend();

        $values ? var_dump($value, $values) : var_dump($value);

        self::prepend(true);
    }

    public static function dd(mixed $value, mixed ...$values): void
    {
        self::dump($value, $values);
        die();
    }
}

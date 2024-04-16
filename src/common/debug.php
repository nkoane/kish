<?php

namespace Kish\Common;

class Debug
{
    public static function dump($data)
    {
        // check if its a browser or console
        if (php_sapi_name() !== 'cli') {
            echo '<pre>';
        } else {
            echo "\n\n";
        }

        var_dump($data);

        if (php_sapi_name() !== 'cli') {
            echo '</pre>';
        } else {
            echo "\n\n";
        }
    }

    public static function dd($data)
    {
        self::dump($data);
        die();
    }
}

<?php 
namespace App;

class Hola
{
    public static function hello($data)
    {
        echo "Hello: " . ucwords($data) . "Date: " . date('Y-m-d');
    }
}

?> 
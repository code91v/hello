<?php 
namespace App;

class Hello
{
    public static function hello($data)
    {
        echo "Hello: " . ucwords($data) . "Date: " . date('Y-m-d');
    }
}

?> 
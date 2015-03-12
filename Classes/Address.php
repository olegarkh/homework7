<?php
/**
 * Created by PhpStorm.
 * User: Олег
 * Date: 12.03.15
 * Time: 11:51
 */

class Address
{
    public static function part($n)
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $pathParts = explode('/', $path);
        return $pathParts[$n];
    }
} 
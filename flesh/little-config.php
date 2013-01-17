<?php

class Config
{
    private static $cfg = array
    (
        'title' => 'ИС управления справочниками'
    );

    public static function get($key, $default = NULL)
    {
        $var = static::$cfg;
        foreach (preg_split('|[/.\|]|', $key) AS $k)
        {
            if (!isset($var[$k]) || $var[$k] === NULL)
            {
                return $default;
            }
            $var = $var[$k];
        }
        return $var;
    }
}
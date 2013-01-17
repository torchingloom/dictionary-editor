<?php

class Config
{
    private static $cfg = array
    (
        'title' => 'ИС управление справочниками',
        'tree-default-icon' => array('node' => '/img/icons/toggle_log.png', 'dir' => '/img/icons/folder_cyan.png'),
        'dict-tree-map' => array
        (
            3 => array(1),
            4 => array(1),
            5 => array(2),
            6 => array(2),
        ),
        'dict-tree' => array
        (
            1 => array
            (
                'title' => 'Общие',
                'type' => 'cat',
                'icon' => '/img/icons/browser.png',
                'childs' => array
                (
                    3 => array('title' => 'Валюты', 'type' => 'dict', 'dict' => 'Currency'),
                    4 => array('title' => 'Страны', 'type' => 'dict', 'dict' => 'Country'),
                )
            ),
            2 => array
            (
                'title' => 'Ценные бумаги',
                'type' => 'cat',
                'icon' => '/img/icons/browser.png',
                'childs' => array
                (
                    5 => array('title' => 'Выпуски бумаг', 'type' => 'dict', 'dict' => 'IssueOfSecurities'),
                    6 => array('title' => 'Типы выпусков', 'type' => 'dummy'),
                )
            ),
        ),
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
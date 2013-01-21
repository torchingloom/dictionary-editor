<?php

$arr =  array
(
    'display_type' => 1, // gorizontal split
    'fields' => array
    (
        'id' => array('title' => 'ID', 'type' => 'int', 'readonly' => true),
        'name' => array('title' => 'Идентификатор', 'type' => 'varchar', 'maxlength' => 20),
        'title' => array('title' => 'Заголовок', 'type' => 'varchar', 'maxlength' => 20),
        'text' => array('title' => 'Текст', 'type' => 'textarea', 'maxlength' => 200, 'multyrow' => true),
        'date' => array('title' => 'Дата', 'type' => 'date'),
        'country_choice' => array('title' => 'Страна', 'type' => 'dictchoice', 'dict' => 'Country'),
        'array_choice' => array('title' => 'Выбор из набора', 'type' => 'сhoice', 'choice' => array('one'=>'Один', 'one1'=>'Еще один', 'two'=>'Два', 'three'=>'Три')),
        'multy_array_choice' => array('title' => 'Множественный выбор из набора', 'type' => 'сhoice', 'multy' => true, 'choice' => array('one'=>'Один', 'one1'=>'Еще один', 'two'=>'Два', 'three'=>'Три', 'two1'=>'Снова Два', 'three1'=>'Ну и Три')),
        'radio_choice' => array('title' => 'Радио', 'type' => 'radio', 'choice' => array(12=>'Двенадцать', 'over9000'=>'Очень много')),
        'checkbox' => array('title' => 'Галка', 'type' => 'checkbox'),
    ),
    'fields_in_list' => array('id', 'name', 'title', 'country_choice'),
    'chosen' => array('value' => 'id', 'title' => 'name'),
    'list_sort' => array('field' => 'id', 'type' => 'asc',),
    'fieldsets' => array
    (
        array('title' => 'Строчка', 'fields' => array('name', 'title')),
        array('title' => 'Текстовая зона с датой', 'fields' => array('text', 'date')),
//        array('title' => 'Выборы', 'fields' => array('country_choice', 'array_choice', 'multy_array_choice')),
        array('title' => 'Радио и галка', 'fields' => array('radio_choice', 'checkbox')),
    ),
    'items' => unserialize(file_get_contents(APP_DIR ."/.data/dict/CoolDict.items")),
);

return $arr;

$items = array();
for ($i = 0; $i < 114; $i++)
{
    $item = &$items[];
    $item[] = $i;
    $item[] = randomstring(10, 15);
    $item[] = randomstring(10, 25);
    $item[] = randomstring(50, 200);
    $item[] = date('Y-m-d', rand(strtotime('2012-06-06'), time()));
    $item[] = 'country';
    $item[] = array_rand($arr['fields']['array_choice']['choice']);
    $item[] = array_rand($arr['fields']['multy_array_choice']['choice']);
    $item[] = array_rand($arr['fields']['radio_choice']['choice']);
    $item[] = rand(0, 1);
}

file_put_contents(APP_DIR ."/.data/dict/CoolDict.items", serialize($items));

$arr['items'] = $items;
return $arr;

function randomstring($maxlen = 20, $minlen = 10, $withdigits = false)
{
    $al = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $allen = strlen($al) - ($withdigits ? 0 : 10 + 1);
    $len = rand($minlen, $maxlen);
    $s = '';
    for ($i=0; $i<$len; $i++)
    {
        $s .= $al[rand(0, $allen)];
    }
    return $s;
}
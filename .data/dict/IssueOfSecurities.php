<?php

$arr = array
(
    'display_type' => 1, // vertical split
    'fields' => array
    (
        'id' => array('title' => 'ID', 'type' => 'int', 'readonly' => true),
        'type_fi' => array('title' => 'Тип ФИ', 'type' => 'varchar', 'maxlength' => 30),
        'isin_code' => array('title' => 'ISIN-код', 'type' => 'varchar', 'maxlength' => 20),
        'db_repo' => array('title' => 'База REPO', 'type' => 'int', 'maxlength' => 11),
        'db_r15' => array('title' => 'База реинвестирования', 'type' => 'int', 'maxlength' => 20),
        'stavka' => array('title' => 'Ставка (симв.)', 'type' => 'int', 'maxlength' => 2),
        'stavka_slash_diskont' => array('title' => 'Ставка/Дисконт (цифр.)', 'type' => 'float'),
        'date_1' => array('title' => 'Дата эмиссии', 'type' => 'date'),
        'date_2' => array('title' => 'Дата отзыва', 'type' => 'date'),
        'date_3' => array('title' => 'Дата погашения', 'type' => 'date'),
        'periodichnost' => array('title' => 'Периодичность купона', 'type' => 'int', 'maxlength' => 1),
        'tip_kotiruemosti' => array('title' => 'Тип котируемости', 'type' => 'varchar', 'maxlength' => 20),
        'primeta' => array('title' => 'Примечание', 'type' => 'varchar', 'maxlength' => 256),
        'date_4' => array('title' => 'Дата нач. расчетов', 'type' => 'date'),
        'min_o' => array('title' => 'Мин. объем сделки', 'type' => 'int'),
        'min_sha' => array('title' => 'Мин. шаг сделки', 'type' => 'int'),
        'currency' => array('title' => 'Валюта', 'type' => 'dictchoice', 'dict' => 'Currency'),
        'osobo' => array('title' => 'Особое состояние', 'type' => 'varchar', 'maxlength' => 256),
    ),
    'fields_in_list' => array('id', 'type_fi', 'isin_code'),
    'list_sort' => array('field' => 'id', 'type' => 'asc',),
    'fieldsets' => array
    (
        array('title' => 'ФИ & ISIN', 'fields' => array('type_fi', 'isin_code')),
        array('title' => 'Базы', 'fields' => array('db_repo', 'db_r15')),
        array('title' => 'Три даты', 'fields' => array('date_1', 'date_2', 'date_3')),
    ),
    'items' => array
    (
    ),
);

$row = 1;
if (($handle = fopen(APP_DIR ."/.data/dict/IssueOfSecurities.csv", "r")) !== FALSE)
{
    while (($arr['items'][] = fgetcsv($handle, 300, ";")) !== FALSE)
    {
    }
    fclose($handle);
}

file_put_contents('asd.txt', serialize($arr['items']));

return $arr;
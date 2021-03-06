<?php

return array
(
    'display_type' => 3, // list only
    'fields' => array
    (
        'id' => array('title' => 'ID', 'type' => 'int', 'readonly' => true),
        'code' => array('title' => 'Код по ISO', 'type' => 'varchar', 'maxlength' => 3),
        'title' => array('title' => 'Локальное название', 'type' => 'varchar', 'maxlength' => 20),
    ),
    'fields_in_list' => array('id', 'code', 'title'),
    'list_sort' => array
    (
        'field' => 'id',
        'type' => 'asc',
    ),
    'fieldsets' => array
    (
        array('title' => 'По ISO', 'fields' => array('code', 'name')),
        array('title' => 'Локальное', 'fields' => array('title')),
    ),
    'items' => array
    (
        array(1, 'RUR', 'Рубль'),
        array(2, 'USD', 'USD', 'Доллар США'),
        array(3, 'EUR', 'Евро'),
    ),
);
<?php

return array
(
    'display_type' => 2, // split vertical
    'fields' => array
    (
        'id' => array('title' => 'ID', 'type' => 'int', 'readonly' => true),
        'code' => array('title' => 'Код по ISO', 'type' => 'varchar', 'maxlength' => 3),
        'title' => array('title' => 'Локальное название', 'type' => 'varchar', 'maxlength' => 20),
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
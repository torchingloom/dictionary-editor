<?php

return array
(
    'display_type' => 2, // vertical split
    'fields' => array
    (
        'id' => array('title' => 'ID', 'type' => 'int', 'readonly' => true),
        'code' => array('title' => 'Код по ISO', 'type' => 'varchar', 'maxlength' => 2),
        'name' => array('title' => 'Название по ISO', 'type' => 'varchar', 'maxlength' => 20),
        'title' => array('title' => 'Локальное название', 'type' => 'varchar', 'maxlength' => 20),
    ),
    'chosen' => array('value' => 'id', 'title' => 'title'),
    'fields_in_list' => array('id', 'code', 'name', 'title'),
    'list_sort' => array('field' => 'id', 'type' => 'asc',),
    'fieldsets' => array
    (
        array('title' => 'По ISO', 'fields' => array('code', 'name')),
        array('title' => 'Локальное', 'fields' => array('title')),
    ),
    'items' => array
    (
        array(0, 'AU', 'Austria', 'Австрия'),
        array(1, 'RF', 'Russia', 'Россия'),
        array(2, 'GB', 'UK', 'Великобритания'),
        array(4, 'EU', 'EU', 'Евросоюз'),
        array(5, 'JP', 'Japan', 'Япония'),
        array(7, 'GE', 'Germany', 'Германия'),
        array(8, 'IR', 'Ireland', 'Ирландия'),
        array(9, 'PO', 'Polska', 'Польша'),
        array(10, 'CH', 'China', 'Китай'),
        array(11, 'US', 'USA', 'США'),
        array(12, 'KO', 'Korea', 'Корея'),
        array(13, 'FI', 'Finland', 'Финляндия'),
        array(14, 'CA', 'Canada', 'Канада'),
        array(15, 'AS', 'Austalia', 'Австралия'),
        array(17, 'IT', 'Italy', 'Италия'),
        array(19, 'ES', 'Spain', 'Испания'),
        array(21, 'PR', 'Porugal', 'Португалия'),
        array(22, 'BE', 'Belgium', 'Бельгия'),
        array(25, 'ND', 'Holland', 'Голландия'),
    ),
);
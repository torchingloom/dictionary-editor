<?php

return array
(
    'display_type' => 3,
    'fields' => array
    (
        'id' => array('title' => 'ID', 'type' => 'int', 'readonly' => true),
        'name' => array('title' => 'Наименование', 'type' => 'varchar', 'maxlength' => 50),
        'name_en' => array('title' => 'Наименование (анг)', 'type' => 'varchar', 'maxlength' => 50),
        'country_code' => array('title' => 'Код страны', 'type' => 'varchar', 'maxlength' => 3),
        'country_name' => array('title' => 'Наименование страны', 'type' => 'varchar', 'maxlength' => 50),
    ),
    'chosen' => array('value' => 'id', 'title' => 'name'),
    'fields_in_list' => array('id', 'name', 'name_en', 'country_code', 'country_name'),
    'list_sort' => array('field' => 'id', 'type' => 'asc',),
    'fieldsets' => array
    (
        array('title' => 'Название', 'fields' => array('name', 'name_en')),
        array('title' => 'Страна', 'fields' => array('country_code', 'country_name')),
    ),
    'items' => array
    (
        array(1, 'Москва', 'Moscow', 'RF', 'Россия'),
        array(2, 'Лондон', 'London', 'GB', 'Великобритания'),
        array(3, 'Вашингтон', 'Washington', 'US', 'США'),
    ),
);
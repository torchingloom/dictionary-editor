<?php
header("Content-Type: application/json; charset=UTF-8");
?>
var __treeData__ = [
  {
    label: 'Избранное',
    children: [
      {
      	label: '<a href="#Country">Страны</a>'
    	}
    ]
  },
  {
    label: 'Общие справочники',
    children: [
      {
        label: '<a href="#Currency">Валюты</a>'
      },
      {
        label: '<a href="#CoolDict">Для теста</a>'
      },
      {
      	label: '<a href="#City">Города</a>',
       	children: [
       		{
       			label: 'На что ссылается',
       			children: [
       				{
       					label: '<a href="#Country">Страны</a>'
       				}
       			]
       		}
       	]
      },
      {
      	label: '<a href="#Country">Страны</a>',
       	children: [
       		{
       			label: 'Что ссылается',
       			children: [
       				{
       					label: '<a href="#City">Города</a>'
       				}
     				]
       		}
       	]
  	  }
    ]
  },
  {
    label: 'Ценные бумаги',
    children: [
      {
      	label: '<a href="#Country">Выпуски бумаг</a>',
       	children: [
       		{
       			label: 'На что ссылается',
       			children: [
       				{
       					label: '<a href="#Country">Типы выпусков</a>'
       				}
       			]
       		}
       	]
      },
      {
      	label: '<a href="#Country">Типы выпусков</a>',
	     	children: [
       		{
       			label: 'Что ссылается',
       			children: [
       				{
       					label: '<a href="#Country">Выпуски бумаг</a>'
       				}
       			]
       		}
       	]

      }
    ]
  }
];
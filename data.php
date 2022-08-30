<?php
// проект - категория, к которой можно отнести задачу
$categories = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

// задачи
$tasks = [
    [
        'title' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'category' => 'Работа',
        'isdone' => false,
    ],
    [
        'title' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'category' => 'Работа',
        'isdone' => false,
    ],
    [
        'title' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'category' => 'Учеба',
        'isdone' => true,
    ],
    [
        'title' => 'Встреча с другом',
        'date' => '22.12.2019',
        'category' => 'Входящие',
        'isdone' => true,
    ],
    [
        'title' => 'Купить корм для кота',
        'date' => null,
        'category' => 'Домашние дела',
        'isdone' => false,
    ],
    [
        'title' => 'Заказать пиццу',
        'date' => null,
        'category' => 'Домашние дела',
        'isdone' => false,
    ],
];

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

?>
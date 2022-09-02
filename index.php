<?php
// служебный файл
require('helpers.php');

// данные
require('data.php');


// разметка главной страницы
$page_content = include_template('main.php', [
    'categories' => $categories, // категории задач
    'tasks' => $tasks, // задачи
    'show_complete_tasks' => $show_complete_tasks, // показываются ли выполненные задачи
    'calculate_tasks' => $calculate_tasks, // ф-ция подсчета количества задач по категориям
    'check_date' => $check_date, // 
]);

// окончательная разметка
$layout_content = include_template('layout.php', [
    'content' => $page_content, // разметка главной страницы
    'title' => 'Дела в порядке', // заголовок страницы
]);

print($layout_content);

?>
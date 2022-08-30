<?php
// служебный файл
require('helpers.php');

// данные
require('data.php');


// функция для подсчета количества задач в категории
function calculate_tasks (array $tasks, string $category): int
{
    return count(array_filter($tasks, function ($task) use($category) {
        return $task['category'] === $category;
    }));
}

// разметка главной страницы
$page_content = include_template('main.php', [
    'categories' => $categories, // категории задач
    'tasks' => $tasks, // задачи
    'show_complete_tasks' => $show_complete_tasks, // показываются ли выполненные задачи
    'calculate_tasks' => $calculate_tasks, // ф-ция подсчета количества задач по категориям
]);

// окончательная разметка
$layout_content = include_template('layout.php', [
    'content' => $page_content, // разметка главной страницы
    'title' => 'Дела в порядке', // заголовок страницы
]);

print($layout_content);

?>
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

// функция проверяет, горят ли сроки по задаче (меньше одного дня на выполнение или нет)
function check_date (string $date_to_check): bool
{
    if ($date_to_check) { // проверка, есть ли дата
        $date_to_check = strtotime($date_to_check); // перевод даты из строки в формат timestamp
        $now = time(); // получение текущего времени
        $diff_in_secs = $date_to_check - $now; //разница между проверяемой датой и сегодняшним днем в секундах
        $diff_in_hours = floor($diff_in_secs / 3600); //разница между проверяемой датой и сегодняшним днем в часах

        return $diff_in_hours <= 24;
    }
    else { //если даты нет, то ф-ция возвращает false
        return false;
    }
}

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
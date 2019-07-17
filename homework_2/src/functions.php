<?php

function task1(array $strings, bool $concatenated = false)
{
    if ($concatenated) {
        return implode(' ', $strings);
    }

    foreach ($strings as $string) {
        echo "<p>$string</p>";
    }
}

function task2()
{
    $actions = ['+', '-', '/', '*'];
    $args = func_get_args();
    $action = array_shift($args);
    $numbers = [];
    $result = null;

    if (!is_string($action) && in_array($action, $actions)) {
        echo "Первый аргумент должен обозначать арифмтическое действие!";
        return false;
    }

    foreach ($args as $arg) {
        if (is_numeric($arg)) {
            $numbers[] = $arg;
        }
    }
    if (empty($numbers)) {
        echo 'Нет чисел для арифм.действий';
        return false;
    }

    foreach ($numbers as $key => $number) {
        if ($key == 0) {
            $result = $number;
            continue;
        }
        switch ($action) {
            case '+':
                $result += $number;
                break;
            case '-':
                $result -= $number;
                break;
            case '/':
                $result /= $number;
                break;
            case '*':
                $result *= $number;
                break;
            default:
                echo 'Неизвестный оператор';
                return false;
        }
    }
    echo "Реузультат: $result";
}

function task3($num1, $num2)
{
    if (!is_int($num1) || !is_int($num2)) {
        echo "Ошибка: один или оба аргумента не целое число!";
        return false;
    }

    echo '<table>';
    for ($i = 1; $i <= $num1; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $num2; $j++) {
            $numeric = $i * $j;
            echo "<td>$numeric</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

}

function task4()
{
    echo date('d.m.Y H:i');
    echo '<br>';
    echo strtotime('24.02.2016 00:00:00');
}

function task5()
{
    echo str_replace('К', '', 'Карл у Клары украл Кораллы');
    echo '<br>';
    echo str_replace('Две', 'Три', 'Две бутылки лимонада');
}

function task6()
{
    file_put_contents('test.txt', 'Hello again!');
    getFileContent('test.txt');
}

function getFileContent($fileName)
{
    echo file_get_contents($fileName);
}
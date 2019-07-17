<?php

function task1(array $strings, bool $concatenated = false)
{
    if ($concatenated) {
        return implode(' ', $strings);
    }

    foreach ($strings as $string) {
        echo "<p>$string</p>";
    }
    return true;
}

function task2()
{
    $actions = ['+', '-', '/', '*'];
    $args = func_get_args();
    $action = array_shift($args);
    $numbers = [];

    if (!is_string($action) || !in_array($action, $actions)) {
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

    $result = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        switch ($action) {
            case '+':
                $result += $numbers[$i];
                break;
            case '-':
                $result -= $numbers[$i];
                break;
            case '/':
                $result /= $numbers[$i];
                break;
            case '*':
                $result *= $numbers[$i];
                break;
            default:
                echo 'Неизвестный оператор';
                return false;
        }
    }
    echo "Реузультат: $result";
    return true;
}

function task3($num1, $num2)
{
    $num1 = (int) $num1;
    $num2 = (int) $num2;

    if ($num1 < 1 || $num2 < 1) {
        echo "Ошибка: числа должны быть больше 0!";
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
    return true;
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

function task6($fileName)
{
    file_put_contents($fileName, 'Hello again!');
    echo file_get_contents($fileName);
}

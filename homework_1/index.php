<?php

const BR = "<br>";

//Task 1
$name = "Вадим";
$age = 24;

echo "Меня зовут: $name" . BR;
echo "Мне $age года" . BR;
echo "\"!|/'\"\\";
echo BR . BR;

//Task 2
const PICTURES_ALL = 80;
const PICTURES_PEN = 23;
const PICTURES_PENCIL = 40;

$picturesPaints = PICTURES_ALL - PICTURES_PEN - PICTURES_PENCIL;
echo "Количество рисунков нарисованных красками: $picturesPaints";
echo BR . BR;

//Task 3
$age = rand(0, 100);

if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать' . BR;
} elseif ($age > 65) {
    echo 'Вам пора на пенсию' . BR;
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать' . BR;
} else {
    echo 'Неизвестный возраст' . BR;
}
echo BR;

//Task 4
$day = rand(1, 20);
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}
echo BR . BR;

//Task 5
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];
$toyota = [
    'model' => 'camry',
    'speed' => 140,
    'doors' => 6,
    'year' => '2012'
];
$opel = [
    'model' => 'astra',
    'speed' => 110,
    'doors' => 4,
    'year' => '2006'
];
$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

foreach ($cars as $name => $car) {
    echo 'CAR ' . $name . BR;
    echo implode(' ', $car);
    echo BR;
}
echo BR . BR;

//Task 6
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $numeric = $i * $j;
        if ($j % 2 == 0 && $i % 2 == 0) {
            echo "<td>($numeric)</td>";
        } elseif ($j % 2 != 0 && $i % 2 != 0) {
            echo "<td>[$numeric]</td>";
        } else {
            echo "<td>$numeric</td>";
        }
    }
    echo '</tr>';
}
echo '</table>';

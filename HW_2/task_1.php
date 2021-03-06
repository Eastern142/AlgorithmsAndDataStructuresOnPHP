<?php
/* Поиск элемента массива с известным индексом */

$array = [1, 2, 3, 4, 5]; /* Для примера возьмем массив */

$findNumber = $array[0]; /* Так как мы знаем конкретный индекс необходимого элемента массива, сложность алгоритма будет
равна O(1), потребуется одна операция вне зависимости от количества элементов в массиве */

/* Дублирование одномерного массива через foreach (В примере применяется тот же массив $array) */

$arrayDuplicate = [];
foreach ($array as $value) { /* O(N) */
    $arrayDuplicate[] = $value; /* O(1) */
    /* Не особо уверен в правильности данного подхода, реализовал первое пришедшее в голову решение, сложность алгоритма
будет равна O(N) * O(1) = O(1N) и так как множитель можно опустить получим сложность равную O(N) */
}

/* Рекурсивная функция нахождения факториала числа */

function factorial($x) {
    if ($x === 0)
        return 1;
    return $x * factorial($x-1);
}
echo factorial(5);
/* Сложность рекурсивных алгоритмов зависит не только от сложности внутренних циклов, но и от количества итераций рекурсии,
в итоге получим O(5N) без учета одноразовых и отбросив множитель получим сложность алгоитма равную O(N)*/
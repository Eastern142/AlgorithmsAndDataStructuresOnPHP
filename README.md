# AlgorithmsAndDataStructuresOnPHP
Homework for Algorithms And Data Structures On PHP

## Homework_1

1. Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.

2. Попробовать определить, на каком объеме данных применение итераторов становится выгоднее, чем использование чистого foreach.

3. *Выписав первые шесть простых чисел, получим 2, 3, 5, 7, 11 и 13. Очевидно, что 6-ое простое число - 13. Какое число является 10001-ым простым числом?

## Homework_2

0. Ознакомиться с предложенными дополнительными материалами.

1. Определить сложность следующих алгоритмов:
```
Поиск элемента массива с известным индексом

Дублирование одномерного массива через foreach

Рекурсивная функция нахождения факториала числа
```

2. Определить сложность следующих алгоритмов. Сколько произойдет итераций?
```
1)

$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i++) {
  for ($j = 1; $j < $n; $j *= 2) {
  $array[$i][$j]= true;
  }
}

2)

$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) {
  for ($j = $i; $j < $n; $j++) {
  $array[$i][$j]= true;
  }
}
```

3. *Простые делители числа 13195 - это 5, 7, 13 и 29. Каков самый большой делитель числа 600851475143, являющийся простым числом?

## Homework_3

1. Реализовать вывод меню на основе Clojure table.

2. Дан массив из n элементов, начиная с 1. Каждый следующий элемент равен (предыдущий + 1). Но в массиве гарантированно 1 число пропущено. Необходимо вывести на экран пропущенное число.
```
Примеры:
[1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16] => 11
[1, 2, 4, 5, 6] => 3
[] => 1
```

3. *Рассмотреть структуру данных Nested Sets. Реализовать ее хранение и вывод меню.

## Homework_4

1. Реализовать построение и обход дерева для математического выражения.

2. ** Реализовать решение уравнений и примеров из 1 задания.

3. Рассмотреть подход прямой и обратной польских нотаций. Чем они лучше деревьев в первой задаче? Нужны ли деревья в их реализации?

4. Требуется написать метод, принимающий на вход размеры двумерного массива и выводящий массив в виде инкременированной цепочки чисел, идущих по спирали.
```
Примеры:
2х3
1 2
6 3
5 4

3х1
1 2 3

4х4
01 02 03 04
12 13 14 05
11 16 15 06
10 09 08 07
```

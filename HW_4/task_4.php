<?php
$w = 3; $h = 3; // Размер матрицы
function s($w, $h, $x, $y) {
    return $y ? $w + s($h - 1, $w, $y - 1, $w - $x - 1) : $x;
}
for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        echo s($w, $h, $j, $i);
    }
    echo "<br>";
}
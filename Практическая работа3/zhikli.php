<h1>Практическая работа 3 циклы<h1>
<?php
echo "<h2>Задание1<h2>";
$sturtNumber = 2;
$multiplier = 3;
$quantity = 5;
$d = $sturtNumber;
for ($i = 0; $i < $quantity; $i++) {
    echo $d . " ";
    $d = $d * $multiplier; 
}
?>

<?php
echo "<h2>Задание2<h2>";
$lastNumber = 10;
$sum = 0;

for ($i =1; $i<= $lastNumber; $i++){
    $sum += $i;
}
echo "Сумма чисел от 1 до $lastNumber равна :$sum";
?>
<?php
echo "<h2>Задание3<h2>";
$lastNumber = 6;
$multiplicationResult = 1;
for ($i  = 1; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $multiplicationResult *= $i;
    }
}
echo "Произведение четных чисел от 1 до {$lastNumber} = {$multiplicationResult}";
?>
<?php
echo "<h2>Задание4<h2>";
$a = 5;
$b = 10;
$c = 0;
for ($i = 1; $i <= $a;  $i++) {
    $c += $b;
    $b = $b *1.1;
}
echo "Суммарный путь за $a дней: " . round($c, 2). "км";
?>
<?php
echo "<h2>Задание5<h2>";
$a = 60;
echo "Все возможные сочетания гусей и кроликов (всего {$a} лап):<bp>";
for ($b = 0; $b <= $a / 2; $b++) {
    $c = $a - ($b * 2);
    if ($c % 4 == 0) {
        $d = $c / 4;
        echo "Гусей: {$b}, Кроликов:; {$d}<br>";
    }
}
?>
<?php
$a = array('color'=> 'red',
           'taste'=>'sweet',
           'shape'=>'round',
           'name'=>'apple',
           4
        );
$a['color'] = 'red';
$a['taste'] = 'sweet';
$a['shape'] = 'round';
$a['name']  = 'apple';
$a[]        = 4;
?>
<?php
$b[] = 'a';
$b[] = 'b';
$b[] = 'c';
?>
<?php
$A=array(0=>array('red', 'green'),
1=>array('blue', 'yellow'),
2=>array('grey','black','white')
      );
print_r($A);
echo '<br><br>';
var_dump($A[0][1]);
?>
<?php
$a= array('color'=> 'red',
          'taste'=>'sweet',
          'shape'=>'round',
          'name'=> 'apple',
          4
);
$a['color']='red';
$a['taste']='sweet';
$a['shape']='round';
$a['name']='apple';
$a[]=4;
$A=array(0=>array('red', 'green'),
1=>array('blue', 'yellow'),
2=>array('grey','black','white')
);
print_r($A);
echo '<br><br>';
var_dump ($A[0][1]);
?>
<br><br>
<?php
$colors= array('красный','синий','зеленый','желтый');
foreach ($colors as $color){
  echo "Вам нравится $color?<br>";
}
?>
<br><br>
<?php
$data[] = array('volume'=> 67, 'edition'=> 2);
$data[] = array('volume'=> 86, 'edition'=> 1);
$data[] = array('volume'=> 85, 'edition'=> 6);
$data[] = array('volume'=> 98, 'edition'=> 2);
$data[] = array('volume'=> 86, 'edition'=> 6);
$data[] = array('volume'=> 67, 'edition'=> 7);
$volume = array_column($data, 'volume');
$edition = array_column($data, 'edition');
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);
foreach ($data as $value){
  echo '<p>';
  print_r($value);
  echo '</p>';
}
?>
<?php
echo "1.Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.". "<br>";
$n = rand(7,15);
$arr = array();
for ($i = 0; $i < $n; $i++) {
  if ($i % 2 == 0) {
    $arr[$i] = 0;
  } else {
    $arr[$i] = 1;
  }
}
print_r($arr) . "<br>";
?>
<br><br>
<?php
echo "2.Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера. ". "<br>";
$n = rand(8,15); 
$arr = array();
for ($i = 0; $i < $n; $i++) {
    $arr[$i] = $i * $i;
}
print_r($arr);
?>
<br><br>
<?php
echo "3.Найдите сумму и произведение элементов массива. Реализовать двумя способами: с помощью стандартных функций и без.". "<br>";
$arr = [1, 2, 3, 4, 5];
$sum = array_sum($arr);
$product = array_product($arr);
"<br>";
echo "С помощью стандартных функций:". "<br>";

echo "Сумма элементов массива: " . $sum . "\n". "<br>";
echo "Произведение элементов массива: " . $product . "\n". "<br>";
echo "Без помощи стандартных функций:"."<br>";
$arr = [1, 2, 3, 4, 5];
$sum = 0;
$product = 1;
foreach ($arr as $value) {
  $sum += $value;
  $product *=$value;
}
echo "Сумма элементов массива:". $sum . "\n". "<br>";
echo "Произведение элементов массива:". $product. "\n". "<br>";
?>
<br><br>
<?php
echo "4.Определите, есть ли в массиве повторяющиеся элементы.". "<br>";
function hasDuplicates($array){
  return count ($array)!==
  count(array_unique($array));
}
$a=array(1, 2, 3, 4, 5, 6, 7);
$f=1234567;
echo "элементы массива:$f"."<br>";
if (hasDuplicates($a)){
  echo "В массиве есть повторяющиеся элементы";
} else {
  echo "В массиве нет повторяющихся элементов"."<br>";
}
?>
<br><br>
<?php
echo "5.Поменять местами наибольший и наименьший элементы массива.". "<br>";
$array =[1,2,3,4,5];
$min = min($array);
$max = max($array);
$minIndex = array_search($min, $array);
$maxIndex = array_search($max, $array);
$array[$minIndex] = $max;
$array[$maxIndex] = $min; 
print_r($array)."<br>";
?>
<br><br>

<?php
echo "6.Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.". "<br>";
$array = [3, 1, 4, 2, 5];
print "Массив с помощью стандартной функции sort : ";
sort($array);
print_r($array);
?>
<?php
$array = [3, 1, 4, 2, 5];
$length = count($array);
print "Массив  без помощи стандартной функции:";
for ($i = 0; $i < $length - 1; $i++) {
for ($j = 0; $j < $length - $i - 1; $j++) {
if ($array[$j] > $array[$j + 1]) {
$temp = $array[$j];
$array[$j] = $array[$j + 1];
$array[$j + 1] = $temp;
        }
    }
}
print_r($array);
?>
<br><br>
<?php
echo "7.Определите, можно ли вычеркнуть из данного массива одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.". "<br>";
$array[] = 1;
$array[] = 2;
$array[] = 3;
$array[] = 0;
echo "Исходный массив: <br><br>";
for ($i = 0; $i < count($array); $i++){
    echo "array[" . $i . "] = " . $array[$i] . "<br>";
}
echo "<br><br>";
for ($i = 0; $i < count($array); $i++){
    $c = $array[$i];
    unset($array[$i]);  
    $array = array_values($array);
    $k = 0;
    $l = 0;
    for ($j = 0; $j < count($array) - 1 ; $j++){
    if ($array[$j] <= $array[$j + 1]){
        $k++;
    }
    }
    if ($k == count($array) - 1){
        $l = 1;
    }
    $array[$i] = $c;
}
if ($l == 0){
    echo "Из данного массива нельзя вычеркнуть одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.";
} else {
    echo "Из данного массива можно вычеркнуть одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.";
}
?>
<br><br>

<?php
echo "8.Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5.". "<br>";
$array = [1, 2, 2, 3, 4, 4, 5];

$uniqueArray = array_unique($array);

print_r($uniqueArray);
?>
<br><br>

<?php
echo "9.Дан массив из n элементов. а) Переставьте его элементы случайным образом. б) Переставьте его элементы случайным образом так, чтобы каждый элемент оказался на новом месте.". "<br>";
echo "Массив где его элементы в случайном порядке начиная с 1 2 3 4 5:";
$array = [1, 2, 3, 4, 5];
shuffle($array);
print_r($array);
echo "Массив где будет случайная замена начиная с 1 2 3 4 5:"."<br>";
$array = [1, 2, 3, 4, 5];

$length = count($array);

for ($i = $length - 1; $i > 0; $i--) {
    $j = rand(0, $i);
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

print_r($array);
?>
<br><br>

<?php
echo "10.Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов единый упорядоченный по возрастанию массив.". "<br>";  
$arr1 = array(1,5);
$arr2 = array(2,4);
$res_arr = array_merge($arr1, $arr2);
asort($res_arr);
print_r($res_arr);
?>
<br><br>

<?php
echo "11.Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.". "<br>";
$array = [1, -1, 2, 3, -3];
$array1 = [];
foreach ($array as $v) {
    $array1[] = $v;
    if ($v < 0) {
        $array1[] = 0;
    }
}
print_r($array1)
?>
<br><br>
<?php
echo "12.Выведите данное число, которое не превосходит 1000000, прописью (например, 2134 - две тысячи сто тридцать четыре). Массив использовать необязательно.". "<br>";
function convertToWords($number) {
    $digits = array('ноль', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять');
    $teens = array('десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать');
    $tens = array('', '', 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто');
    $hundreds = array('', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот');
    $thousands = array('', 'тысяч', 'тысячи', 'тысяча');
    if ($number == 0) {
        return $digits[0];
    }
    $words = '';
    $groups = array_reverse(str_split(str_pad($number, ceil(strlen($number) / 3) * 3, '0', STR_PAD_LEFT), 3));
    foreach ($groups as $key => $group) {
        $groupWords = '';
        $hundred = floor($group / 100);
        $ten = floor(($group % 100) / 10);
        $one = $group % 10;        
        if ($hundred > 0) {
            $groupWords .= $hundreds[$hundred] . ' ';
        }        
        if ($ten > 0) {
            if ($ten == 1 && $one > 0) {
                $groupWords .= $teens[$one] . ' ';
            } else {
                $groupWords .= $tens[$ten] . ' ';
            }
        }        
        if ($one > 0 && $ten != 1) {
            $groupWords .= $digits[$one] . ' ';
        }    
        $groupWords = rtrim($groupWords);       
        if ($group != 0) {
            $groupWords .= ' ' . $thousands[min($key, 3)];
        }        
        $words = $groupWords . ' ' . $words;
    }   
    return rtrim($words);
}
$number =rand(1,1000000);
$result = convertToWords($number);
echo $result;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//В переменной month лежит какое-то число из интервала от 1 до 12.
//Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).

$month = rand( 1, 12 );

switch ($month) {
    case 1:
        echo "Зима<br>";
        break;
    case 2:
        echo "Зима<br>";
        break;
    case 3:
        echo "Весна<br>";
        break;
    case 4:
        echo "Весна<br>";
        break;
    case 5:
        echo "Весна<br>";
        break;
    case 6:
        echo "Лето<br>";
        break;
    case 7:
        echo "Лето<br>";
        break;
    case 8:
        echo "Лето<br>";
        break;
    case 9:
        echo "Осень<br>";
        break;
    case 10:
        echo "Осень<br>";
        break;
    case 11:
        echo "Осень<br>";
        break;
    case 12:
        echo "Зима<br>";
        break;
}

//Дана строка, состоящая из символов, например, 'abcde'.
//Проверьте, что первым символом этой строки является буква 'a'.
//Если это так - выведите 'да', в противном случае выведите 'нет'.
echo "<br>";
$stroka = 'abcde';
if( $stroka[ 0 ] == 'a' ) {
    echo 'да';
} else {
    echo 'нет';
}

//Дана строка с цифрами, например, '12345'.
// Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
// Если это так - выведите 'да', в противном случае выведите 'нет'.
echo "<br>";
$stroka = '12345';
echo ($stroka[ 0 ] == 1 || $stroka[ 0 ] == 2 || $stroka[ 0 ] == 3) ? 'да' : 'нет';

//Если переменная test равна true, то выведите 'Верно', иначе выведите 'Неверно'.
// Проверьте работу скрипта при test, равном true, false.
// Напишите два варианта скрипта - тернарка и if else.
echo "<br>" . "напишу тернаркой";
$test = true;
echo "<br>";
echo ($test === true) ? 'true' : 'false';

//Дано Два массива рус и англ ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']
//Если переменная lang = ru вывести массив на русском языке,
// а если en то вывести на английском языке. Сделат через if else и через тернарку.
echo "<br>";
$lang = 'ru';
$massive_rus = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$massive_eng = ['mon', 'friday', 'sunday'];
if( $lang == 'ru' ) {
    print_r( $massive_rus );
} else {
    print_r( $massive_eng );
}

echo "<br>";
//В переменной cloсk лежит число от 0 до 59 – это минуты.
// Определите в какую четверть часа попадает это число
// (в первую, вторую, третью или четвертую). тернарка и if else.

$clock = rand( 0, 59 );
echo $clock;
echo "<br>";
if( $clock <= 15 ) {
    echo 'первая четверть';
} elseif( $clock <= 30 && $clock >= 15 ) {
    echo 'вторая четверть';
} elseif( $clock <= 45 && $clock >= 30 ) {
    echo 'третья четверть';
} elseif( $clock <= 59 && $clock >= 30 ) {
    echo 'четвертая четверть';
}
echo "<br>";

//1) Написать программу, которая выводит простые числа, т.е. делящиеся без
//остатка только на себя и на 1.


//2) Сгенерируйте 100 раз новое число и выведите на экран количество четных чисел из этих 100.
$result = 0;

for ( $i = 0; $i <= 100; $i++ ) {
    $chisla = rand( 0, 100 );
    if( $chisla % 2 == 0 ) {
        $result++;
    }
}

echo $result;

echo "<br>";

//3) Сгенерируйте 100 раз число от 1 до 5 и выведите на экран сколько раз
// сгенерировались эти числа (1, 2, 3, 4 и 5).


$massive_chisel = [];

for ( $i = 0; $i <= 100; $i++ ) {
    $chislo = rand( 1, 5 );
    switch ($chislo) {
        case 1:
            $massive_chisel[ 1 ]++;
            break;
        case 2:
            $massive_chisel[ 2 ]++;
            break;
        case 3:
            $massive_chisel[ 3 ]++;
            break;
        case 4:
            $massive_chisel[ 4 ]++;
            break;
        case 5:
            $massive_chisel[ 5 ]++;
            break;
    }
}
echo "число 1 было введено $massive_chisel[1] количество раз" . "<br>";
echo "число 2 было введено $massive_chisel[2] количество раз" . "<br>";
echo "число 3 было введено $massive_chisel[3] количество раз" . "<br>";
echo "число 4 было введено $massive_chisel[4] количество раз" . "<br>";
echo "число 5 было введено $massive_chisel[5] количество раз" . "<br>";

//4) Используя условия и циклы сделать таблицу в 5 колонок и 3 строки (5x3),
// отметить разными цветами часть ячеек.

?>

<table>
    <?php for ( $row = 1; $row <= 3; $row++ ): ?>
        <tr>

            <?php for ( $col = 1; $col <= 5; $col++ ): ?>
                <?php $randColor = rand( 10, 99 ) . rand( 10, 99 ) . rand( 10, 99 );
                ?>
                <td style="background-color: <?php echo '#' . $randColor ?>">Колонка</td>

            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<?php

//1. Дан массив
//['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
//Развернуть этот массив в обратном направлении

$new_massive = [];
$massive = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];
for ( end( $massive ); ($key = key( $massive )) !== null; prev( $massive ) ) {
    print($key . " : " . current( $massive ) . "\n");
    array_push( $new_massive, current( $massive ) );
}

var_dump( $new_massive );
echo "<br>";
echo "<br>";
//2. Дан массив
//[44, 12, 11, 7, 1, 99, 43, 5, 69]
//Развернуть этот массив в обратном направлении

$new_massive = [];
$massive = [44, 12, 11, 7, 1, 99, 43, 5, 69];
for ( end( $massive ); ($key = key( $massive )) !== null; prev( $massive ) ) {
    print($key . " : " . current( $massive ) . "\n");
    array_push( $new_massive, current( $massive ) );
}

var_dump( $new_massive );

echo "<br>";
//3. Дана строка
//let str = 'Hi I am ALex'
//развенуть строку в обратном направлении.

$str = 'Hi I am ALex';
echo strrev( $str );

echo "<br>";

//4. Дана строка. готовую функцию toUpperCase() or tolowercase()
//let str = 'Hi I am ALex'
//сделать ее с с маленьких букв

$str = 'Hi I am ALex';

$new_str_explode = explode(" ", $str);

foreach ($new_str_explode as $key => $item){
    $new_str_explode[$key] = strtolower($item);
}

var_dump($new_str_explode);
echo "<br>";


//5. Дана строка
//let str = 'Hi I am ALex'
//сделать все буквы большие

$EnglishBigButtonMassive = array(
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
    'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
);

$EnglishSmallButtonMassive = array(
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
    's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
);

echo "<br>";

$result = preg_replace("/\s+/", "", $str);

$str_arr = array();

for ($i=0;$i<=strlen($result)-1;$i++) {
    array_push($str_arr, $result[$i]);
}


foreach ($str_arr as $key => $item) {
    for ($i = 0; $i <= count($EnglishSmallButtonMassive); $i++) {
        if($EnglishSmallButtonMassive[$i] == $item) {
            $str_arr[$key] = $EnglishBigButtonMassive[$i];
        }
    }
}
echo "<pre>";
var_dump($str_arr);
echo "</pre>";
echo "<br>";

//7. Дан массив
//['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
//сделать все буквы с маленькой

$massive = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

$massive = implode( ", ", $massive);
var_dump($massive);
$result = preg_replace("/\s+/", "", $massive);
$result = preg_replace("/,/", "", $result);

$str_arr = array();

for ($i=0;$i<=strlen($result)-1;$i++) {
    array_push($str_arr, $result[$i]);
}


foreach ($str_arr as $key => $item) {
    for ($i = 0; $i <= count($EnglishBigButtonMassive); $i++) {
        if($EnglishBigButtonMassive[$i] == $item) {
            $str_arr[$key] = $EnglishSmallButtonMassive[$i];
        }
    }
}
echo "<pre>";
var_dump($str_arr);
echo "</pre>";


echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
//
//8. Дан массив
//['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
//сделать все буквы с большой

$massive = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

$new_massive_big_button = [];

foreach ($massive as $key => $value) {

    for ($v = 0; $v <= strlen($value); $v++) {

        for ($i = 0; $i <= count($EnglishSmallButtonMassive); $i++) {
            if($EnglishSmallButtonMassive[$i] == $value[$v]) {
                $new_massive_big_button[$value] .= $EnglishBigButtonMassive[$i];
            }
            else if($EnglishBigButtonMassive[$i] == $value[$v]) {
                $new_massive_big_button[$value] .= $value[$v];
            }
        }

    }
}

echo "<pre>";
var_dump($new_massive_big_button);
echo "</pre>";

//9. Дано число
//let num = 1234678
//развернуть ее в обратном направлении
//
//10. Дан массив
//[44, 12, 11, 7, 1, 99, 43, 5, 69]
//отсортируй его в порядке убывания

echo "<br>";

?>


</body>
</html>


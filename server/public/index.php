<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Модуль</title>
</head>
<body>
<?php

//Создайте функцию, которая принимает слово на английском языке и проверяет,
// во множественном ли числе находится слово. Проверяйте самый простой вариант.

function isToManyWords($word){
    $result = substr($word, -1);
    $predposledniySymbol = substr($word, -2);
    if($result == 's' || $predposledniySymbol.$result == 'es' || $predposledniySymbol.$result == 'ys') {
        return 'Это множественное число слова';
    }
    else {
        return 'false - это единственное число';
    }
}

echo isToManyWords('bytes');
echo "<br>";
echo "<br>";
echo "<br>";
// Создайте функцию, которая трансформирует массив слов в массив длин этих слов.
//Примеры:
//[5,5] == solution(["hello","world"])
//[4,4,4,7] == solution(["some","test","data","strings"])
//[7] == solution(["clojure"])

function transformation(...$args){

    $massivSlov = [
        '1' => ['a', 's', 'c', 'b', 'c'],
        '2' => ['ya', 'ba', 'ma', 'va', 'se'],
        '3' => ['one', 'two', 'war', 'boy', 'sec'],
        '4' => ['dock', 'bash', 'many', 'body', 'alex'],
        '5' => ['vasya', 'petya', 'kolya', 'zomby', 'costa'],
        '6' => ['dddddd', 'aaaaaa', 'shestl', 'gorila', 'bimboo'],
        '7' => ['seven77', 'eight88', 'nine333', 'horosho', 'apphone'],
        '8' => ['1234567s', 'kolua888', 'nadoelou', '888888ss', 'symphony'],
        '9' => ['999999999', 'brooklyn9', 'something', 'finally99', 'nakonecto'],
    ];

    $result = [];
    $count = count($args);
    for ($i = 0; $i < $count; $i++) {
        $findElement = $args[$i];

        if(array_key_exists($args[$i], $massivSlov)){
            $randElem = array_rand($massivSlov[$findElement]);
            $result[] = $massivSlov[$findElement][$randElem];
            /*array_push($result, $massivSlov[$findElement][$randElem]);*/
            /*чем отличается array_push от присваивания ???*/
        } else {
            $result[] = 'вашего элемента '. $findElement . ' нет в искомом массиве';
        }
    }
    return $result;
}
echo "<pre>";
print_r(transformation(5, 3, 7, 32));
echo "</pre>";


echo "<br>";
echo "<br>";
echo "<br>";

/*
 * Фермер просит вас посчитать сколько ног у всех его животных. Фермер разводит три вида:
 * курицы = 2 ноги коровы = 4 ноги свиньи = 4 ноги Фермер посчитал своих животных и
 * говорит вам, сколько их каждого вида. Вы должны написать функцию, которая возвращает
 * общее число ног всех животных.
Примеры:
36  == solution(2, 3, 5)
22  == solution(1, 2, 3)
50  == solution(5, 2, 8)
 */

function calcSumLegs(int $chicken, int $cows, int $pigs) {
    $chicken = $chicken * 2;
    $cows = $cows * 4;
    $pigs = $pigs * 4;

    $result = $chicken + $cows + $pigs;
    print_r($result);
}

calcSumLegs(1, 4, 4);

echo "<br>";
echo "<br>";
echo "<br>";

//Создайте функцию которая принимает целое число и возвращает строку с названием фигуры,
// состоящий из переданного количество сторон.

function findFigure(string $stroka) {
    switch ($stroka){
        case 'circle':
            echo "это circle - фигура 1";
            break;
        case 'semi-circle':
            echo "это semi-circle - фигура 2";
            break;
        case 'triangle':
            echo "это triangle - фигура 3";
            break;
        case 'square':
            echo "это square - фигура 4";
            break;
        case 'pentagon':
            echo "это pentagon - фигура 5";
            break;
        case 'hexagon':
            echo "это hexagon - фигура 6";
            break;
        case 'heptagon':
            echo "это heptagon - фигура 7";
            break;
        case 'octagon':
            echo "это octagon - фигура 8";
            break;
        case 'nonagon':
            echo "это nonagon - фигура 9";
            break;
        case 'decagon':
            echo "это decagon - фигура 10";
            break;
        default:
            echo "у нас в базе нет такой фигуры";
    }
}

findFigure('semi-circle');

//"circle"  == solution(1)
//"semi-circle"  == solution(2)
//"triangle"  == solution(3)
//"square"  == solution(4)
//"pentagon"  == solution(5)
//"hexagon"  == solution(6)
//"heptagon"  == solution(7)
//"octagon"  == solution(8)
//"nonagon"  == solution(9)
//"decagon"  == solution(10)

echo "<br>";
echo "<br>";
echo "<br>";

//Рассчитайте финальную оценку студента по пяти предметам.
// Если средняя оценка больше 90, то итоговая A.
// Если средняя оценка больше 80, то итоговая B. Если средняя оценка больше 70,
// то итоговая оценка C. Если средняя оценка больше 60, то итоговая оценка D.
// В остальных случаях итоговая оценка F.
//Примеры:
//"Grade: A"  == solution([90,91,99,93,100])
//"Grade: B"  == solution([92,77,85,84,84])
//"Grade: C"  == solution([70,72,78,72,70])
//"Grade: D"  == solution([60,61,62,63,70])
//"Grade: F"  == solution([50,42,20,31,0])
//"Grade: F"  == solution([10,9,2,3,5])
//

function calcGraduation(...$args){
    $summaForStudent = 0;
    $count = count($args);
    foreach ($args as $oneItem){
        $summaForStudent += $oneItem;
    }
    var_dump($summaForStudent);
    $sredneeZnachenie = $summaForStudent / $count;
    var_dump($sredneeZnachenie);
    if($sredneeZnachenie >= 90){
        echo "Grade A";
    } elseif($sredneeZnachenie >= 80 && $sredneeZnachenie < 90){
        echo "Grade B";
    } elseif($sredneeZnachenie >= 70 && $sredneeZnachenie < 80){
        echo "Grade C";
    } elseif($sredneeZnachenie >= 60 && $sredneeZnachenie < 70){
        echo "Grade D";
    } else {
        echo "Grade F";
    }
}

calcGraduation(78,80,80,80,80);

echo "<br>";
echo "<br>";
echo "<br>";

//Дан массив строк, создайте функцию, которая создает новый массив,
// содержащий строки, длины которых соответствуют наидлиннейшей строке.
//Примеры:
//["programms"]  == solution(["in","Soviet","Russia","frontend","programms","you"])
//["clojure","greater"]  == solution(["using","clojure","makes","your","life","greater"])
//["a","b","c","d"]  == solution(["a","b","c","d"])

//
$array = ['коля', 'двенадцать111', 'двенадцать123', 'тест', 'petya'];
function findTooLengthElements($array){
    $max_line = '';
    $newArray = [];
    foreach ($array as $key => $value) {
        if(iconv_strlen($max_line, 'utf-8') <= iconv_strlen($value, 'utf-8')) {
            $max_line = $value;
            $newArray[] = $max_line;
        }
        foreach ($newArray as $item){
            echo '<pre>';
            var_dump($newArray);
            echo '</pre>';
            if(iconv_strlen($item) < strlen($value)){
                echo 'huy';
            } else {
                unset($item);
            }
        }
    }
    $len = array_map('mb_strlen', $newArray);
    $biggestZnacheniya = array_search(max($len), $len);
    echo "<pre>";
    var_dump($max_line, $newArray, $len, $biggestZnacheniya);
    echo "</pre>";
}
findTooLengthElements($array);

// не решил задачу своими силами

echo "<br>";
echo "<br>";
echo "<br>";

/// Найдите второе наибольшее число в массиве.
///
///
///
$massive = [5, 4, 5];

$iskomoeZnachenie = $massive[0];
$bigZnach = $massive[0];
$smallZnach = $massive[0];

$count = count($massive);

for ($i = 0; $i <$count-1; $i++) {
    if($massive[$i] <= $smallZnach){
        $smallZnach = $massive[$i];
        echo "<pre>";
        var_dump($smallZnach, $massive[$i]);
        echo "</pre>";

    }
    elseif($massive[$i] >= $bigZnach){
        $bigZnach = $massive[$i];
        $iskomoeZnachenie = $massive[$i];
    } elseif($massive[$i] <= $bigZnach && $massive[$i] >= $smallZnach) {
        $iskomoeZnachenie = $massive[$i];
    }
}
var_dump($iskomoeZnachenie, $smallZnach, $bigZnach);

echo "<br>";
echo "<br>";
echo "<br>";
?>

<?

?>


</body>
</html>
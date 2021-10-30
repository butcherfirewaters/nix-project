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

$massivSlov = [
        '1' => ['1', '2', 'a', 'b', 'c'],
        '2' => ['ya', 'ba', 'ma', 'va', 'se'],
        '3' => ['one', 'two', 'war', 'boy', 'sec'],
        '4' => ['dock', 'bash', 'many', 'body', 'alex'],
        '5' => ['vasya', 'petya', 'kolya', 'zomby', 'costa'],
        '6' => ['dddddd', 'aaaaaa', 'shestl', 'gorila', 'bimboo'],
        '7' => ['seven77', 'eight88', 'nine333', 'horosho', 'apphone'],
        '8' => ['1234567s', 'kolua888', 'nadoelou', '888888ss', 'symphony'],
        '9' => ['999999999', 'brooklyn9', 'something', 'finally99', 'nakonecto'],
];

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
        echo $findElement;
        if(array_key_exists($args[$i], $massivSlov)){
            $randElem = array_rand($massivSlov[$findElement]);
            $result[] = $massivSlov[$findElement][$randElem];
            array_push($result, $massivSlov[$findElement][$randElem]); /*чем отличается array_push от присваивания*/
            echo "<pre>";
            var_dump(array_rand($massivSlov[$findElement]));
            echo "</pre>";
        } else {
            $result[] = 'вашего элемента '. $findElement . ' нет в искомом массиве';
        }
    }
    print_r($result);
}

transformation(1, 2, 7, 32);

?>



</body>
</html>
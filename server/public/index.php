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


function dd($arr)
{
    echo "<pre>";
    print_r( $arr );
    echo "</pre>";
}


//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand).
// Далее, вычислить произведение тех элементов, которые больше нуля и у которых четные индексы.
// После вывести на экран элементы, которые больше нуля и у которых нечетный индекс.

$array = [];

for ($i = 1; $i <=100; $i++) {
    $array[$i] .= rand(0, 100);
}
echo "<pre>";
//var_dump($array);
echo "</pre>";


function findChetNeChet($array) {
    static $arrayForChutnie = [];
    static $arrayForNeChutnie = [];
    foreach ($array as $key => $item) {
        if($item > 0 && $item % 2 == 0) {
            array_push($arrayForChutnie, $item);

        }

        else {
            array_push($arrayForNeChutnie, $item);
        }
    }

    echo "<pre>";
    var_dump($arrayForChutnie);
    echo "</pre>";

    echo "<pre>";
    var_dump($arrayForNeChutnie);
    echo "</pre>";

}

findChetNeChet($array);





//Даны два числа. Найти их сумму и произведение. Даны два числа. Найдите сумму их квадратов.



function kolya($pervoe, $vtoroe, $operator) {
    if($operator == 'summa') {
        $end = ($pervoe + $vtoroe) + ($pervoe * $vtoroe);
    }
    else if($operator == "kvadrat") {
        $end = ($pervoe * $pervoe) + ($vtoroe * $vtoroe);
    }
    return $end;
}

$otvet = kolya(2, 3, 'kvadrat');
echo "<br>";
echo "<br>";
$otvet = kolya(2, 3, 'summa');
echo $otvet;

//Даны три числа. Найдите их среднее арифметическое.
$num1 = rand(1, 50);
$num2 = rand(1, 50);
$num3 = rand(1, 50);

function SredneeZnachenie($num1, $num2, $num3)
{
    return ($num1 + $num2 + $num3) / 3;
}
echo 'Average = ' . SredneeZnachenie($num1, $num2, $num3);
echo "<br>";

//Дано число. Увеличьте его на 30%, на 120%.
$num = rand(1, 50);

function schititProcent($num){
    return $num + $num * 0.3;
}

function schititProcent2($num){
    return $num + $num * 1.2;
}
echo schititProcent($num) . "</br>";
echo schititProcent2($num) . "</br>";
echo "<hr>";





//Найти минимальное и максимальное среди 3 чисел
$num1 = rand(1, 50);
$num2 = rand(1, 50);
$num3 = rand(1, 50);
echo $num1 . ' ' . $num2 . ' ' . $num3 . "</br>";
function vichislitMin($num1, $num2, $num3)
{
    $arr = [$num1, $num2, $num3];
    $min = $arr[0];
    for ($i = 0; $i <= 2; $i++) {
        if ($arr[$i] <= $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}
echo vichislitMin($num1, $num2, $num3);
echo "<br>";

//Найти площадь
$shirina =  rand(1, 100);
$visota =  rand(1, 100);

function vichislitPloshad($len, $wid) {
    return $len * $wid;
}
echo vichislitPloshad($shirina, $visota) . "</br>";
echo "<hr>";

//Теорема Пифагора
$len1 =  rand(1, 50);
$len2 =  rand(1, 50);
echo $len1 . ' ' . $len2 . "</br>";

function piphagor($len1, $len2) {
    return sqrt(pow($len1, 2) + pow($len2, 2));
}
echo piphagor($len1, $len2) . "</br>";


//Найти периметр
$len1 = rand(1, 50);
$len2 = rand(1, 50);
$len3 = rand(1, 50);

function calcPerimetr($len1, $len2, $len3) {
    return $len1 + $len2 + $len3;
}
echo calcPerimetr($len1, $len2, $len3) . "</br>";




//Найти дискриминант

//Создать только четные числа до 100

function chetniy() {
    $array = [];
    for ($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0) {
            array_push($array, $i);
        }
    }
    var_dump($array);
}
echo "<pre>";
chetniy();
echo "</pre>";

//Создать не четные числа до 100

function neChetniy() {
    $array = [];
    for ($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0) {
            continue;
        }
        array_push($array, $i);
    }
    var_dump($array);
}
echo "<pre>";
neChetniy();
echo "</pre>";

//Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия),
// вводит количество дней для отдыха и указывает, есть ли у него скидка (чекбокс).
// Вывести стоимость отдыха, которая вычисляется как произведение   количества дней на 400.
// Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия.
// И далее это число уменьшается на 5%, если указана скидка.
?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <select name="country" size="1" required>
        <option value='Турция'>Турция</option>
        <option value='Египет'>Египет</option>
        <option value='Италия'>Италия</option>
    </select>
    <input type="number" name="days" placeholder="Введите кол-во дней" required>
    <br>
    <input type="checkbox" name="discount">
    Eсли у вас есть скидка
    <br>

    <button type="submit">Send</button>

</form>

<?php if(isset($_POST['country'])){
    var_dump($_POST['country']);
    $country = $_POST['country'];
    $days = $_POST['days'];
    $discount = $_POST['discount'];
    var_dump($_POST['discount']);

    function payVacation($country, $days, $discount = null) {
        $stoimost = $days * 400;

        if($country == 'Египет') {
            $stoimost = $stoimost + $stoimost*0.10;
        } elseif($country == 'Италия') {
            $stoimost = $stoimost + $stoimost*0.12;
        }

        if($discount == 'on') {
            $discount = $stoimost * (5 / 100);
            $stoimost = $stoimost - $discount;
        }


        return $stoimost;
    }

    echo payVacation($country, $days, $discount);

}?>

<?php
echo "<br>";
//Пользователь вводит свой имя, пароль, email.
// Если вся информация указана, то показать эти данные после фразы 'Регистрация прошла успешно',
// иначе сообщить какое из полей оказалось не заполненным.
?>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="name" placeholder="Введите имя">
    <br>
    <input type="password" name="password" placeholder="Введите пароль" >
    <br>
    <input type="email" name="email" placeholder="Введите email">
    <br>
    <button type="submit">Send</button>
</form>

<?php

    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    function showMessageAfterRegisterForm($name, $password, $email) {
        $errors = [];
        $otvet = '';
        if(!$name) {
            $errors['name'] .= 'Поле Name нужно заполнить';
        }
        if(!$password) {
            $errors['password'] .= 'Поле Password нужно заполнить';
        }
        if(!$email) {
            $errors['email'] .= 'Поле Email нужно заполнить';
        }

        if(empty($errors)){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $otvet = 'Регистрация прошла успешно ' . "name = $name " .
                "password = $password " . "email = $email " . "</br>";
        } else {
            foreach ($errors as $error) {
                $otvet .= $error . "<br>";
            }
        }
        var_dump($otvet);

        return $otvet;

    }

    showMessageAfterRegisterForm($name, $password, $email);
?>


<?php

//Выведите на экран n раз фразу "Silence is golden". Число n вводит пользователь на форме. Если n некорректно, вывести фразу "Bad n".
//Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
//Определите, есть ли в массиве повторяющиеся элементы.


?>
</body>
</html>


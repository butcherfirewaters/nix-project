<?php

//1.Дано два числа 42 и 55 определите при помощи тернарной операции какое число больше.
$first_chislo = 42;
$second_chislo = 56;
echo ($first_chislo > $second_chislo) ? '$first_chislo больше чем $second_chislo' : '$first_chislo больше чем $second_chislo';
echo "<hr>";

//2. Используй вместо статических чисел функцию rand() для задачи (1)
$a = rand( 5, 15 );
$b = rand( 5, 15 );
echo ($a < $b) ? "число $b больше $a" : "число $b меньше  $a"; // не верно работает с одинаковыми числами
echo "<hr>";

//3. Сокращение Имени и Отчества. Возьмите за основу свою ФИО. У вас будет 3 переменные. (Ф.И.О.)
// Ваша программа должна сократить Имя и Отчество. вот пример:
// (Иванов Иван Иванович) => (Иванов И. И.)
$surname = "Слепцов";
$name = "Алексей";
$father_name = "Сергеевич";

echo $surname;
echo(mb_substr( $name, 0, 1 ) . ".");
echo(mb_substr( $father_name, 0, 1 ) . ".");
echo "<hr>";

// 4. Вам нужно разработать программу, которая считала бы количество вхождений какой-нибудь выбранной вами цифры в выбранном вами числе.
//  Например: цифра 7 в числе 123456789 встречается 1 раза (ограничите себя функцией rand(1, 99999) – это ваше случайное число)
//  используй функцию substr_count()
echo $random_number = rand( 1, 99999 );
$num = substr_count( $random_number, 7 );
echo " число 7 встречается $num раз";
echo "<hr>";

//5.a Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.
$a = 3;
echo $a;
echo "<hr>";

// 5.b Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
$a = 10;
$b = 2;
echo "сумма = " . ($a + $b) . '<br>';
echo "разность = " . ($a - $b) . '<br>';
echo "произведение = " . ($a * $b) . '<br>';
echo "частное = " . ($a / $b) . '<br>';
echo "<hr>";

//5.c Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
echo "<hr>";

//5.d Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.
$a = 10;
$b = 2;
$c = 5;

echo $sum = $a + $b + $c;
echo "<hr>";

// 5.e Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение
$a = 17;
$b = 10;
$c = $a - $b;
$d = $c;
echo "Вывод результата на экран не задан условием";
echo "<hr>";

// 6 Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
$result = $c + $d;
echo $result;
echo "<hr>";

// 7.a Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
$text = 'Привет, Мир!';
echo $text;
echo "<hr>";

// 7.b Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1 . $text2;
echo "<hr>";

// 7.c Напишите скрипт, который считает количество секунд в часе, сутках, неделе, месяце из 30 дней.
echo "В часе " . 60 * 60 . " секунд<br>";
echo "В сутках " . 60 * 60 * 24 . " секунд<br>";
echo "В неделе " . 60 * 60 * 24 * 7 . " секунд<br>";
echo "В месяце " . 60 * 60 * 24 * 7 * 30 . " секунд";
echo "<hr>";

//8 Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --.
//Количество строк кода при этом не должно измениться!
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
++$var;
--$var;
echo $var;
echo "<hr>";

// 1 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
$hour = date( "H" );
$min = date( "i" );
$sec = date( "s" );
echo "$hour:$min:$sec";
echo "<hr>";

// 2 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться!
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text;
echo "<hr>";

// 3 Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10,
// используя только переменную $foo
$foo = 'bar';
$bar = 10;
echo $$foo;
echo "<hr>";

// 4 Какой будет результат если
$a = 2;
$b = 4;
echo $a++ + $b; // - 6
echo $a + ++$b;  // - 8
echo ++$a + $b++; // - 9
echo "<hr>";

// 5 Функции для проверки типов данных. Определите что у вас в переменной.
//Решение должно быть универсальным. Используйте тернарную операцию.
$a = (int)'123' + 3;
echo isset( $a ) ? 'переменная $a существует' : 'переменная $a не существует';
echo "<br>";
echo 'переменная $a ' . gettype( $a );
echo "<br>";
echo is_null( $a ) ? 'переменная $a null' : 'переменная $a не null';
echo "<br>";
echo empty( $a ) ? 'переменная $a пуста' : 'переменная $a не пуста';
echo "<br>";
echo is_integer( $a ) ? 'переменная $a число' : 'переменная $a не число';
echo "<br>";
echo is_double( $a ) ? 'переменная $a дробь' : 'переменная $a не дробь';
echo "<br>";
echo is_string( $a ) ? 'переменная $a строка' : 'переменная $a не строка';
echo "<br>";
echo is_numeric( $a ) ? 'переменная $a содержит чсло' : 'переменная $a не содержит число';
echo "<br>";
echo is_bool( $a ) ? 'переменная $a является булевой' : 'переменная $a не является булевой';
echo "<br>";
echo is_scalar( $a ) ? 'переменная $a является скалярным значением' : 'переменная $a не является скалярным значением';
echo "<br>";
echo is_array( $a ) ? 'переменная $a массив' : 'переменная $a не массив';
echo "<br>";
echo is_object( $a ) ? 'переменная $a объект' : 'переменная $a не объект';
echo "<hr>";

//1 Даны два числа. Найти их сумму и произведение.
echo 2 + 3;
echo "<br>";
echo 2 * 3;
echo "<hr>";

// 2 Даны два числа. Найдите сумму их квадратов.
echo (2 ** 2) + (3 ** 2);
echo "<hr>";

// 3 Даны три числа. Найдите их среднее арифметическое.
echo (2 + 3 + 7) / 3;

// 4 Даны три числа x,y и z. Найдите (x+1)−2(z−2x+y)
$x = 6;
$z = 5;
$y = 8;
echo (++$x) - (2 * ($z - (2 * $x) + $y));
echo "<hr>";

// 5 Дано натуральное число. Найдите остатки от деления этих чисел на 3 и на 5. Дано число. Увеличьте его на 30%, на 120%
$nat = 42;
echo $nat % 3;
echo "<br>";
echo $nat % 5;
echo "<hr>";
// 5.1 Дано число. Увеличьте его на 30%, на 120%
$a = 50;
echo $a = ($a / 100 * 30) + $a; // на 30%
echo "<br>";
echo $a = ($a / 100 * 120) + $a; // на 120%
echo "<hr>";

// 6 Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа. Дано трехзначное числа. Найдите сумму его цифр.
$a = 120;
$b = 150;
echo $a = $a / 100 * 40;
echo "<br>";
echo $b = $b / 100 * 84;
echo "<br>";
$result =  $a+ $b;
echo $result;


$a_massive = str_split($a);
echo "sum(a) = " . array_sum($a_massive) . "\n";
$b_massive = str_split($b);
echo "sum(b) = " . array_sum($b_massive) . "\n";
echo "<hr>";

// 7 Дано трехзначное числа. Поменяйте среднюю цифру на ноль.
$a = 558;
$a = (string)$a;
$a[ 1 ] = 0;
echo (int)$a;
echo "<br>";
//Найдите число, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа.
echo strrev( $a );
echo "<hr>";

// 8 задача деление по модулю. определить какое число четное или не четное. Реализовать через тернарную операцию.
$a = 25;
echo ($a % 2) ? 'не четное' : 'четное';




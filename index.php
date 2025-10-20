<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<h3>Выберите вариант задания</h3>
<a href="first.php">Лабораторная работа №1</a><br>
<a href="second.php">Лабораторная работа №2</a><br>
<a href="third.php">Лабораторная работа №3</a><br>
<a href="four.php">Лабораторная работа №4</a><br>
<a href="five.php">Лабораторная работа №5</a>

<!--    <h2>Введи свои данные</h2>-->
<!--    <form action="display.php" method="post">-->
<!--        <p>Введите x:<label>-->
<!--                <input type="number" name="x"/>-->
<!--            </label></p>-->
<!--        <input type="submit" value="Отправить">-->
<!--    </form>-->
<!--<table border="1">-->
<!--<h1>Лабораторные работы</h1>-->
<!--<details id="details1">-->
<!--    <summary>Lab1</summary>-->
<!--    <details id="details1.1">-->
<!--        <summary>1.2. Программирование линейных алгоритмов | Вариант:6 | Высокий уровень</summary>-->
<?php

//    $Families=[["Tom","Alice"],["Bob","Kate"]];
//    foreach($Families as $Family){
//        echo "<tr>";
//            foreach($Family as $user){
//                echo "<td>$user</td>";
//            }
//        echo "</tr>";
//    }
//$phones = array(
//    "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro") ,
//    "samsung"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
//    "nokia" => array("Nokia 8.3", "Nokia 3.4"));
//foreach ($phones as $brand => $items) {
//    echo "<h3>" . ucfirst($brand) . "</h3>";
//    echo "<ul>";
//
//    foreach ($items as $item) {
//        echo "<li>$item</li>";
//    }
//
//    echo "</ul>";
//}

//одномерный массив
//Упорядочить значения массива по возрастанию.
// Реализовать двумя способами: с помощью стандартной функции и без.
//$mas=[];
//$n=rand(10,20);
//for ($i = 0; $i < $n; $i++) {
//    $mas[$i]=rand(0,100);
//    echo $mas[$i]." ";
//}
//echo "<br>";
////sort($mas);
//for ($i = 0; $i < count($mas)-1; $i++)
//{
//    for ($j = $i + 1; $j < count($mas); $j++)
//    {
//        if($mas[$i]>$mas[$j])
//        {
//            $temp = $mas[$i];
//            $mas[$i] = $mas[$j];
//            $mas[$j] = $temp;
//        }
//    }
//}
//for ($i = 0; $i < $n; $i++) {
//    echo $mas[$i]." ";
//}
//echo "<br>";

//двумерный массив
//Анонимные функции

//$hello=function ($name){
//    echo "<h2>Hello $name!</h2>";
//};
//$sum=function ($x,$y){
//  return $x+$y;
//};
//function sum($mas,$condition)
//{
//    $result=0;
//    foreach ($mas as $number) {
//        if($condition($number)){
//            $result+=$number;
//        }
//    }
//    return $result;
//}
////$hello("Tom");
////echo $sum(6,9);
//$isEvenNumber=function ($n){return $n%2==0;};
//$mas=[];
//for($i=0;$i<10;$i++){
//    $mas[]=rand(0,10);
//}
////echo "<p>".sum($mas,$isEvenNumber);
////Замыкания
////Замыкания в PHP представляют анонимную функцию,
////которая может использовать переменные из своего локального окружения
//$number=89;
//$showNumber=function () use ($number){
//    echo $number;
//};
////echo "<p>";
////$showNumber();
//$a=8;
//$b=10;
//$closure=function ($c) use ($a,$b){
//    return $a+$b+$c;
//};
//echo "<p>";
//echo $closure(5);
//Стрелочные функции
//Стрелочные функции (arrow function) позволяют
// упростить запись анонимных функций, которые возвращают некоторое значение
//$closure=fn($c)=>$a+$b+$c;

//Работа со строками
//echo "<p>";
//$str1=" Привет, мир! ";
//$str2="мир";
//$s=<<<LABEL
//Hello world!
//By world!
//LABEL;
//echo $s;
//echo $str1[4]."<p>";
//$position=strpos($str1,$str2);
//$position=mb_strpos($str1,$str2);
//if($position!==false){
//    echo "Позиция подстроки $str2 в строке $str1 начинается с индекса $position";
//}
//echo "<p>".mb_strrpos($str1,$str2);
//echo "<p>".trim($str1);
//echo "<p>".mb_strtolower($str1);
//echo "<p>".mb_strlen($str1);
//echo "<p>".mb_substr($str1,3);
//echo "<p>".mb_substr($str1,3,5);
//echo "<p>".str_replace("мир","Ваня",$str1);

//Работа с cookie
//bool setcookie(string $name, string $value, int $expire,
//    string $path, string $domain, bool $secure, bool $httponly)
//name: имя cookie, которое будет использоваться для доступа к его значению
//value: значение или содержимое cookie - любой алфавитно-цифровой текст не более 4 кБайт
//expire (необязательный параметр): срок действия в секундах, после которого cookie уничтожаются.
//path (необязательный параметр): путь к каталогу на сервере, для которого будут доступны cookie.
//domain (необязательный параметр): задает домен, для которого будут доступны cookie.
//secure (необязательный параметр): указывает на то, что значение cookie должно передаваться по протоколу HTTPS
//httponly (необязательный параметр): если равно true, cookie будут доступны только через http протокол.

//$name="Tom";
//$age=45;
//setcookie("name",$name);
//setcookie("age",$age,time()+3600);

//if(isset($_COOKIE["name"])) echo "Имя:".$_COOKIE["name"];
//if(isset($_COOKIE["age"])) echo "Возраст:".$_COOKIE["age"];

//setcookie("lang[1]","Никакой");
//setcookie("lang[2]","Пофигистический");
//setcookie("lang[3]","Матерный жаргон индейцев Майя");

//if(isset($_COOKIE["lang"])){
//    foreach($_COOKIE["lang"] as $lang=>$value){
//        $name=htmlspecialchars($lang);
//        $value=htmlspecialchars($value);
//        echo "<br>".$name.": ".$value;
//    }
//}
//setcookie("name","",time()-3600);

//Сессии
//session_start();
//echo session_id()."<br>";
//echo session_name()."<br>";
//echo $_COOKIE["PHPSESSID"]."<br>";

//$_SESSION["name"]="Tom";
//$_SESSION["age"]="19";

//if(isset($_SESSION["name"])&&isset($_SESSION["age"])){
//    $name=$_SESSION["name"];
//    $age=$_SESSION["age"];
//    echo "<p>Hello $name. $age!</p>";
//}

//unset($_SESSION["age"])
//session_destroy();
?>


<!--</table>-->
</body>
</html>
<?php
//неиндексированные массивы
//$numbers=array();
//$numbers=[];
//$numbers=array(1,7,3,5);
//$numbers=[1,7,3,5];
//echo $numbers[1]."<br>";
//print_r($numbers);

//=>
//$numbers=[0=>1,1=>2,2=>3,3=>4,4=>5,5=>6,6=>7];
//$numbers=[1=>2,2=>4,3=>6,4=>8];
//$numbers=[3=>2,4,6,8,5,12];
//print_r($numbers);

//Перебор элементов массива
//$users=["Саша","Маша","Настя","Боря"];
//for($i=0;$i<count($users);$i++) {
//    echo $users[$i]." ";
//}
//foreach ($users as $user) {
//    echo $user." ";
//}
//foreach ($users as $key=>$user) {
//    echo "$key=$user"."<br/>";
//}

//индексированные массивы
//$words=array("red"=>"красный","black"=>"черный","green"=>"зеленый","yellow"=>"желтый");
//$words=["red"=>"красный","black"=>"черный","green"=>"зеленый","yellow"=>"желтый"];
//echo $words["green"];
//foreach($words as $word=>$wordColor){
//    echo $word.":".$wordColor."<br>";
//}
//$data=[1=>"Tom","id1"=>"Sam",67.9=>"Tesov"];

//многомерные массивы
//$Families=array(array("Tom","Alice"),array("Bob","Kate"));
///$Families=[["Tom","Alice"],["Bob","Kate"]];
//print_r($Families);
//echo "<br>";
//print_r($Families[0]);
//echo "<br>";
//echo $Families[0][0]."<br/>";
//echo $Families[0][1]."<br/>";
//echo $Families[1][0]."<br/>";
//echo $Families[1][1]."<br/>";
//echo "<br>";

//foreach($Families as $Family){
//    echo $Family."<br/>";
//}

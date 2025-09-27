<?php
//    $name=$_POST["firstname"];
//    $surname=$_POST["lastname"];
//    echo "Ваше имя:".$name." фамилия ".$surname;

if(isset($_POST["var1"])&&isset($_POST["var2"])){
    $var1= $_POST["var1"];
    $var2= $_POST["var2"];
    $sum=$var1+$var2;
    $multiplication=$var1*$var2;
    echo $var1."+".$var2."=".$sum;
    echo "<br>";
    echo $var1."*".$var2."=".$multiplication;
}

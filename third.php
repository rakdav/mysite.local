<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лабораторная работа №3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p>Cоздать массив из n чисел, каждый элемент которого
        равен квадрату своего номера</p>
    <form method="post">
<!--        <p>Введите число элементов массива:<label>-->
<!--                <input type="number" name="n"/>-->
<!--            </label>-->
<!--        </p>-->
        <table>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </tr>
            <tr>
                <td><input type="number" name="r1" placeholder="Удельное сопротивление 1"/></td>
                <td><input type="number" name="r2" placeholder="Удельное сопротивление 2"/></td>
                <td><input type="number" name="r3" placeholder="Удельное сопротивление 3"/></td>
            </tr>
            <tr>
                <td><input type="number" name="l1" placeholder="Длина 1"/></td>
                <td><input type="number" name="l2" placeholder="Длина 2"/></td>
                <td><input type="number" name="l3" placeholder="Длина 3"/></td>
            </tr>
            <tr>
                <td><input type="number" name="s1" placeholder="Площадь 1"/></td>
                <td><input type="number" name="s2" placeholder="Площадь 2"/></td>
                <td><input type="number" name="s3" placeholder="Площадь 3"/></td>
            </tr>
        </table>
        <p>
            <input type="submit" value="Отправить">
        </p>
    </form>
    <?php
//        if(isset($_POST["n"])){
//            $n = $_POST["n"];
//            $numbers=[];
//            for($i = 0; $i < $n; $i++){
//                $numbers[$i]=$i*$i;
//            }
//            print_r($numbers);
//        }
//    if(isset($_POST["n"])){
//        $n = $_POST["n"];
//        echo "Сумма чисел от 1 до ".$n." равна ".Sum($n)."<br>";
//    }
    function Sum($a)
    {
        $sum = 0;
        for ($i = 1; $i <= $a; $i++) {
            $sum += $i;
        }
        return $sum;
    }
    function Resistance($r,$l,$s)
    {
        return $r*$l/$s;
    }
    function Hello()
    {
        echo "Hello world!";
    }
    //Hello();

    ?>
</body>
</html>
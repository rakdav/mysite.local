<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лабораторная работа №3</title>
</head>
<body>
    <p>Cоздать массив из n чисел, каждый элемент которого
        равен квадрату своего номера</p>
    <form method="post">
        <p>Введите число элементов массива:<label>
                <input type="number" name="n"/>
            </label>
        </p>
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
    function Hello()
    {
        echo "Hello world!";
    }
    Hello();
    ?>
</body>
</html>
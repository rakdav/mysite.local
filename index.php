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
    <h2>Введи свои данные</h2>
    <form action="display.php" method="post">
        <p>Введите значение 1:<label>
                <input type="number" name="var1"/>
            </label></p>
        <p>Введите значение 2:<label>
                <input type="number" name="var2"/>
            </label></p>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
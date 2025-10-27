<?php
//Чтение
//Чтение файла построчно
//    $fd=fopen("text.txt","r") or die("Не удалось открыть файл");
//    while (!feof($fd)) {
//        $str=htmlentities(fgets($fd));
//        echo $str."<br>";
//    }
//fclose($fd)

//Чтение файла полностью
//$str=htmlentities(file_get_contents("text.txt"));
//echo $str;

//Поблочное считывание
//$fd=fopen("text.txt","r") or die("Не удалось открыть файл");
//while (!feof($fd)) {
//    $str=htmlentities(fread($fd,400));
//    echo $str."<br>";
//}
//fclose($fd);

//Запись
//$fd=fopen("hello.txt","w") or dir("Не удалось создать файл");
//$str="Привет мир";
////fwrite($fd,$str);
//fputs($fd,$str);
//fclose($fd);

//Работа с указателем файла
//$fd=fopen("hello.txt","w+") or die("Не удалось открыть файл");
//$str="Привет мир!";
//fwrite($fd,$str);
//fseek($fd,0);
//fwrite($fd,"Хрю");
//fseek($fd,0,SEEK_END);
//fwrite($fd,$str);
//fclose($fd);

//Управление файлами и каталогами

//Перемещение файла
//if(!rename("hello.txt", "subdir/hello.txt"))
//    echo "Ошибка перемещения файла";
//else echo "Файл перемещен";

//Копирование файла
//if(copy("text.txt","hello_new.txt"))
//    echo "Копия файла создана";
//else echo "Ошибка копирования файла";

//Удаление файла
//if(unlink("hello_new.txt")) echo "Файл удален";
//else echo "Ошибка удаления файла";

//Создание каталога
//if(mkdir("newdir")) echo "Каталог создан";
//else echo "Ошибка создания каталога";
//Удаление каталога
//if(rmdir("newdir")) echo "Каталог удален";
//else echo "Ошибка удаления каталога";

//$path=getcwd();
//if(is_dir($path)){
//    if($dh=opendir($path)){
//        while(($file=readdir($dh))!==false){
//            if($file=="." || $file=="..") continue;
//            if(is_dir($file)) echo "каталог: $file <br>";
//            else echo "файл: $file <br>";
//        }
//        closedir($dh);
//    }
//}

//Блокировка файла. Функция flock
$fd=fopen("hello.txt","r+") or die("Не удалось открыть файл");
$str="Привет мир!";
if(flock($fd,LOCK_EX)){
   // fseek($fd,0,SEEK_END);
    ftruncate($fd,0);
    fwrite($fd,$str) or die("Ошибка записи");
    flock($fd,LOCK_UN);
}
fclose($fd);
<?php
//Написать класс init, от которого нельзя сделать наследника,
// состоящий из 3 методов:
// 1) create(), который доступен только для методов класса,
// создает таблицу test, содержащую 5 полей:
//id	целое, автоинкрементарное
//script_name	строковое, длиной 25 символов
//start_time	целое
//end_time	целое
//result	один вариант из ‘normal’, ‘illegal’, ‘failed’, ‘success’
//2) fill(), который доступен только для методов класса и
// заполняет таблицу случайными данными;
// 3) get(),  который доступен извне класса и выбирает из таблицы test,
// данные по критерию: result среди значений ‘normal’ и ‘success’.
//  В конструкторе выполняются методы create и fill.
// Задание должно быть выполнено с поддержкой исключений.

enum Result
{
    case normal;
    case illegal;
    case failed;
    case success;
    public function Status():string
    {
        return match ($this) {
            Result::illegal => "illegal",
            Result::success => "success",
            Result::failed => "failed",
            Result::normal => "normal",
        };
    }
}

$init=new Init();
$init->get();

final class Init
{
    private $table;
    public function __construct()
    {
        $this->create();
        $this->Fill();
    }
    private function create(): void{
        $this->table = [];
    }
    private function Fill(): void
    {
        $this->table[]=new Item("one","12-06-2025","19-06-2025", Result::success);
        $this->table[]=new Item("two","12-07-2025","19-07-2025", Result::failed);
        $this->table[]=new Item("three","12-08-2025","19-08-2025",Result::normal);
        $this->table[]=new Item("four","12-09-2025","19-09-2025",Result::illegal);
        $this->table[]=new Item("five","12-10-2025","19-10-2025",Result::normal);
    }
    public function get():void {
        foreach ($this->table as $item){
            if($item->getStatus()==Result::normal or $item->getStatus()==Result::success) {
                $item->Print();
                echo " ".Item::$id."<br>";
            };
        }
    }
}

class Item
{
    private $script_name,$start_time,$end_time;
    static int $id=0;
    public function __construct($script_name,$start_time,$end_time,public Result $result)
    {
        $this->script_name=$script_name;
        $this->start_time=$start_time;
        $this->end_time=$end_time;
        self::$id++;
    }
    public function getStatus():Result
    {
        return $this->result;
    }
    public function Print(): void
    {
        echo "$this->script_name $this->start_time $this->end_time ".$this->result->Status();
    }
}
//$person = new Person("Tom",45);
////$person->name="Tom";
////$person->age=45;
//$person->Hello();
//
//$human=new class
//{
//  public $name;
//  function sayHello()
//  {
//      echo "Hello ".$this->name."!<br>";
//  }
//};
//$human->name="Bob";
//$human->sayHello();
//$emp=new Employee("John",34,"Samsung");
//$emp->Hello();
//echo "<br>";
////echo $emp instanceof Employee;
//echo $emp->getCompany()."<br>";
//echo Person::$count;
//class Person
//{
//   private $name,$age;
//   static $count=0;
//    function __construct($name, $age){
//        $this->name = $name;
//        $this->age = $age;
//        self::$count++;
//    }
//    function Hello()
//    {
//        echo "Hello, my name is " . $this->name .". I am ".$this->age.".<br>";
//    }
//    function getName(){
//        return $this->name;
//    }
//    function getAge(){
//        return $this->age;
//    }
//}
//class Employee extends Person
//{
//    private $company;
//    function __construct($name, $age, $company)
//    {
//        parent::__construct($name, $age);
//        $this->company = $company;
//    }
//    function Hello(){
//        parent::Hello();
//        echo "Работает в $this->company";
//    }
//    function getCompany()
//    {
//        return $this->company;
//    }
//}

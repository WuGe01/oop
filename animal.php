<?php
class Animal{
    private $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function name(){
        return $this->name;
    }
}

interface sound{
    public function sound();
}

class Dog extends Animal implements sound{
    public function sound(){
        return "汪";
    }
}

class Cat extends Animal implements sound{
    public function sound(){
        return "喵";
    }
}

$dog=new Dog('阿強');
$cat=new Cat('阿花');

echo $dog->name() .'叫:'.$dog->sound();
echo "<br>";
echo $cat->name() .'叫:'.$cat->sound();
echo "<br>";



?>
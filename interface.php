<?php
class Pet{
    protected $hairColor="";
    protected $name="";
    protected $feet=0;
    public function __construct($name,$hairColor,$feet){
        $this->name=$name;
        $this->hairColor=$hairColor;
        $this->feet=$feet;
    }
    public function name(){
        return $this->name;
    }
    public function hairColor(){
        return $this->hairColor;
    }
    public function feet(){
        return $this->feet;
    }
}
interface Event{
    public function run();
    public function sound();   
    public function catch();
}
class Dog extends Pet implements Event{
    public function run(){
        return "在跑跑~~~";
    }
    public function sound(){
        return "在叫~~~";
    }             
    public function catch(){
        return "在抓抓抓~~~";
    }
}

$dog=new Pet('dog','red',4);

echo $dog->name();
echo "<br>";
echo $dog->hairColor();
echo "<br>";
echo $dog->feet();
echo "<br><hr>";

$bird=new Pet('bird','grad',2);

echo $bird->name();
echo "<br>";
echo $bird->hairColor();
echo "<br>";
echo $bird->feet();
echo "<br><hr>";

$dog2=new Dog('Dog','blue',4);

echo $dog2->name();
echo "<br>";
echo $dog2->hairColor();
echo "<br>";
echo $dog2->feet();
echo "<br>";
echo $dog2->name();
echo $dog2->run();
echo "<br>";
echo $dog2->name();
echo $dog2->sound();
echo "<br>";
echo $dog2->name();
echo $dog2->catch();
echo "<br>";

?>
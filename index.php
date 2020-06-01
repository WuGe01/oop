<?php

class Pet{
    public $hairColor="black";
    public $feet=4;
    public function __construct(){
        echo "物件已成立";
        echo $this->sound();
    }

    public function sound(){
        return "汪汪";
    }

}

$dog=new Pet;

echo "<br>";
echo $dog->hairColor;
echo "<br>";
echo $dog->feet;
echo "<br>";
echo $dog->sound();

?>
<hr>
<h2>繼承</h2>
<hr>

<?php
class Dog extends Pet{
    // overwrite 覆寫
    public function sound(){
        return "汪汪吼吼吼";
    }
    public function run(){
        return "小狗跑跑跑~~~";
    }
}
$dog2=new Dog;
echo "<br>";
echo $dog2->hairColor;
echo "<br>";
echo $dog2->feet;
echo "<br>";
echo $dog2->sound();
echo "<br>";
echo $dog2->run();
?>
<hr>
<h2>封裝</h2>
<hr>
<?php
class Dog2 extends Pet{
    // overwrite 覆寫
    public function sound(){
        return "汪汪吼吼吼";
    }
    public function run(){
        return "小狗跑跑跑~~~";
    }
}
$dog2=new Dog2;
$dog2->hairColor="red";
echo "<br>";
echo $dog2->hairColor;
echo "<br>";
echo $dog2->feet;
echo "<br>";
echo $dog2->sound();
echo "<br>";
echo $dog2->run();
?>
<?php
// private-最強烈無法變更>protected-保護可用變更>public-公開
class Pet{
    protected $hairColor="black";
    private $feet=4;
    public function __construct(){
        echo "物件已成立";
        echo $this->sound();
    }
    public function hairColor(){
        return $this->hairColor;
    }
    public function feet(){
        return $this->feet;
    }
    public function sound(){
        return "汪汪";
    }

}

$dog=new Pet;

echo "<br>";
echo $dog->hairColor();
echo "<br>";
echo $dog->feet();
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
echo $dog2->hairColor();
echo "<br>";
echo $dog2->feet();
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
    public function sethairColor($color){
        $this->hairColor=$color;
    }
    public function setfeet($num){
        $this->feet=$num;
    }
}
$dog2=new Dog2;
// $dog2->hairColor="red";
$dog2->sethairColor("green");
$dog2->setfeet(3);
echo "<br>";
echo $dog2->hairColor();
echo "<br>";
echo $dog2->feet();
echo "<br>";
echo $dog2->sound();
echo "<br>";
echo $dog2->run();
?>
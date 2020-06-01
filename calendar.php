<?php

class Calender{
    public $render;
    private $month;
    public function __construct($month){       
        $this->month = $month;
        $this->render = $this->render();
    }   
    private function render(){
        $html="<h1>".$this->month."</h1>";
        $html=$html.
         "<table>
         <tr>
         <td>一</td>
         <td>二</td>
         <td>三</td>
         <td>四</td>
         <td>五</td>
         <td>六</td>
         <td>日</td>
         </tr>";

        for($i=0;$i<5;$i++){
            $html=$html. "<tr>";
            for($J=1;$J<8;$J++){
                $html=$html. "<td>";
                $html=$html. ($i*7+$J);
                $html=$html. "</td>";
            }
            $html=$html. "</tr>";
        }       
        $html=$html. "</table>";
        return $html;
    }
}

$c=new Calender("一");
echo $c->render;

?>

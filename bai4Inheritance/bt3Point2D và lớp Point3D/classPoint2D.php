<?php

class Point2D
{
    public $x;
    public $y;
    public function Point2D($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    public function getx(){
        return $this->x;
    }
    public function setx($x){
        $this->x=$x;
    }
    public function gety(){
        return $this->y;
    }
    public function sety($y){
        $this->y=$y;
    }
    public function setXY($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    public function getXY(){
        $arrayXY = array($this->x,$this->y);
        return $arrayXY;
    }
    public function toString(){
        echo "giá trị X của Point2D là:" . $this->x . "<br/>" . "giá trị Y của Point2D là:" . $this->y. "<br/>";
    }
}
?>
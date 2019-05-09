<?php
//abstract class Geometric
//{
//    public $color = string;
//    public $filled = boolean;
//    public $dateCreated ;
//
//    abstract protected function Geometric();
//
//    abstract protected function Geometric($color,$filled){
//        $this->color = $color;
//        $this->filled = $filled;
//    }
//    public function getColor(){
//        return $this->name;
//    }
//
//    public function setColor($name){
//        $this->name = $name;
//    }
//
//    public function getFiled(){
//        return $this->filled;
//    }
//
//    public function setfilled($filled){
//        $this->filled = $filled;
//    }
//
//}

interface Chim {
     public function Bay();
 }

 interface Boi {
    public function bơi();
 }

 class Bird {
    public function info(){
        echo "tôi là " . $this->name;
        echo "tôi là chim";
    }
 }

 class Dove extends Chim implements canfly{
    var $name = Dove;
 }

?>
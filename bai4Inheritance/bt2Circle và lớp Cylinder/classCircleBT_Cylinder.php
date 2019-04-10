<?php
class Circle1{

    public $radius;
    public $color;

    public function Circle1($color,$radius){
        $this->color=$color;
        $this->radius=$radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius);
    }

    public function toString() {
        echo "Ban kinh $this->radius có màu là $this->color ";
    }
}
class Cylinder extends Circle1 {
    public $height;
    public function Cylinder($color,$radius,$height){
        parent::Circle1($color,$radius);
        $this->height=$height;
    }
    public function toString()
    {
        echo "Ban kinh $this->radius có màu là $this->color va chieu cao $this->height";
    }
}
?>
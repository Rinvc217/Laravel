<?php
class Circle1
{
    public $radius;
    public $color;

     function Circle1($color,$radius){
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

?>
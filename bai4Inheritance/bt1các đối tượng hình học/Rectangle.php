<?php
include_once ('classShape.php');

    class Rectangle extends Shape{
    public $width;
    public $height;

    public function Rectangle($name, $width, $height)
    {
        parent::Shape($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}
?>
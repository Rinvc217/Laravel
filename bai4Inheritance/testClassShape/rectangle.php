<?php
include_once ('classShape.php');


class rectangle extends Shape {
    public $width;
    public $height;
    public function rectangle ($name, $width, $height){
        parent::shape($name);
        $this->height = $height;
        $this->width = $width;

    }

    public function caculateArea(){
        return $this->height * $this->width;
    }

    public function caculatePerimeter(){
        return ($this->width + $this->height) * 2;
    }
}
?>
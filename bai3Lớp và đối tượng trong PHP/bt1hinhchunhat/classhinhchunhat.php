<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 2/14/2019
 * Time: 2:27 PM
 */
class Rectangle
{
    public $width;
    public $height;

    public function rectangle ($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

//tinh dien tich
    public function getArea()
    {
        return $this->width * $this->height;
    }

    //tinh chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
?>

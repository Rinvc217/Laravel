<?php
include_once ('Rectangle.php');

class Square extends Rectangle
{

    public function Square($name, $width)
    {
        parent::Rectangle($name, $width, $width, $width);
    }
}
?>
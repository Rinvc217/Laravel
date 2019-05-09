<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/08/2019
 * Time: 09:15
 */
include_once ('rectangle.php');

class Square extends rectangle {

    public function Square($name, $width){
        parent::rectangle( $name, $width, $width,$width);
        }
}
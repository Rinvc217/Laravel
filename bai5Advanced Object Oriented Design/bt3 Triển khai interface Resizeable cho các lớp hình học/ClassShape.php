<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 4/12/2019
 * Time: 11:00 AM
 */
class Shape {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function show(){
        return "Tôi là 1 hình dạng, tên tôi là: $this->name";
    }
}
?>



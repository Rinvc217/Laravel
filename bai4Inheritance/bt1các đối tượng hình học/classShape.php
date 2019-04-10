<?php
class Shape{
    public $name;
    public function Shape($name){
        $this->name=$name;
    }
    public function show(){
        return "Tôi là một hình dạng. Tên tôi là: $this->name";
    }
}
?>
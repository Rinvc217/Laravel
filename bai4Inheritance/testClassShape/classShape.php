<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/08/2019
 * Time: 08:33
 */
class shape {
    public function shape ($name){
        $this->name = $name;
}

public function show (){
        return "tôi là hình : ". $this->name;
}
};
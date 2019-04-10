<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/14/2019
 * Time: 8:43 AM
 */

class Person {
    private $firstname;
    private $lastname;
    public $age;

    public function get_first_name() {
        return $this->firstname;
    }

    public function set_first_name($new_frist_name) {
        $this->firstname = $new_frist_name;
    }

    public function get_last_name() {
        return $this->lastname;
    }

    public function set_last_name($new_last_name) {
        $this->lastname = $new_last_name;
    }

    public function get_ho_va_ten() {
        return $this->lastname . " " . $this->firstname;
    }

    public function kiemtratuoi(){
        if($this->age>=18){
            return true;
        }else
            return false;
    }

}

?>
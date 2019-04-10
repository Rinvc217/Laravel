<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 2/15/2019
 * Time: 8:13 AM
 */
class User {
    public $username;
    public $userld;
    public $email;
    public $password;
    public function User(){
        $this->username = "jj";
        $this->password = "";
        $this->userld ="";
        $this->email = "";
    }
    public function login(){
        //return $this->email.$this->password;
    }
    public function  logout(){

    }
}
class Admin extends User{
    public $accessLevel;
    public function Admin(){
        $this->accessLevel = "";
    }
    public function editUser(){

    }
}
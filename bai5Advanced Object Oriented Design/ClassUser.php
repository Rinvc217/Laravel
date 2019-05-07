<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/07/2019
 * Time: 08:53
 */
class UserClass{
    public $username;
    public $userl;
    public $email;
    public $passwod;

public function __construct($username,$userl,$email,$passwod) {
    $this->username = $username;
    $this->userl = $userl;
    $this->email = $email;
    $this->passwod = $passwod;
}

public function login(){
    echo " dang nhap ok ";
}

final public function logout(){
    echo " dang xuat ok";
}


}
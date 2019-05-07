<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/07/2019
 * Time: 09:03
 */
include("ClassUser.php");

class Admin extends Userclass
    {
    public function __construct($userame, $userl, $email, $passwod, $accesslevel)
    {
        parent::__construct($userame, $userl, $email, $passwod);
            $this->accesslevel = $accesslevel;
    }

    public function editUser(){
        return " heloo you number";
    }
}
$obj1 = new Admin("a","b","c","d","e");
echo $obj1->editUser("");
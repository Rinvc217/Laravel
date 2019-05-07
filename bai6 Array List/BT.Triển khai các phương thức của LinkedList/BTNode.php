<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 04/17/2019
 * Time: 13:49
 */
class Node {
    public $next;
    public $data;

    function __construct($data){
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode(){
        return $this->data;
    }

}
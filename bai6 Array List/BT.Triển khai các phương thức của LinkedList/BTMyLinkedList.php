<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 04/17/2019
 * Time: 14:01
 */
include ('BTNode.php');
class MyLinkedList {
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct(){
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data){
        $link = new Node($data);
        $link->next  = $this->firstNode;
        $this->firstNode = $link;
        if($this->lastNode == NULL)
            $this->lastNode = $link;
        $this->count++;
    }

    public function insertLast($data){
        if($this->firstNode != NULL){
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next=NULL;
            $this->lastNode = $link;
            $this->count++;

        }
        else {
            $this->insertFirst($data);
        }
    }

    public function totalNode(){
        return $this->count;
    }

    public function readList(){
        $listData = array();
        $current = $this->firstNode;
        while ($current !=Null){
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
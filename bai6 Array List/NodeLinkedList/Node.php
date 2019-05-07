<?php
class Node
{
    /*Dữ liệu nút */
    public $data;
    /* Liên kết đến nút tiếp theo */
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    function readNode()
    {
        return $this->data;
    }
}
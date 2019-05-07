<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 04/17/2019
 * Time: 11:34
 */

class mylist {
    public $arrayList;
        public function mylist($arr = ""){
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }
    public function add($obj)
    {array_push($this->arrayList, $obj);}
    public function clear()
    {
        $this->arrayList = array();
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("lỗi trong danh sách mảng nhận");
        }
    }
    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }

    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
    public function size()
    {
        return count($this->arrayList);
    }
    public function remove($index)
    {if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->arrayList = $newArrayList;
        } else {
            die("lỗi trong danh sách mảng loại bỏ <br> ");
        }
    }

    public function sort()
    {
        sort($this->arrayList);
    }
    public function toArray()
    {
        return $this->arrayList;
    }

}
?>
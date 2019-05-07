<?php

class Point3D extends Point2D
{
    public $z;
    public function Point3D($x,$y,$z){
        parent::Point2D($x,$y);
        $this->z=$z;
    }
    public function getz(){
        return $this->z;
    }
    public function setz($z){
        $this->z=$z;
    }
    public function setXYZ($x,$y,$z){
        parent::setXY($x,$y){
        $this->z = $z
        };
    }
    public function getXYZ(){
        $arrayXYZ = array($this->x,$this->y,$this->z);
        return $arrayXYZ;
    }
    public function toString(){
        echo "giá trị X của Point3D là:" .$this->x . "<br/>" ."giá trị Y của Point3D là:" . $this->y . "<br/>" ."giá trị Z của Point3D là:" . $this->z;
    }
}
?>
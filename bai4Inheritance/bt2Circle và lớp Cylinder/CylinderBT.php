<?php
class Cylinder extends Circle1 {
    public $height;
    public function Cylinder($color,$radius,$height){
        parent::Circle1($color,$radius);
        $this->height=$height;
    }
    public function toString()
    {
        echo "Ban kinh $this->radius va mau sac $this->color va chieu cao $this->height";
    }
}
?>
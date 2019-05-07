<?php
include_once('classPoint.php');

    class MoveablePoint extends Point {
        public function MoveablePoint($x,$y,$xSpeed,$ySpeed){
            parent::Point($x,$y);
            $this->xSpeed=$xSpeed;
            $this->ySpeed=$ySpeed;
        }
        public function getXSpeed(){
            return $this->XSpeed;
        }
        public function setXSpeed($xSpeed){
            $this->XSpeed=$xSpeed;
        }
        public function getYSpeed(){
           return $this->YSpeed;
        }
        public function setYSpeed($ySpeed){
            return $this->YSpeed=$ySpeed;
        }
        public function setxyxSpeedySpeed($x,$y,$xSpeed,$ySpeed){
            $this->x=$x;
            $this->y=$y;
            $this->xSpeed=$xSpeed;
            $this->ySpeed=$ySpeed;
        }
        public function getxyxSpeedySpeed(){
            $arrayxyxSpeedySpeed = array($this->x,$this->y,$this->xSpeed,$this->ySpeed);
            return $arrayxyxSpeedySpeed;
        }
        public function toString(){
            echo "giá trị X,Y của MoveablePoint có X là: " .$this->x . " và y = " . $this->y . "<br> và giá trị speed của MoveablePoint có Xspeed là:" . $this->xSpeed . "và ySpedd=" . $this->ySpeed;
        }

       public function move(){
            $this->x += $this->xSpeed;
            $this->y += $this->ySpeed;
            return $this->x.$this->y;
        }

}
?>
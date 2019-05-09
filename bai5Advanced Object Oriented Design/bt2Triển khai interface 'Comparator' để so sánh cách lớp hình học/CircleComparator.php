<?php
include_once "Circle.php";
include_once "Comparator.php";

class CircleComparator implements Comparator{
    public function compare($circleOne, $circleTow){
        $radiusOne = $circleOne->getRadius();
        $radiusTow = $circleTow->getRadius();

        if ($radiusOne > $radiusTow) {
           return "Radius Circle 1 > Radius Circle 2";
        }  else if($radiusOne < $radiusTow) {
            return "Radius Circle 2 > Radius Circle 1";
        } else {
            return "bằng nhau";
        }
    }
}

?>
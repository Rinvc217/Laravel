<?php
include_once "Circle.php";
include_once "Comparator.php";
class CircleComparator implements Comparator{
    public function compare($circleOne, $circleTwo){
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
           return "Radius Circle 1 > Radius Circle 2";
        }  else if($radiusOne < $radiusTwo) {
            return "Radius Circle 2 > Radius Circle 1";
        } else {
            return "bằng nhau";
        }
    }
}

?>
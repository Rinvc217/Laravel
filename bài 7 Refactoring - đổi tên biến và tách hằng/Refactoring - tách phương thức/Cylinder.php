<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/09/2019
 * Time: 10:14
 */
class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = pi() * $radius * $radius;
        $perimeter = 2 * pi() * $radius;
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
}
?>
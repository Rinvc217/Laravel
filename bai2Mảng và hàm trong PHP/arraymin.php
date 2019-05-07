<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 4/10/2019
 * Time: 4:23 PM
 */
 $arraynumber = array(2,3,5,61,1,12);
    $minArray = $arraynumber[0];
    for ($i = 0; $i < count($arraynumber) ; $i++) {
        if ($arraynumber[$i] < $minArray){
            $minArray = $arraynumber[$i];
        }
    }
    echo $minArray;

<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/09/2019
 * Time: 10:19
 */
include ('TennisGame.php');

$tennisGame = new TennisGame();
$tennisGame->getScore( 4, 4);

echo $tennisGame;
?>
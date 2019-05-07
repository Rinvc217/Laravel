<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 04/17/2019
 * Time: 15:21
 */

include ('BTMyLinkedList.php');
$linkedList = new MyLinkedList();
$linkedList->insertFirst('Long');
$linkedList->insertFirst('Shens');
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$linkedList->insertFirst(321);
$totalNodes = $linkedList->totalNode();
$linkData = $linkedList->readList();
echo 'số Node vừa thêm vào là:' . $totalNodes."<br>";
echo join('-' , $linkData);
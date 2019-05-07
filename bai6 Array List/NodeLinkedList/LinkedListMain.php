
<?php

include_once ('LinkList.php');
$linkedList = new LinkList();
$linkedList->insertFirst('An');
$linkedList->insertFirst('Binh');
$linkedList->insertFirst('Minh');
$linkedList->insertFirst('Quoc');
$linkedList->insertLast('VietA');
$linkedList->insertFirst('Viet');
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo 'vua them moi'.' '. $totalNodes.' '. 'Node'.' '. 'la'. '</br>';
echo join('-',($linkData));
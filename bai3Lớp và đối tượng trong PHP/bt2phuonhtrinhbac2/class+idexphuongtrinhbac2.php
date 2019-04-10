<?php
class QuadraticEquation{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDiscriminant()
    {
        return 2*$this->b - 4*$this->a*$this->c;
    }
    function getRoot1(){
            return (-$this->b + sqrt(pow($this->b,2)- 4*$this->a*$this->c))/ 2*$this->a;
    }
    function getRoot2(){
        return (-$this->b - sqrt(pow($this->b,2)- 4*$this->a*$this->c))/ 2*$this->a;
    }
    function  nghiemkep(){
        return -$this->b / 2*$this->a;
    }
}

$objQuadraticEquation = new QuadraticEquation(1,2,3);
if( $objQuadraticEquation->getDiscriminant() >= 0){
    echo "Phuong trinh co 2 nghiem:". $objQuadraticEquation-> getRoot1() . " ". "và" . " ". $objQuadraticEquation->getRoot2();
}else {
    echo "vô nghiệm";
}
echo "</br>";
if($objQuadraticEquation->getDiscriminant() == 0){
   echo "nghiệm kép là :".$objQuadraticEquation->nghiemkep();
}
?>
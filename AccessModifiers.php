<?php

class c1{
    protected $a;
    private $b;

    public function f1($a,$b){
        $this->a=$a;
        $this->b=$b;
        return $this->a + $this->b;        
    } 
}

$o = new c1;

echo "Answer = ".$o->f1(10,12);

?>
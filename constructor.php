<?php

class c1{
    public $a;
    public $b;

    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }

    function f1(){
        return ($this->a + $this->b);
    }
}

$r = new c1("11","14");
echo "Answer = ".$r->f1();

?>
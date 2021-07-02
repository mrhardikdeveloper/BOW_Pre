<?php

class c1{

    public $c;

    function __construct($a,$b){
        $this->c = $a + $b;
    }

    function __destruct(){
        return $this->c;
    }
}

$o = new c1(14,17);
echo "Answer = ".$o->c;
?>
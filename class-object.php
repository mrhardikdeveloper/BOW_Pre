<?php

class abc{
    public $a;

    function f1($a,$b){
        $this->a = $a+$b;
        return $this->a;
    }
}

$o = new abc;

$r = $o->f1(12,11);
echo "Answer = ".$r;

?>
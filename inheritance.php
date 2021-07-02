<?php

class c1{
    public function f1(){
        echo "Public Function....";
    }
    private function f2(){
        echo "Private Function....";
    }
    protected function f3(){
        echo "Protected Function....";
    }
    final public function f4(){
        echo "Final Function...";
        echo "<br>";
        $this->f2();
    }
}

class c2 extends c1{
    public function f5(){
        $this->f3();
        echo "<br>";
        $this->f4();
    }
}

$o = new c2();

$o->f1();
echo "<br>";
$o->f5();
?>
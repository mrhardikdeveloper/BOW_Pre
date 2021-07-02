<?php

class c1{
    const c1 = "Helllo";
    const c2 = "Hiii";
    function f1(){
        echo self::c2;
    }
}

echo c1::c1;
echo "<br>";
$o = new c1();
$o->f1();

?>
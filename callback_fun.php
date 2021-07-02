<?php

function fname($farg)
{
    echo $farg;
}

$a = array("a ","b ","c");

array_map("fname",$a);


function ffname($fn,$fa)
{
    $fn($fa);
}

ffname("fname","<br>Hello");

?>
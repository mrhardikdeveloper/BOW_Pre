<?php

$a = array("A"=>1, "B"=>2, "C"=>3);
echo json_encode($a);

$b = array("A","B","C");
echo json_encode($b);

echo "<br>";

$a = '{"A":1, "B":2, "C":3}';
print_r(json_decode($a,true));

echo "<br>";

$b = json_decode($a);
echo $b->A;
echo $b->B;
echo $b->C;

echo "<br>";

$c = json_decode($a,true);
echo $c['A'];
echo $c['B'];
echo $c['C'];

echo "<br>";

foreach($c as $k => $v){
    echo $k."=".$v." ";
}

?>
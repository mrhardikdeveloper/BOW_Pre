<?php

try{
    throw new Exception("Erros...",202, new Exception("Pre"));
}
catch(Exception $e){
    echo $e."<br>";
    echo $e->getCode()."<br>";
    echo $e->getMessage()."<br>";
    echo $e->getFile()."<br>";
    echo $e->getLine()."<br>";
    echo $e->getPrevious()."<br>";
}
finally{
    echo "<script>alert('Done...')</script>";
}
<?php

$a = "123";

echo filter_var($a,FILTER_SANITIZE_NUMBER_INT);

echo filter_var($a,FILTER_VALIDATE_INT);

?>
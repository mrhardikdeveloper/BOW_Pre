<?php

// require will produce a fatal error (E_COMPILE_ERROR) and stop the script
// include will only produce a warning (E_WARNING) and the script will continue

// Use require when the file is required by the application.
// Use include when the file is not required and application should continue when file is not found.


require "test.html";

echo "--------------------------------------------------<br>";

include "test.html";

?>
<?php

session_id('q4ddkpmm216e6vaie9u40ak033');

require_once("config.php");

session_regenerate_id();

echo session_id();
echo "<br>";

var_dump($_SESSION);
?>
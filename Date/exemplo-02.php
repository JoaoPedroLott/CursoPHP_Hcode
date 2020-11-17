<?php

$ts = strtotime("2011-09-11");
$ts2 = strtotime("now");
$ts3 = strtotime("+1 days");

echo date("l, d/m/Y", $ts);
echo '<br>';
echo '<br>';
echo date("l, d/m/Y", $ts2);
echo '<br>';
echo '<br>';
echo date("l, d/m/Y", $ts3);

?>
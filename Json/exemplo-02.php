<?php

$json = '[{"nome":"Jo\u00e3o","idade":26},{"nome":"Carol","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>
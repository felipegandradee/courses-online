<?php

$myJson = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Cleber","idade":45}]';

$data = json_decode($myJson, true);


var_dump($data);




?>
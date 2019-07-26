<?php

session_id('vd3jourp5v81f10t7nkle5q0lcarray');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>
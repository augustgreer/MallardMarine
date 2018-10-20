<?php

DEFINE ('DB_USER', 'trace');
DEFINE ('DB_PASSWORD', 'inventoryManager173');
DEFINE ('DB_HOST', 'localhost')
DEFINE ('DB_NAME', 'inventory');

$dbc = @mysql(DB_USER, DB_PASSWORD, DB_HOST, DB_NAME)
OR die("Cannot connect to mySQL database " . mysql_connect_error());



?>
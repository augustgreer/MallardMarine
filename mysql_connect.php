<?php

DEFINE ('DB_USER', 'ambgmsms_trace');
DEFINE ('DB_PASSWORD', 'inventoryManager173');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'ambgmsms_inventory');
    
#DEFINE ('DB_USER', 'root');
#DEFINE ('DB_PASSWORD', '');
#DEFINE ('DB_HOST', 'localhost');
#DEFINE ('DB_NAME', 'Boats');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die("Cannot connect to mySQL database " . mysqli_connect_error());

?>

<?php
require_once 'functions.php';
database_connect($dbhost, $dbuser, $dbpass, $dbname);

createTable('NYITEvents',
'Event VARCHAR(50) NOT NULL,
Description VARCHAR(150) NOT NULL,
Date DATE NOT NULL,
Time VARCHAR(8) NOT NULL,
Location VARCHAR(20)
');

mysql_close(mysql_connect($dbhost,$dbuser,$dbpass));
?>
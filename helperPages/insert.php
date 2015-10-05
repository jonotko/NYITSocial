<?php //insert.php

require_once '../functions.php';

database_connect($dbhost,$dbuser,$dbpass,$dbname);
/*
queryMysql("INSERT INTO nyitevents VALUES('ASMA meeting','Come learn about the ASMA, Free Food','2014/12/05','01:00pm','Anna Ruben 314','club meeting')");
*/
/*
queryMysql("UPDATE nyitevents SET Event='club meeting' WHERE Location='Anna Ruben 305'");
*/

if(
$_POST['name'] && 
$_POST['description'] && 
$_POST['date'] && 
$_POST['time'] &&
$_POST['location'] &&
$_POST['event']){
    $name = sanitizeString($_POST['name']);
    $description = sanitizeString($_POST['description']);
    $date = sanitizeString($_POST['date']);
    $time = sanitizeString($_POST['time']);
    $location = $_POST['location'];
    $event = sanitizeString($_POST['event']);
    
    queryMysql("INSERT INTO nyitevents VALUES('$name','$description','$date','$time','$location','$event')");
    header('Location:../response.php?submitted=submitted');
}else{
    header('Location:../add_event.php?submitted=false');
}
mysql_close(mysql_connect($dbhost,$dbuser,$dbpass));

?>
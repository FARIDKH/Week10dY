<?php 


include "index.php";

$newConn = new Connect("localhost","root","","startuply");
$newQuery = $newConn->insert("clients","text","HEY HEYHEY HEYHEY HEYHEY HEYHEY HEY");



?>
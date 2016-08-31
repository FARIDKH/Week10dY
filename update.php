<?php 

include "index.php";

$newConn = new Connect("localhost","root","","startuply");

$newConn->update("clients","text","BYE BYYE BLAH BLAdsdddHBYE BYYE BLAH BLAH",1);

?>
<?php 


include "index.php";

$newConn = new Connect("localhost","root","","startuply");

$newQuery = $newConn->select("clients","text");

while($row = mysqli_fetch_assoc($newQuery)){
    echo $row['text'];
}




?>
<?php

$date=  strtotime(date("Y-m-d H:i:s"));
echo $date."<br>";
$date2= strtotime(date("2022-12-09 15:30:55"));
echo $date2."<br>";
echo date("Y-m-d H:i:s", $date)."<br>";
echo date("Y-m-d H:i:s", $date2)."<br>";
?>
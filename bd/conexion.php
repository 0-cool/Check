<?php
$server="localhost";
$username="juanrojas";
$password="lolololo2";
$db="redsocial";
$connect=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexixon");
$sdb=mysql_select_db($db,$connect)or die(mysql_error());
?>
<?php

session_start();
$uid=$_SESSION['uid'];

if(!$uid) exit;//If the user session expired meanwhile,no need to insert

$file_path  =   "online-users.txt";

$live_users=array_map('trim',file($file_path));

//If the user entry already exist, no need to insert
if(in_array($uid,$live_users))exit;

//Append the data to a flat file in line by line

$fp=fopen($file_path,'a');
fwrite($fp,$uid."\n");
fclose($fp);

?>
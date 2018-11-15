<?php
/**
*	This file will be called to display active users
*	This file will read the data from online-users.txt and will check the respective data in the array
*	For your appication replace the array data with your database data
*	After displaying the data, the flat file online-users.txt will be emptied to get new records at the user end
*/

$file_path  =   "online-users.txt";
$live_users	=	array_map('trim',file($file_path));

//Dummy array I have used to print name and location. Replace this with your database data
$user_array[1]=array('firstname' => 'Jettie',	'lastname' => 'Gerard',	'location' => 'Hannover, German');
$user_array[2]=array('firstname' => 'Stacy',	'lastname' => 'Mossey',	'location' => 'Hannover, German');
$user_array[3]=array('firstname' => 'Tanika',	'lastname' => 'Voliva',	'location' => 'Hannover, German');
$user_array[4]=array('firstname' => 'Phillis',	'lastname' => 'Keeton',	'location' => 'Hannover, German');
$user_array[5]=array('firstname' => 'Jeane',	'lastname' => 'Colbert','location' => 'Hannover, German');
$user_array[6]=array('firstname' => 'Shana',	'lastname' => 'Pursley','location' => 'Hannover, German');
$user_array[7]=array('firstname' => 'Reba',		'lastname' => 'Goe',	'location' => 'Hannover, German');
$user_array[8]=array('firstname' => 'Zack',		'lastname' => 'Welton',	'location' => 'Hannover, German');
$user_array[9]=array('firstname' => 'Lauren',	'lastname' => 'Denham',	'location' => 'Hannover, German');
$user_array[10]=array('firstname' => 'Hang',	'lastname' => 'Kalinki','location' => 'Hannover, German');
$user_array[11]=array('firstname' => 'Lauran',	'lastname' => 'Ecklund','location' => 'Hannover, German');
$user_array[12]=array('firstname' => 'Terrell',	'lastname' => 'Escalera','location' => 'Hannover, German');
$user_array[13]=array('firstname' => 'Janet',	'lastname' => 'Dolby',	'location' => 'Hannover, German');
$user_array[14]=array('firstname' => 'Amado',	'lastname' => 'Adamczyk','location' => 'Hannover, German');
$user_array[15]=array('firstname' => 'Refugia',	'lastname' => 'Nourse',	'location' => 'Hannover, German');
$user_array[16]=array('firstname' => 'Tessie',	'lastname' => 'Hendrix','location' => 'Hannover, German');
$user_array[17]=array('firstname' => 'Abel',	'lastname' => 'Maney',	'location' => 'Hannover, German');
$user_array[18]=array('firstname' => 'Demetra',	'lastname' => 'Heiser',	'location' => 'Hannover, German');
$user_array[19]=array('firstname' => 'Karina',	'lastname' => 'Shanahan','location' => 'Hannover, German');
$user_array[20]=array('firstname' => 'Candace',	'lastname' => 'Rice',	'location' => 'Hannover, German');

	$str1="<span style='font-weight:bold;background:#0A90CC !important;color:#fff;'>Live Users</span>";
    foreach($live_users as $uid ) {
        
        $lname=$user_array[$uid]['lastname'];
        $fname=$user_array[$uid]['firstname'];
        $loc=$user_array[$uid]['location'];

        $str1.="<span><span class='active_usr'></span>$lname, $fname<font>Location $loc</font></span>";
    }

    if(count($live_users)<=0)
    $str1="<span style='font-weight:bold;background:#0A90CC !important;color:#fff;'>No curent users found</span>";


	//Empty the current active users list, so it will get the newly inserted records
	$fp=fopen($file_path,'r+');
    ftruncate($fp,0);
    fclose($fp);
  
    echo $str1;
?>
<?php

$connection = mysqli_connect('127.0.0.1', 'root', '', 'restaurant');

if( $connection == false)
{
	echo 'Не вдалось підключитись до бази даних!<br>';
	echo mysqli_connect_error();
	exit();
} else{
	echo "CONNECTION SUCCESS";
}
?>
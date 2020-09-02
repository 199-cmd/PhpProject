<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'phpproject';

	// make a connection to the database
	$conn = mysqli_connect($servername,$username,$password,$db);
	// check condition
	if(!$conn){
		echo "Error While Connecting";
	}else{
		echo "";
	}

?>
<?php
	$host="localhost";
	$username="root";
	$password="";
	$database="kopsekati";

	$link=mysql_connect($host, $username, $password) or die("Cannot connect to host.");
	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
	mysql_select_db($database) or die("Cannot connect to database.");
	error_reporting(0);
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // E-mail και κωδικός που στάληθηκαν απο την φόρμα με την μέθοδο POST 
	  $email = mysql_real_escape_string($_POST['email']);
	  $password = mysql_real_escape_string($_POST['password']); 
	  
	  $sql = "SELECT id FROM buyers WHERE email = '$email' and password = '$password'";
      $result = mysql_query($sql);
      $count = mysql_num_rows($result);
	  
      if($count == 1) {
		 header("location: index.php");
	  } else {
		  header("location: https://www.youtube.com/");
	  }
	}	
	?>
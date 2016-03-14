<?php
error_reporting(0);
   echo "
	<!doctype html>  
    <html lang = \"en\">
	<head>
		<meta charset = \"UTF-8\">
		<title>Create Tables</title>
	</head>
	<body>\n
	<h1>Create Patients Appts Tables</h1>
	";
 
	$Host = "localhost";
	$UserName = "root";
	$Password = "";
	$Database = "test";
 
	$Connect = mysqli_connect($Host, $UserName, $Password, $Database);
	if (!$Connect) echo "Connection open failed.";
	$DropTableString = "Drop Table patients";
	mysqli_query($Connect, $DropTableString);
	
	$CreateTableString = "Create Table patients
							(IDNum int, 
							HealthCardNbr char(20),
							Name char(25),
							Birthdate date,
							primary key(IDNum))";
	
	$Success = mysqli_query($Connect, $CreateTableString);
	
	if($Success)
		echo"Patients table created.";
	else
		echo"Unable to create Patients table";
	
	
	
	
	$DropTableString = "Drop Table Appts";
	mysqli_query($Connect, $DropTableString);
	
	$CreateTableString = "Create Table Appts
							(IDNum int, 
							ApptDate date,
							ApptTime time)";
	
	if(mysqli_query($Connect, $CreateTableString))
		echo"Appts table created.";
	else
		echo "Unable to create Appts table";
							
							
							
	

    echo "</body>\n";
	echo "</html>\n";
?>
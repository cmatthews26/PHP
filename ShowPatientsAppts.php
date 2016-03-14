<?php
error_reporting(0);
   echo "
	<!doctype html>  
    <html lang = \"en\">
	<head>
		<meta charset = \"UTF-8\">
		<title>Insert Patient </title>
	</head>
	<body>\n
	<h1>Insert Patient and Appt Records</h1>
	";
 
	$Host = "localhost";
	$UserName = "root";
	$Password = "";
	$Database = "test";
 

	$Connect = mysqli_connect($Host, $UserName, $Password, $Database);
	if (!$Connect) echo "Connection open failed.";

	$QueryString = "Select * from patients INNER JOIN Appts ON patients.IDNum = Appts.IDNum ORDER BY Name";
	$ResultSet = mysqli_query($Connect,$QueryString);
	
	if($ResultSet)
	{
		while($row = mysqli_fetch_array($ResultSet))
		echo "<p>Name: $row[Name] HCN: $row[HealthCardNbr]
						DOB: $row[Birthdate] Appointment Date: $row[ApptDate] Appointment Time: $row[ApptTime]</p>";	
			
	}
	else echo "Could not execute query";
	

	$NumRows = mysqli_num_rows($ResultSet);
	echo "Number of joined rows: $NumRows";

	
	
    echo "</body>\n";
	echo "</html>\n";
?>
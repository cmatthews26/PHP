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
		
	$InsertString1 = "Insert Into patients values 
											(1, '5555010232KJ', 'Lola', '1963-04-18'),
											(2, '4444993231SB', 'Christine Daae', '1970-11-07'),
											(3, '3333548001SM', 'Jean Valjean','1975-07-25'),
											(4, '2222122838DS', 'Elphaba','1975-12-25');";
	$InsertString2 = "Insert Into Appts values 
                                              (2, '2015-01-07', '10:22'),
                                              (3, '2015-05-31', '14:00'),
                                              (2, '2015-11-26', '9:30'),
                                              (1, '2015-04-15', '15:50'),
                                              (3, '2015-10-30', '8:30'),
                                              (3, '2015-01-10', '12:00'),
											  (1, '2015-04-21', '3:00'),
                                              (3, '2015-04-21', '12:20'),
                                              (2, '2015-04-21', '9:10'),
                                              (2, '2015-03-08', '15:50'),
                                              (3, '2015-12-31', '8:50'),
                                              (3, '2015-04-15', '16:00'),
											  (1, '2015-04-22', '10:00'),
                                              (3, '2015-10-31', '15:15'),
                                              (2, '2009-12-17', '9:10'),
                                              (2, '2015-04-22', '15:50'),
                                              (3, '2015-10-31', '8:50'),
                                              (3, '2015-04-22', '1:00'),
											  (1, '2015-04-23', '7:00'),
                                              (3, '2015-04-23', '18:05'),
                                              (2, '2015-04-23', '8:15'),
                                              (2, '2015-04-15', '15:50'),
                                              (3, '2015-10-31', '8:50'),
                                              (1, '2015-11-15', '18:00');";
										 
						
	$Success1 = mysqli_query($Connect, $InsertString1);
	$Success2 = mysqli_query($Connect, $InsertString2);
	
	if($Success1)
		echo "Insert was successful.";
	else
		echo "Unable to insert record.";
	if($Success2)
		echo "Insert was successful.";
	else
		echo "Unable to insert record.";

    echo "</body>\n";
	echo "</html>\n";
?>
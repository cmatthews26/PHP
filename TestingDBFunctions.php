<?php
echo "
	<!doctype html>
	<html lang = \"en\">
	   <head>
		 <meta charset = \"UTF-8\">
		 <title>Testing DB Functions</title>
	   </head>
	   <body>";

	require_once("Asst2DatabaseFunctions.php");
	error_reporting(0);
	
	OpenConnectionandDatabase();
	
	CreateTable();
	
	InsertIntoTable();
	
	BuildAndIssueSelectStatement();
	
	CloseConnection();

	// use your function to create a table called testing with the following fields:
	//   Item varchar 25
	//   City varchar 10
	//   DateReceived date
	//   Quantity int
	//   Price decimal (less than 100 with 2 #s to right of decimal)

	// Steps: 
	//   Assign the table name to a variable
	//   Assign the arrays for the CreateTable function
	//   Call CreateTable 
	//   Issue success or fail message 

	
	// Insert the records shown below in to the table
	//   Tea Toronto 2015-05-31 15 6.45
	//   Milk Kingston 2014-06-17 100 0.99
	// Issue success or fail message for each insert
		
    // call BuildAndIssueSelectStatement sorted by Item
    // code a loop to output all values. It doesn't have to be pretty
     
 
    // Close the connection

    echo "</body>
          </html>";
?>
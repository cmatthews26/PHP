<?php

function OpenConnectionandDatabase()
{
	global $Connect;
	
	$Host = "localhost";
	$UserName = "root";
	$Password = "";
	$Database = "test";
 
	$Connect = mysqli_connect($Host, $UserName, $Password, $Database);
	if (!$Connect) 
	{
		echo "Connection open failed.";
		return (false);
	}
	return(true);
	
}

function CreateTable($TableName, $FieldNames, $DataTypes, $Sizes, $Decimals=0)
{
	
	global $Connect;
	
	$TableName = "test";
	$FieldNames = array("Item","City","DateReceived","Quantity","Price");
	$DataTypes = array("varchar", "date", "int", "decimal");
	$Sizes = array("25", "10");
	$Decimals = array("3,2");
	
	$DropTableString = "Drop Table $TableName";
	mysqli_query($Connect, $DropTableString);
	
	$CreateTableString = "Create Table $TableName
							($FieldNames[0] $DataTypes[0]($Sizes[0]), 
							$FieldNames[1] $DataTypes[0]($Sizes[1]),
							$FieldNames[2] $DataTypes[1],
							$FieldNames[3] $DataTypes[2],
							$FieldNames[4] $DataTypes[3]($Decimals[0])
							)";
							
	$Success = mysqli_query($Connect, $CreateTableString);
	
	if($Success)
		echo"Create table was successful.";
	else
		echo"Unable to create test table.";
}


function InsertIntoTable()
{
	
	global $Connect;
	
	$InsertString1 = "Insert Into test values 
                                         ('Tea', 'Toronto', '2015-05-31', '15', '6.45')";
	$InsertString2 = "Insert Into test values 
                                         ('Milk', 'Kingston', '2014-06-17', '100', '0.99')";
										 
						
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
}

function BuildAndIssueSelectStatement()
{
	
	global $Connect;
	$QueryString = "Select * from test ORDER BY Item";
	
	
	$ResultSet = mysqli_query($Connect, $QueryString);
	if($ResultSet)
	{
		while($row = mysqli_fetch_array($ResultSet))
		echo "<p>$row[Item] $row[City]
						$row[DateReceived] $row[Quantity] $row[Price]</p>";					
	}
	else echo "Could not execute query";
}

function CloseConnection()
{
	global $Connect;
	
	$Close = mysqli_close($Connect);

	if(!$Close)
		echo "Connection NOT closed";

}

?>

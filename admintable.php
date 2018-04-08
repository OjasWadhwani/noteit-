<?php
$servername="localhost";
$username="root";
$password="";
$dbname="noteit";
$conn = new mysqli ($servername,$username,$password,$dbname);
if ($conn->/*.for->objectcall*/connect_error) {
	die("Connection_Failed: "./*cannot use +*/$conn->connect_error/*printed the error*/);
}
$sql="CREATE TABLE admin
(	
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	personname VARCHAR(30)NOT NULL,
	username VARCHAR(30)NOT NULL,
	password VARCHAR(30)NOT NULL,
	reg_date TIMESTAMP	
)";
if ($conn->query($sql) === TRUE) 
{
	echo "Table created succesfully";	# code...
}else{
	echo"Error creating Table".$conn->error;
}
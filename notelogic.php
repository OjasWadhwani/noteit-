<?php
	/*include("noteconfig.php");*/
	$servername="localhost";
	$username="root";
	$password="";
	$dbname = "noteit";
	$conn = new mysqli($servername, $username ,$password,$dbname);
		if($conn->connect_error)
		{
			die("Connection Failed: ".$conn->connect_error);
		}
	/*$myusername = mysqli_real_escape_string($db,$_POST['username']);
   	$mypassword = mysqli_real_escape_string($db,$_POST['password']);*/
   	session_start();
   	/*if(isset($_POST['note']))
   	{
   		$n=$_POST['note'];
   	}
 	if(isset($_POST['title']))
 	{
   		$t=$_POST['title'];  	
 	}*/
 	if(isset($_POST['note']) || isset($_POST['title']))
 	{
	$sql="INSERT INTO $_SESSION[login_user](title,note)
		VALUES ('".$_POST["title"]."','".$_POST["note"]."')";
		if($conn->query($sql) === TRUE)	
		{
			//echo"Note entereed successfully";
			header("location: note.php");
		}
	}
  	/*include 'notesignup.php';
  	include 'note.php';*/ 
  	/*$sql="INSERT INTO $myusername(title,note)
		VALUES('".$_POST["title"]."','"$_POST["note"]."')"; 	
*/

		


//mysqli_close($con);
 
	$conn->close();
?>
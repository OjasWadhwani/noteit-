login<?php
 include("noteconfig.php");

// Create connection
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $mypassword = mysqli_real_escape_string($db,$_POST['password']);

$sql = "INSERT INTO admin (username, password)
VALUES ('$myusername', '$mypassword')";

if ($db->query($sql) === TRUE) {
    echo "<h4>Entered in admin table successfully</h4>";
} else {
    echo "Error: admintable" . $sql . "<br>" . $db->error;
}

$sql="CREATE TABLE $myusername
(	
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(30)NOT NULL,
	note VARCHAR(30)NOT NULL,
	reg_date TIMESTAMP	
)";

 if ($db->query($sql) === TRUE) {
    echo "<h4>Registered successfully</h4><br><p>Please click here to login into your useraccount on noteit!<a href='notelogin.php'>Login</a>";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
?>
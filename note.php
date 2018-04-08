<!DOCTYPE html>
<html>
<head>
	<title>Note Making Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="note.css">
	<script type="text/javascript" src="note.js"></script>
</head>
<body>
<?php 
	include ('notelogic.php');
?>
<?php 
  include ('notesession.php');
?>
<nav class="navbar navbar-fixed-top" style="background-color: #191970">
  <div class="container-fluid header">
    <div class="navbar-header">
    <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>-->
      <!--<a class="navbar-brand" href="#">&nbsp<span class="glyphicon glyphicon-align-justify"></span>-->
      <a class="navbar-brand" style="font-size:30px; color: #7B68EE" href="#">&nbsp &nbsp noteit!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <!--<ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>-->
      <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
        <li><a href="notelogout.php" style="color: #7B68EE";><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
<div class="row">
	<div class="col-xs-2 options">
    <h3 style="text-align: center;">About noteit!</h3>
    <p style="text-align: justify;">&nbsp &nbsp &nbsp noteit! is a natural note-taking environment developed by Ojas Wadhwani,a BITS-Pilani Computer Science undergraduate for users who want to store and access thier notes easily.</p>
		<!--<ul style="list-style-type: none;">
			<li><span class="glyphicon glyphicon-file"></span>&nbsp Notes</li>
			<li><span class="glyphicon glyphicon-time"></span>&nbsp Reminders</li>
		</ul>	
		<hr>
		<h3>Labels</h3>
		<ul style="list-style-type: none;">
			<li><span class="glyphicon glyphicon-tag"></span>&nbsp Work</li>
			<li><span class="glyphicon glyphicon-tag"></span>&nbsp Inspiration</li>
		</ul>
		<h6>Archive</h6>-->
		</div>
	<div class="col-md-9 notespanel">
		<!--<h1>Notes here!</h1>
		<h1>Notes</h1>-->
		<form action="notelogic.php" method="post" class="form1">
			<span class="title" ><input type="text" placeholder="Title" id="title" name="title"></span>
			<br>
			<span class="note"><input type="text" id="note" name="note" placeholder="Take a Note!" style="height: 200px; width:500px;"></span>
			<br>
      <br>
			<input type="submit" name="submit" id="submit" value="noteit!">

		</form>
	</div>
</div>
<br>
<br>
<br>
<br>
<br> 
<!--<div class="row">
	<div class="col-xs-9">-->
	<?php
			$con=mysqli_connect($servername, $username ,$password,$dbname);
// Check connection
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

	$sql="SELECT title,note FROM $_SESSION[login_user] ORDER BY title";
	if ($result=mysqli_query($con,$sql))	
  	{
      while ($row=mysqli_fetch_row($result))
      {
        $i=4;
        if($i%4==0)
        {
          print "<div class='row'>";
        }
    	  print "<div class=col-xs-3 style='text-align:center;float:left;   height:200px;box-shadow: 1px 1px; background-color: rgb(255,255,141)'>";
              //echo"<div><a class='glyphicon glyphicon-remove' style='text-align:left;'></a></div>";
  						print "<h3>" . $row[0] . "</h3>";
  						print "<p>" . $row[1] . "</p>";
        print "</div>";
        if($i%4==3)
        {
          print "</div>";
        }
        $i++; 
    	}
  		//mysqli_free_result($result);
	}
	?>
 < 
</div>

</body>
</html>
</html>
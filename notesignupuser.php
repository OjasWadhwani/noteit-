
<html>
   
   <head>
      <title>Register New User</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register New User</b></div>
				
            <div style = "margin:30px">
               
               <form action = "notesignup.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">Already Have Account? <a href="login.php">Login Here</a></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>


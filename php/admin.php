<?php
	include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="form">
    <form name="form" method="POST" onsubmit="return isvalid()"action="adminlogin.php">
        <h1>Sign in</h1>
        <input type="email" id="email"name="email"placeholder="Email"  />
        <input type="password"  id="password"name="password"placeholder="Password"/>
        <a href="#">Forgot your password?</a>
        <input type ="submit" value="Sign In" name="submit"/>
    </form>
    </div>
    <script>
        function isvalid()
        {
            var email=document.form.email.value;
            var pass=document.form.password.value;
            if(email.length=="" && pass.length=="")
            {
                alert("Email and Password is empty");            
                return false
            }
            else{
                if(email.length=="")
                 {
                alert("Email  is empty!!!");            
                return false
                }
                if(pass.length=="")
                {
                alert("Password  is empty!!!");            
                return false
                }
            }
         }
    
     </script>
</body>
</html>
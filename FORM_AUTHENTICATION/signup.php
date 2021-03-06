<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FORM AUTHENTICATION</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<h2>SIGN UP FORM</h2>   
  <div class="container">
   <table cellpadding="10" cellspacing="10" >
       
        <div class="top">
          <form method="post" action="validate.php">
            <tr><th>First name</th><td><input type="text" name="firstname" required></tr> 
             <tr><th>Last name</th><td><input type="text" name="lastname" required></tr>
             <tr><th>Email</th><td><input type="email" name="email" required></tr>
             <tr><th>Number</th><td><input type="number" name="number" required></tr>
             <tr><th>Password</th><td><input type="password" name="password" required></tr>
             <tr><td colspan="2" ><input type="submit" name="signup" value="signup" ></td></tr>
             <h3>Already have an account?<a href="login.php">login</a></h3>
       </div>  
       </form>
    </table>   
  </div> 
  <b><footer>CREATED BY IBUKUN SAMUEL</footer> <b>
</body>
</html>
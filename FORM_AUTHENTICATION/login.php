<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FORM AUTHENTICATION</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<h2>LOGIN FORM</h2>   
  <div class="container">
   <table cellpadding="10" cellspacing="10" >
       
        <div class="top">
          <form method="post" action="validate.php">
          <tr><th>Email</th><td><input type="email" name="email"></tr>
          <tr><th>Password</th><td><input type="password" name="password"></tr>
          <tr><td colspan="2" ><input type="checkbox" name="remember" value="1" >Remember me</td></tr>
          <tr><td colspan="2" ><input type="submit" name="login" value="login" ></td></tr>
          <h3>You don't have an account yet?<a href="signup.php">sign up</a></h3>
       </div>  
       </form>
    </table>   
  </div>  
  <b><footer>CREATED BY IBUKUN SAMUEL</footer> <b>
  </body>
</html>   
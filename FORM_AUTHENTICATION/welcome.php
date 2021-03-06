<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FORM AUTHENTICATION</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<h2>WELCOME!!!</h2>   
  <div class="container">

<?php
  session_start();
  echo "Welcome".' '.  $_SESSION['email']; 
  echo "<a href='logout.php'> logout </a>";
?>
   </div>
</body>
</html>
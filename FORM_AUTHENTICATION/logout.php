<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FORM AUTHENTICATION</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<h2>LOG OUT</h2>   
  <div class="container">

<?php
    session_start();
    session_destroy();
    echo "You successfully logged out.click here to <a href='login.php'> login again </a>"
?>

   </div>
</body>
</html>

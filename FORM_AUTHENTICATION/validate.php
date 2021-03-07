<?php
  $myemail = "hibeeeekay@gmail.com";
  $mypass  = "choice";

  if(isset($_POST['login'])){
     $email = $_POST['email'];
     $pass = $_POST['password'];
         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

          if($email == $myemail and $pass == $mypass){
        if(isset($_POST['remember'])){
            setcookie('email', $email, time()+ 3600 * 24 );
        } 
            session_start();
            $_SESSION['email'] = $email;
            header("location: welcome.php");   
     }else{
         echo "<b>Invalid Email or Password</b>.<br> click here to <a href='login.php'> try again </a>"; 
     }
  }else{
      header("location:login.php");
  }
  if(isset($_POST['signup'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['firstname'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $pass = $_POST['password'];
      header("location: login.php");   
  }
?>

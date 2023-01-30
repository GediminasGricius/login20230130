<?php
// echo md5("admin");
echo  password_hash("admin", PASSWORD_DEFAULT);

 session_start();
 require_once "patikrink_prisijungima.php";


  if (isset($_GET['logout'])){
      unset($_SESSION['user_id']);
      session_destroy();
      header('location: login.php');
      die();
  }




  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<hr>
SLAPTA INFORMACIJA
<hr>
<a href="duomenys.php">Slapti duomenys</a>
<hr>
<a href="index.php?logout=true">Atsijungti</a>
</body>
</html>


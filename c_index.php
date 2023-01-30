<?php

  if (isset($_COOKIE['user_id']) && $_COOKIE['user_id']!=0){
      echo "Sveikas sugryžęs: ".$_COOKIE['user_id']."<br>";
      echo "Jus buvote apsilankęs: ".$_COOKIE['load_count'];
      setcookie("load_count",$_COOKIE['load_count']+1,time()+60*60*24*31*12);
  }else{

      header('location: login.php');
      die();
  }
  if (isset($_GET['logout'])){
      setcookie('user_id',0);
      header('location: login.php');
      die();
  }




  ?>

<hr>
SLAPTA INFORMACIJA
<hr>
<a href="index.php?logout=true">Atsijungti</a>

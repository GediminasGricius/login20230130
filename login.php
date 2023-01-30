<?php
session_start();
if (isset($_POST['user'])){

    //
    if ($_POST['user']=='admin' && password_verify($_POST['password'], '$2y$10$yrEDYYHO/ws29/2utMR0Qu66mErAtaOufW3j8k5I7blUNviv.Uoq6')){

        $no=rand(1,1000);
        $_SESSION['user_id']=$no;

        header("location: index.php");
    }else{
        echo "Prisijungimai neteisingi";
    }
}
mail()

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
<form method="post"  >
    <input type="text" name="user"><br>
    <input type="password" name="password">
    <button>Prisijungti</button>
</form>

</body>
</html>
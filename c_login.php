<?php
if (isset($_POST['user'])){




    if ($_POST['user']=='admin' && $_POST['password']=='admin'){
        $no=rand(1,1000);
        echo "Sveikas naujas vartotojau: $no";

        setcookie("user_id",$no,time()+60*60*24*31*12);
        setcookie("load_count",1,time()+60*60*24*31*12);
        header("location: index.php");
    }else{
        echo "Prisijungimai neteisingi";
    }
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
<form method="post"  >
    <input type="text" name="user"><br>
    <input type="password" name="password">
    <button>Prisijungti</button>
</form>

</body>
</html>
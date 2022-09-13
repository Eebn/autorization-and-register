<?php
session_start();

if(!$_SESSION['user']){
   header('Location: autorization.php');
}

?>

<!doctype html>
<html leng = "en">
   <head>
      <meta charset="UTF-8">
      <title>Ваш профиль</title>
      <link rel="stylesheet" href="maincss.css">
   </head>
   <body>

   <form>
      <img src="<?= $_SESSION['user']['avatar']?>" width="100" alt="">
      <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
      <a href="#"><?= $_SESSION['user']['email']?></a>
      <a href="logout.php" class = "logout">Выход</a>

</form>
   </body>
</html>
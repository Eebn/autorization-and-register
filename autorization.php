<?php
session_start();
if($_SESSION['user']){
      header('Location: profile.php');
   }

?>

<!doctype html>
<html leng = "en">
   <head>
      <meta charset="UTF-8">
      <title>Авторизация и регистарция</title>
      <link rel="stylesheet" href="maincss.css">
   </head>
   <body>

<form action="signin.php" method="post">
   <label>Логин</label>
   <input type="text" name="login" placeholder="Введите свой логин">
   <label>Пароль</label>
   <input type="password" name="password" placeholder="Введите свой пароль">
   <button type="submit">Войти</button>
   <p>
      У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
   </p>

   <?php
         if ( $_SESSION && $_SESSION["message"] ) {
      echo '<p class="msg"> ' . $_SESSION["message"] . ' </p>';
   }
         unset ($_SESSION ["message"]);
          ?>

</form>

   </body>
</html>
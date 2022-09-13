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
      <link rel="stylesheet" href="maincss.css" type = "text/css">
   </head>
   <body>

<!-- ФОРМА РЕГИСТРАЦИИ -->



<form action= "signup.php" method ="post" enctype="multipart/form-data"> 
   <label>ФИО</label>
   <input type="text" name ="full_name" placeholder="Введите свое полное имя">
   <label>Логин</label>
   <input type="text" name = "login" placeholder="Введите свой логин">
   <label>Почта</label>
   <input type="email" name= "email" placeholder="Введите адрес своей почты">
   <label>Изображение профиля</label>
   <input type="file" name= "avatar">
   <label>Пароль</label>
   <input type="password" name ="password" placeholder="Введите свой пароль">
   <label>Подтверждение пароля</label>
   <input type="password" name ="password_confirm" placeholder="Подтвердите свой пароль">
   <button type="submit">Войти</button>
   <p>
      У вас уже есть аккаунт? - <a href="/autorization.php">авторизируйтесь</a>!
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
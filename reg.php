<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
	<title>Feedback</title>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css"> <!--ПОДКЛЮЧЕНИЕ ФРЕЙМВОРКА BOOTSRAP 3-->
		<link rel="stylesheet" href="css/main.css">  <!--ПОДКЛЮЧЕНИЕ ДОПОЛНИТЕЛЬНЫХ СТИЛЕЙ-->
			<link rel="stylesheet" href="css/style.css">   <!--ПОДКЛЮЧЕНИЕ ОСНОВНЫХ СТИЛЕЙ-->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,400italic,600,800,800italic,900italic,300' rel='stylesheet' type='text/css'> <!--ПОДКЛЮЧЕНИЕ ЩРИФТОВ С GOOGLE FONTS-->  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">   <!--ПОДКЛЮЧЕНИЕ ИКОНОК FONT-AWESOME-->
</head>
<body>

<nav id="nav" role='navigation'>
  <a class="clickr fontawesome-reorder"></a>
  <ul>
    <li class="active"><a href="index.php">IT технологии.ru</a></li>
    <li><a href="feedback.php">Обратная связь </a></li>
    <li><a href="foto.html">Фото</a></li>
    <li><a href="#">Интересное</a></li>
    <li><a href="reg.php">Регистрация</a></li>
  </ul>
</nav>


<?php

// Регистрация

//Соединямся с БАЗОЙ ДАННЫХ
mysql_connect("localhost", "root", "");
mysql_select_db("status");

if(isset($_POST['submit']))
{
    $err = array();

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }
    
    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }
    
    //проверяем, не существует ли пользователя с таким именем
    $query = mysql_query("SELECT COUNT(user_id) FROM users WHERE user_login='".mysql_real_escape_string($_POST['login'])."'");
    if(mysql_result($query, 0) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }
    
     //Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {
        
        $login = $_POST['login'];
        
        //Убираем лишние пробелы и делаем двойное шифрование
        $password = md5(md5(trim($_POST['password'])));
        
        mysql_query("INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        header("Location: login.php"); exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}

?>

<form method="POST">

Логин <input name="login" type="text" class="feedback-input">   
Пароль <input name="password" type="password" class="feedback-input">
<input name="submit" type="submit" value="Зарегистрироваться">
  </form>



    <footer id="footer">
            
            <p>Сайт Никиты Фролова  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GITHUB &nbsp;<a href="https://github.com/nekitfrolov" target="_blank">nekitfrolov</a></p>
            
        </footer>



</body>
</html>
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

<!--НАПИСАНИЕ КОДА МЕНЮ-->
<nav id="nav" role='navigation'>
  <a class="clickr fontawesome-reorder"></a>
  <ul>
    <li class="active"><a href="index.php">IT технологии.ru</a></li>
    <li><a href="feedback.php">Обратная связь </a></li>
    <li><a href="foto.html">Фото</a></li>
    <li><a href="#">Интересное</a></li>
    <li><a href="reg.php">Регистрация</a></li>
  </ul>
</nav>   <!--НАПИСАНИЕ КОДА МЕНЮ-->



<!--НАПИСАНИЕ КОДА ФОРМЫ-->
<form>
		<input type="hidden" name="project_name" class="feedback-input" value="Site Name">
		<input type="hidden" name="admin_email" class="feedback-input" value="frolovnekit2017@yandex.ru">
		<input type="hidden" name="form_subject" class="feedback-input" value="Form Subject">
		<!-- END Hidden Required Fields -->

		<input type="text" name="Name" class="feedback-input" placeholder="Введите ваше имя" required><br>
		<input type="text" name="E-mail" class="feedback-input" placeholder="Введите ваш email" required><br>
		<input type="text" name="Phone" class="feedback-input" placeholder="Введите ваш телефон"><br>
  <input type="submit" value="Отправить"/>
</form>    <!--НАПИСАНИЕ КОДА ФОРМЫ-->



<!--НАПИСАНИЕ КОДА ФУТЕРА-->
	<footer id="footer">
			
			 <p>Сайт Никиты Фролова  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GITHUB &nbsp;<a href="https://github.com/nekitfrolov" target="_blank">nekitfrolov</a></p>
		</footer>   
<!--НАПИСАНИЕ КОДА ФУТЕРА-->

	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>   <!--ПОДКЛЮЧЕНИЕ СКРИПТОВ-->
	<script src="js/main.js"></script>
<script src="js/common.js"></script>
</body>
</html>
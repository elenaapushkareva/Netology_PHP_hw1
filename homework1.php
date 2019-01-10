<!DOCTYPE> 
<html lang="ru">
    <head>
        <?php  
$name = 'Елена';
$age = 31;
$email = 'pushkareva.1@gmail.com';
$city = 'Москва';
$about = 'fullstack developer';
        ?>
<title> 
<?php 
echo($name.' – '.$about); 
        ?> 
</title> 
<meta charset="utf-8"> 
<style> 
body { 
font-family: sans-serif; 
} 
</style> 
</head> 
<body> 
<h1>Страница пользователя <?php echo $name ?></h1> 
<dl> 
<dt>Имя</dt> 
<dd><?php echo $name ?></dd> 
<dt>Возраст</dt> 
<dd><?php echo $age ?></dd> 
<dt>Адрес электронной почты</dt> 
<dd><a href="<?php echo $email ?>"><?php echo $email ?></a></dd> 
<dt>Город</dt> 
<dd><?php echo $city ?></dd> 
<dt>О себе</dt> 
<dd><?php echo $about ?></dd> 
</dl> 
</body> 
</html>
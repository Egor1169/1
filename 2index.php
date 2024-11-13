<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Фото Галерея</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Добро пожаловать в вашу фотогалерею!</h1>
<p>Пожалуйста, загрузите изображения.</p>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image" accept="image/jpeg" required>
<input type="submit" value="Загрузить изображение">
</form>
</body>
</html>

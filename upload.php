<?php
$images = scandir('uploads');
$images = array_diff($images, array('.', '..'));
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Галерея изображений</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Галерея изображений</h1>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image" accept="image/*" required>
<input type="text" name="description" placeholder="Описание изображения" required>
<input type="submit" value="Загрузить изображение">
</form>

<h2>Ваши изображения</h2>
<div class="gallery">
<?php foreach ($images as $image): ?>
<div class="thumbnail">
<a href="uploads/<?php echo $image; ?>" target="_blank">
<img src="thumbnails/<?php echo $image; ?>" alt="<?php echo $image; ?>">
</a>
<div class="description"><?php echo $image; ?></div>
</div>
<?php endforeach; ?>
</div>
</div>
</body>
</html>
<?php
$target_dir = "uploads/";
$thumbnail_dir = "thumbnails/";
$description = $_POST['description'];

// Проверка на существование изображения
if (isset($_FILES['image'])) {
$target_file = $target_dir . basename($_FILES["image"]["name"]);

// Присваиваем уникальное имя каждой загружаемой картинке
if (file_exists($target_file)) {
echo "Изображение с таким именем уже существует.";
} else {
// Перемещаем загруженный файл в целевую папку
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
// Создание превью
createThumbnail($target_file, $thumbnail_dir . basename($_FILES["image"]["name"]));
echo "Изображение ". htmlspecialchars(basename($_FILES["image"]["name"])). " загружено.";
header('Location: index.php'); // Перенаправление обратно на главную страницу
} else {
echo "Ошибка загрузки изображения.";
}
}
}

// Функция создания превью
function createThumbnail($pathToImage, $pathToThumbnail) {
$img = imagecreatefromjpeg($pathToImage);
$thumbnail = imagecreatetruecolor(150, 100);
imagecopyresampled($thumbnail, $img, 0, 0, 0, 0, 150, 100, imagesx($img), imagesy($img));

// Добавление текущей даты и времени
$date = date("Y-m-d H:i:s");
$textColor = imagecolorallocate($thumbnail, 255, 255, 255);
imagettftext($thumbnail, 12, 0, 10, 20, $textColor, 'path/to/font.ttf', $date);

imagejpeg($thumbnail, $pathToThumbnail);
imagedestroy($img);
imagedestroy($thumbnail);
}
?>

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

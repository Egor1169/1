<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Фотогалерея</title>
<link rel="stylesheet" href="styles.css"> <!— Подключаем файл CSS —>
</head>
<body>

<h1>Фотогалерея</h1>

<!— Форма загрузки изображений —>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="image" accept="image/*" required>
<input type="submit" value="Загрузить">
</form>

<!— Модальное окно —>
<div id="myModal" class="modal">
<span class="close-modal">&times;</span>
<img class="modal-content" id="modalImage" alt="Увеличенное изображение">
<div id="caption"></div>
</div>

<!— Ваша галерея —>
<div class="gallery">
<?php
$images = glob("uploads/*.*");
foreach($images as $image) {
echo '<div class="thumbnail" onclick="openModal(\'' . $image . '\')">';
echo '<img src="' . $image . '" alt="Image" />';
echo '</div>';
}
?>
</div>

<script>
function openModal(imageSrc) {
document.getElementById("myModal").style.display = "block";
document.getElementById("modalImage").src = imageSrc;
document.getElementById("caption").innerHTML = imageSrc;
}

document.querySelector(".close-modal").onclick = function() {
document.getElementById("myModal").style.display = "none";
}
</script>

</body>
</html>

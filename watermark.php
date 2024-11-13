<?php
function addWatermark($imagePath, $watermarkPath) {
$image = imagecreatefromjpeg($imagePath);
$watermark = imagecreatefrompng($watermarkPath);

$imageWidth = imagesx($image);
$imageHeight = imagesy($image);
$watermarkWidth = imagesx($watermark);
$watermarkHeight = imagesy($watermark);

// Установка позиции водяного знака внизу справа
$destX = $imageWidth - $watermarkWidth - 10;
$destY = $imageHeight - $watermarkHeight - 10;

// Нанесение водяного знака на изображение
imagecopy($image, $watermark, $destX, $destY, 0, 0, $watermarkWidth, $watermarkHeight);

imagejpeg($image, $imagePath);
imagedestroy($image);
imagedestroy($watermark);
}

// Примените функцию для загруженных изображений
// addWatermark('uploads/example.jpg', 'path_to_watermark.png');
?>

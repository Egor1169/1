<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фото-галерея</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lightbox.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css">
</head>
<body>
    <div class="header-block">
        <h1>Фото-галерея <img src="https://raw.githubusercontent.com/primer/octicons/main/icons/file-media-24.svg" alt="gallery icon"></h1>
    </div>
    <div class="form-container">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="form-left">
            <div class="form-group">
                <label for="image" class="custom-file-upload">
                    <span>Выберите изображение</span>
                    <img src="https://raw.githubusercontent.com/primer/octicons/main/icons/file-media-16.svg" alt="file icon">
                </label>
                <input type="file" name="image" id="image" required>
            </div>
            <div class="form-group">
                <label for="description" class="custom-file-upload">
                    <span>Описание:</span>
                    <img src="https://raw.githubusercontent.com/primer/octicons/main/icons/pencil-16.svg" alt="pencil icon">
                </label>
                <input type="text" name="description" id="description" required>
            </div>
            <button type="submit">Загрузить
                <img src="https://raw.githubusercontent.com/primer/octicons/main/icons/desktop-download-16.svg" alt="download icon">
            </button>
        </form>
    </div>
    <a href="gallery.php">Перейти к галерее</a>
</body>
</html>

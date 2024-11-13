/* Общие стили для всей страницы */
body {
font-family: 'Arial', sans-serif;
background-color: #f0f0f0;
margin: 0;
padding: 20px;
display: flex;
flex-direction: column;
align-items: center;
color: #333;
}

/* Стили заголовка */
h1 {
margin-bottom: 20px;
text-align: center;
color: #2c3e50;
font-size: 2.5em;
}

/* Стили для формы загрузки */
form {
display: flex;
flex-direction: column;
align-items: center;
margin-bottom: 20px;
}

/* Стили для кнопок и файловых полей */
input[type="file"] {
margin-bottom: 10px;
padding: 10px;
border: 2px solid #3498db;
border-radius: 5px;
transition: border-color 0.3s;
}

input[type="file"]:hover {
border-color: #2980b9; /* Темно-синий при наведении */
}

input[type="submit"] {
background-color: #3498db; /* Синий цвет */
color: white;
border: none;
padding: 10px 15px;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s, transform 0.3s; /* Добавляем трансформацию */
}

input[type="submit"]:hover {
background-color: #2980b9; /* Более темный синий */
transform: scale(1.05); /* Увеличение кнопки при наведении */
}

/* Эффект плавного появления */
@keyframes fadeIn {
from {
opacity: 0;
transform: translateY(20px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

/* Стили для галереи изображений */
.gallery {
display: flex;
flex-wrap: wrap;
justify-content: center;
gap: 20px; /* Отступы между изображениями */
}

/* Стили для миниатюр изображений */
.thumbnail {
border: 3px solid #34495e; /* Темная рамка */
border-radius: 10px;
overflow: hidden;
max-width: 300px; /* Максимальная ширина миниатюры */
transition: transform 0.3s, box-shadow 0.3s; /* Плавные переходы для эффекта */
background-color: white; /* Фоновый цвет миниатюры */
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Тень для эффекта поднятия */
opacity: 0; /* Начальная непрозрачность */
animation: fadeIn 0.5s forwards; /* Применение анимации */
}

/* Плавное увеличение миниатюр при наведении */
.thumbnail:hover {
transform: translateY(-5px); /* Подъем при наведении */
box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Более сильная тень */
}

.thumbnail img {
width: 100%;
height: auto;
display: block;
border-radius: 0; /* Убираем закругление для изображений */
}

/* Стили для модального окна */
.modal {
display: none; /* Скрыто по умолчанию */
position: fixed;
z-index: 1000; /* Поверх всех элементов */
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto; /* Дозволяет прокрутку, если нужно */
background-color: rgba(0, 0, 0, 0.7); /* Полупрозрачный черный фон */
justify-content: center;
align-items: center;
text-align: center;
}

.modal-content {
max-width: 80%;
max-height: 80%;
margin: auto;
animation: fadeIn 0.3s; /* Эффект плавного появления */
}

.close-modal {
position: absolute;
top: 10px;
right: 25px;
color: white;
font-size: 35px;
font-weight: bold;
cursor: pointer;
}

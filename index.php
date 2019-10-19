﻿<?php
echo "<link href='css/bootstrap.css' rel='stylesheet'/>";
echo "<link href='css/mystyle_index.css' rel='stylesheet'/>";
echo "<html>

<head>
	<meta charset='utf-8' />
    <title>Главная страница</title>
</head>

<body>
    <script src='js/bootstrap.js'></script>

    <div class='divflex'>
        <div class='logo'></div>
        <!-- Верхняя панель -->
        <form class='formHeader'>
            <div class='form-inline'>
                <div class='form-group'>
                    <label for='login'>Логин:</label>
                    <input class='form-control' id='login'>
                </div>
                <div class='form-group'>
                    <label for='pwd'>Пароль:</label>
                    <input type='password' class='form-control' id='pwd'>
                </div>
                <div class='checkbox'>
                    <label><input type='checkbox'> Запомнить меня?</label>
                </div>
                <button type='submit' class='btn btn-default'>Войти</button>
            </div>
        </form>
        <!-- Верхняя панель -->
        <!-- Основной контент -->
        <form class='mainform'>
            <div class='btn-group-vertical'>
                <a class='btn btn-default'>Главная страница</a>
                <a href='lab_rab1.html' class='btn btn-default'>Лабораторная №1</a>
				<a href='lab_rab1.html' class='btn btn-default'>Лабораторная №2</a>
            </div>
            <p class='textFont'>
                Совмещение отдыха с познанием жизни, истории и культуры народов - одна из задач, которую в полной
                мере способен решать туризм. ... Социальное значение туризма .Туризм как вид отдыха помогает
                восстановить силы и трудоспособность человека и соответственно — психофизиологические ресурсы общества.
                Россия богата экскурсионными маршрутами и объектами: белокаменная Москва, Санкт–Петербург – город
                музей,
                многоликая Карелия, памятники древнерусских городов Золотого кольца, необъятный Байкал, вулканы
                Камчатки…
                Москва является самым посещаемым туристами местом в России. Величие Кремля, Красная площадь, Собор
                Василия
                Блаженного, Поклонная гора, незабываемые прогулки по Москве наполнят туристов русским духом, а
                посещение
                известных во всем мире музеев и галерей подарят непременно массу ярких впечатлений.
            </p>
        </form>
        <!-- Основной контент -->
        <!-- Нижняя панель -->
        <form class='formVault'>
            <div class='form-inline'>
                <p class='text-center'>
                    Рязань, 2019 г.
                </p>
            </div>
        </form>
        <!-- Нижняя панель -->
    </div>

</body>

</html>";
?>
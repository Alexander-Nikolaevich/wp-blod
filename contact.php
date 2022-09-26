<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>School</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('header.php');
    ?>

    <div class="container">
        <div class="section">
            <h1>Контакты</h1>
            <p>Тут будет номер телефона.</p>
            <a href="tel: <?php include('tel.php')?>"><?php include('tel.php')?></a><br>
            <a href="admin.php">Изменить номер телефона</a>
        </div>
    </div>
</body>
</html>
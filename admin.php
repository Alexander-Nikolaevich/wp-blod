<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/form_phone.css">
</head>
<body>
    <div class="container">
        <div class="form__wrap">
            <form action="edit.php" method="POST" role="form">
                <div class="form-group">
                    <ledeng>Форма администратора</ledeng><br>
                    <input type="text" class="form-control" name="phone" placeholder="Введите номер телефона">
                </div><br>

                <button type="submit" class="btn">Изменить телефон</button>

            </form>
        </div>    
    </div>
</body>
</html>
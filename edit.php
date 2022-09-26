<?php
$phone = $_POST['phone'];
$fd = fopen('tel.php', "w");
fwrite($fd, $phone);
echo "Запись успешно совершена <a href='/index.php'>Перейти на главную</a>"
?>

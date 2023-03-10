<!DOCTYPE html>
<html>
<head>
    <meta http-equiv= "Content-Type" content="text/html; charset-windows-1251"/>
    <title>Bame сообщение успешно отправлено</title>
</head>
<body>
<?php
    $back = "<p><a href=\"javascript: histor.back()">Вернуться назад</a></р>";
    if(.!empty($_POST['name']) and .!empty($_POST['phone]) and .!empty($_POST['mail'])
    and .!empty($_POST['message'])
    $name = trim(strip_tags($_POST['name'])).
    $phone = trim(strip_tags($_POST['phone]));
    $mail = trim(strip_tags($_POST['mail']));
    $message = trim(strip_tags($_POST[message']));
    mail('ek.frolova130998@gmail.com', 'Письмо с адрес вашего сайта',
    'Вам написал: '.$name.'<br/>Ero номер: '.$phone.'<br/>Его почта: '.$mail.'<br/>
Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
    echo "Ваше сообщение успешно отправлено!<br> Вы получите ответ в ближайшее время<br> $back";
    exit;
}
else {
    echo "Для отправки сообщения заполните все поля! $back";
    exit;
}
?>
</body>
</html>
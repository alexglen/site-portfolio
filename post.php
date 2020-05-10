
<meta http-equiv='refresh' content='37; url=http://cy50309.tmweb.ru/'>

<meta charset="UTF-8" />


<?php

// Получаем значения переменных из пришедших данных

$name = $_POST['name'];

$email = $_POST['email'];

$topic = $_POST['topic'];

$message = $_POST['message'];

 
// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме 

$mes = "Имя: $name \nE-mail: $email \nТема: $topic \nТекст: $message";


// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты

$send = mail ('alexsmoleev1990@gmail.ru',$topic,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");


if ($send == 'true')

{echo "Сообщение отправлено";}

// Если письмо не ушло — выводим сообщение об ошибке

else {echo "Ой, что-то пошло не так";}

?>
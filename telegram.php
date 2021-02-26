<?php

/* https://api.telegram.org/bot1616232472:AAFx6rkGTgVXM3FEFLbfYfUGwpozqGsJII8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$name =     $_POST['name'];
$email =    $_POST['email'];
$phone =    $_POST['phone'];
$comment =  $_POST['comment'];

$token = "1640063658:AAG0nAJMIZPQdK9lgfP4cyAK6dHeu59zWHw";
$chat_id = "-433338617";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: '          => $phone,
    'Email: '            => $email,
    'Комментарий: '      => $comment
);

foreach($arr as $key => $value) {

    $txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo "ok";
} else {
 echo "error";
}
?>
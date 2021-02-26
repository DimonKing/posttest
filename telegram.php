<?php

/* https://api.telegram.org/bot1616232472:AAFx6rkGTgVXM3FEFLbfYfUGwpozqGsJII8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$name =     $_POST['name'];
$email =    $_POST['email'];
$phone =    $_POST['phone'];
$comment =  $_POST['comment'];

$token = "1616232472:AAFx6rkGTgVXM3FEFLbfYfUGwpozqGsJII8";
$chat_id = "";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: '          => $phone,
    'Email: '            => $email,
    'Комментарий: '      => $comment
);

foreach($arr as $key => $value) {

    $txt .= "<b>" .$key. "</b>" .$value. "%0A";

};

$sendToTelegram = fopen("https://api.telegram.org/bot{token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
    echo "ok"
} else {
 echo "error"
}
?>
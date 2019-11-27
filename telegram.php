<?php

/* https://api.telegram.org/bot884212867:AAF30P9TWHa5sZsOIcfc3HtkxoB_NWSDF5M/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];
$people = $_POST['people'];
$message = $_POST['message'];
$token = "884212867:AAF30P9TWHa5sZsOIcfc3HtkxoB_NWSDF5M";
$chat_id = "-302937793";
$arr = array(
  'Имя клиента: ' => $name,
  'Дата: ' => $date,
  'Время: ' => $time,
  'Телефон: ' => $phone,
  'Количество человек' => $people,
  'Пожелания: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank_you.html');
} else {
  echo "Error";
}
?>
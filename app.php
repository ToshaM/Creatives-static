<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['text']);

if($name == '' || $email == '' || $phone == '' || $message == '') {
    echo 'Заполните все поля!';
}
else {
    file_put_contents('apps.txt', "$name $email $phone $message \n", FILE_APPEND);
    echo '1' ;
}
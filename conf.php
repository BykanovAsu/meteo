<?php
error_reporting(0);
//~ Старт сессии, файл должен быть сохранен без DOM информации
session_start();

include_once 'module.php';

//~ Параметры потключения к бд
$db_host = 'localhost';
$db_login = 'admin';
$db_passwd = '1234';
$db_name = 'meteo';

// подключаемся к бд
$db = new mysql(); //~ Создаем новый объект класса
$db -> connect($db_host, $db_login, $db_passwd, $db_name);
?>

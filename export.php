<head>
   <meta charset="utf-8">
   <title>База</title>
   <link href="styles/style.css" rel="stylesheet">
</head>

<?php
error_reporting(0); // Выключаем показ ошибок. Чтобы их видеть - вместо 0 поставьте E_ALL
// подключаемся к БД
include 'login.php';
require_once 'connection.php'; // подключаем скрипт
header('Content-Type: text/csv; charset=utf-8');
if ($auth->check()){

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_query($link, 'SET NAMES utf8');

if ($_POST['dan'] == "h")
{
  $result = mysqli_query($link, "SELECT * FROM `Hidromet`");
  $field = mysqli_num_fields($result);
  for($i = 0; $i < $field; $i++) {
  $csv_export = mysqli_fetch_field_direct($result,$i);
  $d[$i]=$csv_export->name;
}
  $csv_filename = 'Hidromet'.date('Y-m-d').'.csv';
  $output = fopen("export/".$csv_filename, 'w');
  fputcsv($output, $d, ";");
  while($row = mysqli_fetch_array($result)) {
    for ($i=0; $i<$field; $i++)
      $d[$i]=$row[$i];
    fputcsv($output, $d, ";");
  }
  echo("<h3><a href=export/$csv_filename>Сохранить</a></h3>");
}



elseif ($_POST['dan'] == "s")
{
  $result = mysqli_query($link, "SELECT * FROM `Stational`");
  $field = mysqli_num_fields($result);
  for($i = 0; $i < $field; $i++) {
  $csv_export = mysqli_fetch_field_direct($result,$i);
  $d[$i]=$csv_export->name;
}
  $csv_filename = 'Stational'.date('Y-m-d').'.csv';
  $output = fopen("export/".$csv_filename, 'w');
  fputcsv($output, $d, ";");
  while($row = mysqli_fetch_array($result)) {
    for ($i=0; $i<$field; $i++)
      $d[$i]=$row[$i];
    fputcsv($output, $d, ";");
  }
  echo("<h3><a href=export/$csv_filename>Сохранить</a></h3>");
}
elseif ($_POST['dan'] == "l")
{
  $result = mysqli_query($link, "SELECT * FROM `Lisemetric`");
  $field = mysqli_num_fields($result);
  for($i = 0; $i < $field; $i++) {
  $csv_export = mysqli_fetch_field_direct($result,$i);
  $d[$i]=$csv_export->name;
}
  $csv_filename = 'Lisimetric'.date('Y-m-d').'.csv';
  $output = fopen("export/".$csv_filename, 'w');
  fputcsv($output, $d, ";");
  while($row = mysqli_fetch_array($result)) {
    for ($i=0; $i<$field; $i++)
      $d[$i]=$row[$i];
    fputcsv($output, $d, ";");
  }
  echo("<h3><a href=export/$csv_filename>Сохранить</a></h3>");
}
}
else {
  print '<div class="form2"><h1>Авторизуйтесь</h1></div>';
}
?>

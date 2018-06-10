<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Импорт</title>
      <link href="styles/style.css" rel="stylesheet">
   </head>
   <body>

      <div class="graph">
      <h1>Выберите файл</h1>
      <form action="" method="post" enctype="multipart/form-data" class="form3">
         <h3> <input type="radio" name="course" value="h" />Гидрометеостанция </h3>
         <h3> <input type="radio" name="course" value="s" />Стационарная станция</h3>
         <h3> <input type="radio" name="course" value="l" />Лизиметрическая станция</h3>
         <input type="file" name="filename" size="20" class="button1"/>
         <input type="hidden" name="update" value="ok" />
         <input type="submit" value="Загрузить" class="button1"/>
      </form>
    </div>
   </body>
</html>

<?php
error_reporting(0); // Выключаем показ ошибок. Чтобы их видеть - вместо 0 поставьте E_ALL
include 'login.php';
// подключаемся к БД
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_query($link, 'SET NAMES utf8');

$max_file_size = 5; // Максимальный размер файла в МегаБайтах
if ($_POST['update'] == 'ok') {
    // СТАРТ Загрузка файла на сервер
    if ($_FILES["filename"]["size"] > $max_file_size * 1024 * 1024) {
        echo 'The SIZE of File is more than ' . $max_file_size . ' Mb!';
        //  include('file_upload3.php');
        exit;
    }

    if (!copy($_FILES["filename"]["tmp_name"], $path . $_FILES["filename"]["name"])) {
        echo 'Выберите файл!';
        exit;
    }
    setlocale(LC_ALL, 'en_US.utf8'); // Определяем параметры локали
    if (setlocale(LC_ALL, 0) == 'C')
        die('Your server does not suport LOCALS');

    $file = fopen('php://memory', 'w+');
    fwrite($file, iconv('CP1251', 'UTF-8', file_get_contents($_FILES["filename"]["name"])));
    rewind($file);

    if ($_POST['course'] == "h")
    $tr="`Hidromet`";
    elseif ($_POST['course'] == "s")
    $tr="`Stational`";
    elseif ($_POST['course'] == "l")
    $tr="`Lisemetric`";
  //  mysqli_query($link, "TRUNCATE TABLE ".$tr); // Очистка старой таблицы

    $r = 0; // это строки в файле

    while (($row = fgetcsv($file, 1000, ";")) != FALSE) // $file - имя файла; 1000 - длина; ;- это разделитель полей
        {
        $r++;
        if ($r == 1) {
            continue;
        } // Не дает записать в БД первую строку (бывает так, что первая строка используется для заголовков)

        if ($_POST['course'] == "h")
            $ins = "INSERT INTO `Hidromet`(`No`, `Time`, `mm`, `deg`, `msdo`, `Cdo`, `Prdo`, `hPado`, `mmcharp`, `WmI`, `HKBat`, `HKTemp`, `HLrH`)
          VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]', '$row[12]')";

        elseif ($_POST['course'] == "s")
            $ins = "INSERT INTO `Stational` (`Time`, `CThirdty`, `procdoThirdty`, `SmdoThirdty`, `CThirdtyF`, `pFdoThirdty`, `CSixty`, `procdoSixty`, `SmdoSixty`,
            `CSixtyF`, `pFdoSixty`, `CHThirdty`, `doHThirdty`, `SmdoHThirdty`, `CHThirdtyF`, `pFdoHThirdty`, `HKBatV`, `HKTempC`, `HKrH`)
           VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]',
            '$row[12]', '$row[13]', '$row[14]', '$row[15]', '$row[16]', '$row[17]', '$row[18]')";
        elseif ($_POST['course'] == "l")
            $ins = "INSERT INTO `Lisemetric`(`Date`, `Time`, `Tens30.1`, `Tens30.1max`, `Tens30.1min`, `Tens30.2`, `Tens30.2max`, `Tens30.2min`,
              `Vacuum30`, `Vacuum30max`, `Vacuum30min`, `Tens50.1`, `Tens50.1max`, `Tens50.1min`, `Tens50.2`, `Tens50.2max`, `Tens50.2min`,
              `Vacuum50`, `Vacuum50max`, `Vacuum50min`, `Tens120.1`, `Tens120.1max`, `Tens120.1min`, `Tens120.2`, `Tens120.2max`, `Tens120.2min`,
              `Vacuum120`, `Vacuum120max`, `Vacuum120min`, `Accu`, `Accumax`, `Accumin`, `UMP30.1`, `UMP30.2`, `UMP50.1`, `UMP50.2`, `UMP120.1`, `UMP120.2`,
              `EC30.1`, `EC30.2`, `EC50.1`, `EC50.2`, `EC120.1`, `EC120.2`, `Temp30.1`, `Temp30.2`, `Temp50.1`, `Temp50.2`, `Temp120.1`, `Temp120.2`, `Weight1`, `Weight2`,
              `Drain1`, `Drain1max`, `Drain1min`, `Drain2`, `Drain2max`, `Drain2min`)
             VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]',
               '$row[12]', '$row[13]', '$row[14]', '$row[15]', '$row[16]', '$row[17]', '$row[18]', '$row[19]', '$row[20]', '$row[21]', '$row[22]', '$row[23]',
               '$row[24]', '$row[25]', '$row[26]', '$row[27]', '$row[28]', '$row[29]', '$row[30]', '$row[31]', '$row[32]', '$row[33]', '$row[34]', '$row[35]',
               '$row[36]', '$row[37]', '$row[38]', '$row[39]', '$row[40]', '$row[41]', '$row[42]', '$row[43]', '$row[44]', '$row[45]', '$row[46]', '$row[47]',
               '$row[48]', '$row[49]', '$row[50]', '$row[51]', '$row[52]', '$row[53]', '$row[54]', '$row[55]', '$row[56]', '$row[57]')";
               else {
                 echo("Выберите, что импортировать!");
                 exit;
               }
        mysqli_query($link, $ins);
        echo mysqli_errno($link) . ": " . mysqli_error($link); // это вывод результата. если че, то можно закоментить
    }
    fclose($file);
    unlink($_FILES["filename"]);
} else {
    //echo("Error");
}

?>

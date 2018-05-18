<head>
   <meta charset="utf-8">
   <title>База</title>
   <link href="styles/style.css" rel="stylesheet">
</head>

<a href="index.php" class="one">Home</a>
<div class="insert1">
  <h1>Гидрометеостанция</h1>
 <form method="POST" action="" class="form4">
  <p> <input name="num" type="text" placeholder="No" class="text" /></p>
  <p> <input name="time" type="text" placeholder="Time"class="text"/></p>
  <p> <input name="mm" type="text" placeholder="#:1mm"class="text"/></p>
  <p> <input name="deg" type="text" placeholder="#2:deg:1"class="text"/></p>
  <p> <input name="msdo" type="text" placeholder="#3:m/s:(do.)"class="text"/></p>
  <p> <input name="cdo" type="text" placeholder="#4:C:(do.)"class="text"/></p>
  <p> <input name="procdo" type="text" placeholder="#5:%:(do.)"class="text"/></p>
  <p> <input name="hPado" type="text" placeholder="#6:hPa:(do.)"class="text"/></p>
  <p> <input name="mmdo" type="text" placeholder="#7:mm:(do.)"class="text"/></p>
  <p> <input name="WmI" type="text" placeholder="#8:W/ml:0"/class="text"></p>
  <p> <input name="HKBatV" type="text" placeholder="#HK Bat:V"/class="text"></p>
  <p> <input name="HKTempC" type="text" placeholder="#HK Temp:C"class="text"/></p>
  <p> <input name="HKrH" type="text" placeholder="#HK rH:%"/class="text"></p>
        <input type="submit" value="Отправить" class="button1"/>
 </form>
</div>
<div class="insert2">
   <h1>Стационарная</h1>
 <form method="POST" action="" class="form4">

  <p> <input name="time" type="text" placeholder="Time"class="text"/></p>
  <p> <input name="C1" type="text" placeholder="1:C:1"class="text"/></p>
  <p> <input name="procdoThirdty" type="text" placeholder="2:%:(do.)"class="text"/></p>
  <p> <input name="SmdoThirdty" type="text" placeholder="3:S/m:(do.)"class="text"/></p>
  <p> <input name="C4" type="text" placeholder="4:C:4"class="text"/></p>
  <p> <input name="pFdoThirdty" type="text" placeholder="5:pF:(do.)"class="text"/></p>
  <p> <input name="C2" type="text" placeholder="6:C:2"class="text"/></p>
  <p> <input name="procdoSixty" type="text" placeholder="7:%:(do.)"class="text"/></p>
  <p> <input name="SmdoSixty" type="text" placeholder="8:S/m:(do.)"/class="text"></p>
  <p> <input name="C5" type="text" placeholder="9:C:5"/class="text"></p>
  <p> <input name="pFdoThirdty" type="text" placeholder="10:pF:(do.)"class="text"/></p>
  <p> <input name="C3" type="text" placeholder="11:C:3"/class="text"></p>
  <p> <input name="procdoHThirdty" type="text" placeholder="12:%:(do.)"class="text"/></p>
  <p> <input name="SmdoHThirdty" type="text" placeholder="13:S/m:(do.)"class="text"/></p>
  <p> <input name="C6" type="text" placeholder="14:C:6"/class="text"></p>
  <p> <input name="pFdoHThirdty" type="text" placeholder="15:pF:(do.)"/class="text"></p>
  <p> <input name="HKBatV" type="text" placeholder="#HK Bat:C"class="text"/></p>
  <p> <input name="HKTempC" type="text" placeholder="#HK Temp:C"class="text"/></p>
  <p> <input name="HKrH" type="text" placeholder="#HK rH:%"/class="text"></p>
        <input type="submit" value="Отправить" class="button1"/>
 </form>


</div>
<div class="insert3">
  <h1>Лизиметрическая</h3>
 <form method="POST" action="" class="form4">
  <p> <input name="Date" type="text" placeholder="Date" class="text"/></p>
  <p> <input name="Time" type="text" placeholder="Time" class="text"/></p>
  <p> <input name="Tens301" type="text" placeholder="Tens30.1" class="text"/></p>
  <p> <input name="Tens301max" type="text" placeholder="Tens30.1max" class="text"/></p>
  <p> <input name="Tens301min" type="text" placeholder="Tens30.1min" class="text"/></p>
  <p> <input name="Tens302" type="text" placeholder="Tens30.2" class="text"/></p>
  <p> <input name="Tens302max" type="text" placeholder="Tens30.2max" class="text"/></p>
  <p> <input name="Tens302min" type="text" placeholder="Tens30.2min" class="text"/></p>
  <p> <input name="Vacuum30" type="text" placeholder="Vacuum30" class="text"/></p>
  <p> <input name="Vacuum30max" type="text" placeholder="Vacuum30max" class="text"/></p>
  <p> <input name="Vacuum30min" type="text" placeholder="Vacuum30min" class="text"/></p>
  <p> <input name="Tens501" type="text" placeholder="Tens50.1" class="text"/></p>
  <p> <input name="Tens501max" type="text" placeholder="Tens50.1max" class="text"/></p>
  <p> <input name="Tens501min" type="text" placeholder="Tens50.1min" class="text"/></p>
  <p> <input name="Tens502" type="text" placeholder="Tens50.2" class="text"/></p>
  <p> <input name="Tens502max" type="text" placeholder="Tens50.2max" class="text"/></p>
  <p> <input name="Tens502min" type="text" placeholder="Tens50.2min" class="text"/></p>
  <p> <input name="Vacuum50" type="text" placeholder="Vacuum50" class="text"/></p>
  <p> <input name="Vacuum50max" type="text" placeholder="Vacuum50max" class="text"/></p>
  <p> <input name="Vacuum50min" type="text" placeholder="Vacuum50min" class="text"/></p>
  <p> <input name="Tens1201" type="text" placeholder="Tens120.1" class="text"/></p>
  <p> <input name="Tens1201max" type="text" placeholder="Tens120.1max" class="text"/></p>
  <p> <input name="Tens1201min" type="text" placeholder="Tens120.1min" class="text"/></p>
  <p> <input name="Tens1202" type="text" placeholder="Tens120.2" class="text"/></p>
  <p> <input name="Tens1202max" type="text" placeholder="Tens120.2max" class="text"/></p>
  <p> <input name="Tens1202min" type="text" placeholder="Tens120.2min" class="text"/></p>
  <p> <input name="Vacuum120" type="text" placeholder="Vacuum120" class="text"/></p>
  <p> <input name="Vacuum120max" type="text" placeholder="Vacuum120max" class="text"/></p>
  <p> <input name="Vacuum120min" type="text" placeholder="Vacuum120min" class="text"/></p>
  <p> <input name="Accu" type="text" placeholder="Accu" class="text"/></p>
  <p> <input name="Accumax" type="text" placeholder="Accumax" class="text"/></p>
  <p> <input name="Accumin" type="text" placeholder="Accumin" class="text"/></p>
  <p> <input name="UMP301" type="text" placeholder="UMP30.1" class="text"/></p>
  <p> <input name="UMP302" type="text" placeholder="UMP30.2" class="text"/></p>
  <p> <input name="UMP501" type="text" placeholder="UMP50.1" class="text"/></p>
  <p> <input name="UMP502" type="text" placeholder="UMP50.2" class="text"/></p>
  <p> <input name="UMP1201" type="text" placeholder="UMP120.1" class="text"/></p>
  <p> <input name="UMP1202" type="text" placeholder="UMP120.2" class="text"/></p>
  <p> <input name="EC301" type="text" placeholder="EC30.1" class="text"/></p>
  <p> <input name="EC302" type="text" placeholder="EC30.2" class="text"/></p>
  <p> <input name="EC501" type="text" placeholder="EC50.1" class="text"/></p>
  <p> <input name="EC502" type="text" placeholder="EC50.2" class="text"/></p>
  <p> <input name="EC1201" type="text" placeholder="EC120.1" class="text"/></p>
  <p> <input name="EC1202" type="text" placeholder="EC120.2" class="text"/></p>
  <p> <input name="Temp301" type="text" placeholder="Temp30.1" class="text"/></p>
  <p> <input name="Temp302" type="text" placeholder="Temp30.2" class="text"/></p>
  <p> <input name="Temp501" type="text" placeholder="Temp50.1" class="text"/></p>
  <p> <input name="Temp502" type="text" placeholder="Temp50.2" class="text"/></p>
  <p> <input name="Temp1201" type="text" placeholder="Temp120.1" class="text"/></p>
  <p> <input name="Temp1202" type="text" placeholder="Temp120.2" class="text"/></p>
  <p> <input name="Weight1" type="text" placeholder="Weight1" class="text"/></p>
  <p> <input name="Weight2" type="text" placeholder="Weight2" class="text"/></p>
  <p> <input name="Drain1" type="text" placeholder="Drain1" class="text"/></p>
  <p> <input name="Drain1max" type="text" placeholder="Drain1max" class="text"/></p>
  <p> <input name="Drain1min" type="text" placeholder="Drain1min" class="text"/></p>
  <p> <input name="Drain2" type="text" placeholder="Drain2" class="text"/></p>
  <p> <input name="Drain2max" type="text" placeholder="Drain2max" class="text"/></p>
  <p> <input name="Drain2min" type="text" placeholder="Drain2min" class="text"/></p>
  <input type="submit" value="Отправить" class="button1"/>
 </form>
</div>
<?php
include_once("login.php");
error_reporting(0); // Выключаем показ ошибок. Чтобы их видеть - вместо 0 поставьте E_ALL
// подключаемся к БД
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

if (isset($_POST['num']) && isset($_POST['mm']) && isset($_POST['deg']) && isset($_POST['msdo'])
 && isset($_POST['cdo']) && isset($_POST['procdo']) && isset($_POST['hPado']) && isset($_POST['mmdo']) && isset($_POST['WmI'])
 && isset($_POST['HKBatV']) && isset($_POST['HKTempC']) && isset($_POST['HKrH'])){
$row[0]=$_POST['num'];
$row[1]=$_POST['time'];
$row[2]=$_POST['mm'];
$row[3]=$_POST['deg'];
$row[4]=$_POST['msdo'];
$row[5]=$_POST['cdo'];
$row[6]=$_POST['procdo'];
$row[7]=$_POST['hPado'];
$row[8]=$_POST['mmdo'];
$row[9]=$_POST['WmI'];
$row[10]=$_POST['HKBatV'];
$row[11]=$_POST['HKTempC'];
$row[12]=$_POST['HKrH'];

$ins="INSERT INTO `Hidromet`(`No`, `Time`, `mm`, `deg`, `msdo`, `Cdo`, `Prdo`, `hPado`, `mmcharp`, `WmI`, `HKBat`, `HKTemp`, `HLrH`)
 VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]', '$row[12]')";

 mysqli_query($link, 'SET NAMES utf8');
 $result = mysqli_query ($link, $ins);
}

 elseif (isset($_POST ['time']) && isset($_POST ['C1']) && isset($_POST ['procdoThirdty']) && isset($_POST ['SmdoThirdty']) && isset($_POST ['C4'])){
   $row[0]=$_POST['time'];
   $row[1]=$_POST['C1'];
   $row[2]=$_POST['procdoThirdty'];
   $row[3]=$_POST['SmdoThirdty'];
   $row[4]=$_POST['C4'];
   $row[5]=$_POST['pFdoThirdty'];
   $row[6]=$_POST['C2'];
   $row[7]=$_POST['procdoSixty'];
   $row[8]=$_POST['SmdoSixty'];
   $row[9]=$_POST['C5'];
   $row[10]=$_POST['pFdoThirdty'];
   $row[11]=$_POST['C3'];
   $row[12]=$_POST['procdoHThirdty'];
   $row[13]=$_POST['SmdoHThirdty'];
   $row[14]=$_POST['C6'];
   $row[15]=$_POST['pFdoHThirdty'];
   $row[16]=$_POST['HKBatV'];
   $row[17]=$_POST['HKTempC'];
   $row[18]=$_POST['HKrH'];

   $ins="INSERT INTO `Stational` (`Time`, `CThirdty`, `procdoThirdty`, `SmdoThirdty`, `CThirdtyF`, `pFdoThirdty`, `CSixty`, `procdoSixty`, `SmdoSixty`,
   `CSixtyF`, `pFdoSixty`, `CHThirdty`, `doHThirdty`, `SmdoHThirdty`, `CHThirdtyF`, `pFdoHThirdty`, `HKBatV`, `HKTempC`, `HKrH`)
  VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]',
   '$row[12]', '$row[13]', '$row[14]', '$row[15]', '$row[16]', '$row[17]', '$row[18]')";

   mysqli_query($link, 'SET NAMES utf8');
   $result = mysqli_query ($link, $ins);
  }

  elseif (isset($_POST ['Date']) && isset($_POST ['Time']) && isset($_POST ['Vacuum30']) && isset($_POST ['Vacuum30max']) && isset($_POST ['Vacuum30min'])){

    $row[0]=$_POST['Date'];
    $row[1]=$_POST['Time'];
    $row[2]=$_POST['Tens301'];
    $row[3]=$_POST['Tens301max'];
    $row[4]=$_POST['Tens301min'];
    $row[5]=$_POST['Tens302'];
    $row[6]=$_POST['Tens302max'];
    $row[7]=$_POST['Tens302min'];
    $row[8]=$_POST['Vacuum30'];
    $row[9]=$_POST['Vacuum30max'];
    $row[10]=$_POST['Vacuum30min'];
    $row[11]=$_POST['Tens501'];
    $row[12]=$_POST['Tens501max'];
    $row[13]=$_POST['Tens501min'];
    $row[14]=$_POST['Tens502'];
    $row[15]=$_POST['Tens502max'];
    $row[16]=$_POST['Tens502min'];
    $row[17]=$_POST['Vacuum50'];
    $row[18]=$_POST['Vacuum50max'];
    $row[19]=$_POST['Vacuum50min'];
    $row[20]=$_POST['Tens1201'];
    $row[21]=$_POST['Tens1201max'];
    $row[22]=$_POST['Tens1201min'];
    $row[23]=$_POST['Tens1202'];
    $row[24]=$_POST['Tens1202max'];
    $row[25]=$_POST['Tens1202min'];
    $row[26]=$_POST['Vacuum120'];
    $row[27]=$_POST['Vacuum120max'];
    $row[28]=$_POST['Vacuum120min'];
    $row[29]=$_POST['Accu'];
    $row[30]=$_POST['Accumax'];
    $row[31]=$_POST['Accumin'];
    $row[32]=$_POST['UMP301'];
    $row[33]=$_POST['UMP302'];
    $row[34]=$_POST['UMP501'];
    $row[35]=$_POST['UMP502'];
    $row[36]=$_POST['UMP1201'];
    $row[37]=$_POST['UMP1202'];
    $row[38]=$_POST['EC301'];
    $row[39]=$_POST['EC302'];
    $row[40]=$_POST['EC501'];
    $row[41]=$_POST['EC502'];
    $row[42]=$_POST['EC1201'];
    $row[43]=$_POST['EC1202'];
    $row[44]=$_POST['Temp301'];
    $row[45]=$_POST['Temp302'];
    $row[46]=$_POST['Temp501'];
    $row[47]=$_POST['Temp502'];
    $row[48]=$_POST['Temp1201'];
    $row[49]=$_POST['Temp1202'];
    $row[50]=$_POST['Weight1'];
    $row[51]=$_POST['Weight2'];
    $row[52]=$_POST['Drain1'];
    $row[53]=$_POST['Drain1max'];
    $row[54]=$_POST['Drain1min'];
    $row[55]=$_POST['Drain2'];
    $row[56]=$_POST['Drain2max'];
    $row[57]=$_POST['Drain2min'];

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
    mysqli_query($link, 'SET NAMES utf8');
    $result = mysqli_query ($link, $ins);
  }
   if ($result){
       echo "Информация занесена в базу данных";
   }

?>

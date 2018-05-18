<head>
   <meta charset="utf-8">
   <title>База</title>
   <link href="styles/style.css" rel="stylesheet">
</head>
<a href="index.php" class="one">Home</a>
<?php
include_once("login.php");
error_reporting(0); // Выключаем показ ошибок. Чтобы их видеть - вместо 0 поставьте E_ALL
// подключаемся к БД
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_query($link, 'SET NAMES utf8');
if ($_POST['dan'] == "h")
{
$result = mysqli_query($link, "SELECT * FROM `Hidromet`");
echo "<div class=\"display-file\">";
echo "<p><table width=75% border=\"1\"></p>";
echo "<tr><th><div class=\"block\">
 <div class=\"hover\">No</div>
 <span class=\"hidden\">номер точки</span>
 </div></th><th><div class=\"block\">
  <div class=\"hover\">Time</div>
  <span class=\"hidden\">время измерения</span>
  </div></th><th><div class=\"block\">
   <div class=\"hover\">#1:mm</div>
   <span class=\"hidden\">количество атмосферных осадков в капельном виде</span>
   </div></th><th><div class=\"block\">
    <div class=\"hover\">#2:deg:1</div>
    <span class=\"hidden\">направление ветра</span>
    </div></th><th><div class=\"block\">
     <div class=\"hover\">#3m/s:(do.)</div>
     <span class=\"hidden\">скорость ветра</span>
     </div></th><th><div class=\"block\">
      <div class=\"hover\">#4:С:(do.)</div>
      <span class=\"hidden\">температура воздуха</span>
      </div></th>
<th><div class=\"block\">
 <div class=\"hover\">5:%:(do.)</div>
 <span class=\"hidden\">относительная влажность воздуха</span>
 </div></th><th><div class=\"block\">
  <div class=\"hover\">#6:hPa:(do.)</div>
  <span class=\"hidden\">атмосферное давление</span>
  </div></th><th><div class=\"block\">
   <div class=\"hover\">#7:mm:(do.)</div>
   <span class=\"hidden\">количество атмосферных осадков в капельном виде</span>
   </div></th><th><div class=\"block\">
    <div class=\"hover\">#8:W/mI</div>
    <span class=\"hidden\">интенсивность солнечной радиации</span>
    </div></th><th><div class=\"block\">
     <div class=\"hover\">#HK Bat:V</div>
     <span class=\"hidden\">напряжение батареи питания</span>
     </div></th><th><div class=\"block\">
      <div class=\"hover\">#HK Twmo:C</div>
      <span class=\"hidden\">температура батареи питания</span>
      </div></th><th><div class=\"block\">
       <div class=\"hover\">#HK rH:%</div>
       <span class=\"hidden\">доля свободной памяти логгера</span>
       </div></th></tr>";
while ($row=mysqli_fetch_array($result)){
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>
<td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td></tr>";
}
echo "</table>";
echo "</div>";
}

elseif ($_POST['dan'] == "s") {
$result = mysqli_query($link, "SELECT * FROM `Stational`");
echo "<div class=\"display-file\">";
echo "<p><table width=75% border=\"1\"></p>";
echo "<tr><th><div class=\"block\">
 <div class=\"hover\">Time</div>
 <span class=\"hidden\">время измерения</span>
 </div></th>
 <th><div class=\"block\">
  <div class=\"hover\">1:C:1</div>
  <span class=\"hidden\">температура на глубине 30 см.</span>
  </div>
  </th><th><div class=\"block\">
   <div class=\"hover\">2:%:(do.)</div>
   <span class=\"hidden\">объемная влажность почвы на глубине 30 см</span>
   </div>
   </th><th><div class=\"block\">
    <div class=\"hover\">3:S/m:(do.)</div>
    <span class=\"hidden\">проводимость на глубине 30 см</span>
    </div>
    </th><th><div class=\"block\">
     <div class=\"hover\">4:C:4</div>
     <span class=\"hidden\">температура на глубине 30 см.</span>
     </div>
     </th><th><div class=\"block\">
      <div class=\"hover\">5:pF:(do.)</div>
      <span class=\"hidden\">потенциал почвенной влаги на глубине 30 см.</span>
      </div>
      </th>
<th><div class=\"block\">
 <div class=\"hover\">6:C:2</div>
 <span class=\"hidden\">температура на глубине 60 см.</span>
 </div>
 </th><th><div class=\"block\">
  <div class=\"hover\">7:%:(do.)</div>
  <span class=\"hidden\">объемная влажность почвы на глубине 60 см</span>
  </div>
  </th><th><div class=\"block\">
   <div class=\"hover\">8:S/m:(do.)</div>
   <span class=\"hidden\">проводимость на глубине 60 см</span>
   </div>
   </th><th><div class=\"block\">
    <div class=\"hover\">9:C:5</div>
    <span class=\"hidden\">температура на глубине 60 см.</span>
    </div>
    </th><th><div class=\"block\">
     <div class=\"hover\">10:pF:(do.)</div>
     <span class=\"hidden\">потенциал почвенной влаги на глубине 60 см.</span>
     </div>
     </th><th><div class=\"block\">
      <div class=\"hover\">11:C:3</div>
      <span class=\"hidden\">температура на глубине 130 см.</span>
      </div>
      </th><th><div class=\"block\">
       <div class=\"hover\">12:%:(do.)</div>
       <span class=\"hidden\">объемная влажность почвы на глубине 130 см</span>
       </div>
</th>
<th><div class=\"block\">
 <div class=\"hover\">13:S/m:(do.)</div>
 <span class=\"hidden\">проводимость на глубине 130 см</span>
 </div>
 </th><th><div class=\"block\">
  <div class=\"hover\">14:C:6</div>
  <span class=\"hidden\">температура на глубине 130 см.</span>
  </div>
  </th><th><div class=\"block\">
   <div class=\"hover\">15:pF:(do.)</div>
   <span class=\"hidden\">потенциал почвенной влаги на глубине 130 см.</span>
   </div>
   </th><th><div class=\"block\">
    <div class=\"hover\">#HK Bat:V</div>
    <span class=\"hidden\">напряжение батареи питания</span>
    </div></th><th><div class=\"block\">
     <div class=\"hover\">#HK Twmo:C</div>
     <span class=\"hidden\">температура батареи питания</span>
     </div></th><th><div class=\"block\">
      <div class=\"hover\">#HK rH:%</div>
      <span class=\"hidden\">доля свободной памяти логгера</span>
      </div></th></tr>";
while ($row=mysqli_fetch_array($result)){
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>
<td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td><td>$row[16]</td><td>$row[17]</td><td>$row[18]</td></tr>";
}
echo "</table>";
echo "</div>";
}

elseif ($_POST['dan'] == "l") {
$result = mysqli_query($link, "SELECT * FROM `Lisemetric`");
echo "<div class=\"display-file\">";
echo "<p><table width=100% border=\"1\"></[p]>";
echo "<tr><th><div class=\"block\">
 <div class=\"hover\">Date </div>
 <span class=\"hidden\">дата измерений</span>
 </div></th>
 <th><div class=\"block\">
  <div class=\"hover\">Time</div>
  <span class=\"hidden\">время измерения</span>
  </div></th>
  <th><div class=\"block\">
   <div class=\"hover\">Tens30.1 </div>
   <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 30см в первом монолите (среднее значение)</span>
   </div></th>
   <th><div class=\"block\">
    <div class=\"hover\">Tens30.1max </div>
    <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 30см в первом монолите (максимальное значение за интервал измерений)</span>
    </div></th>
    <th><div class=\"block\">
     <div class=\"hover\">Tens30.1min </div>
     <span class=\"hidden\">осмотическое давление почвенной влаги на глубине 30см в первом монолите (минимальное значение за интервал измерений)</span>
     </div></th>
     <th><div class=\"block\">
      <div class=\"hover\">Tens30.2 </div>
      <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 30см в втором монолите (среднее значение)</span>
      </div></th>
      <th><div class=\"block\">
       <div class=\"hover\">Tens30.2max </div>
       <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 30см в втором монолите (максимальное значение за интервал измерений)</span>
       </div></th>
       <th><div class=\"block\">
        <div class=\"hover\">Tens30.2min </div>
        <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 30см в втором монолите (минимальное значение за интервал измерений)</span>
        </div></th>
        <th><div class=\"block\">
         <div class=\"hover\">Vacuum30 </div>
         <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 30см (среднее значение)</span>
         </div></th>
         <th><div class=\"block\">
          <div class=\"hover\">Vacuum30max </div>
          <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 30см (максимальное значение за интервал измерений)</span>
          </div></th>
<th><div class=\"block\">
 <div class=\"hover\">Vacuum30min </div>
 <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 30см (минимальное значение за интервал измерений)</span>
 </div></th>
 <th><div class=\"block\">
  <div class=\"hover\">Tens50.1 </div>
  <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 50см в первом монолите (среднее значение)</span>
  </div></th>
  <th><div class=\"block\">
   <div class=\"hover\">Tens50.1max </div>
   <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 50см в первом монолите (максимальное значение за интервал измерений)</span>
   </div></th>
   <th><div class=\"block\">
    <div class=\"hover\">Tens50.1min </div>
    <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 50см в первом монолите (минимальное значение за интервал измерений)</span>
    </div></th>
    <th><div class=\"block\">
     <div class=\"hover\">Tens50.2 </div>
     <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 50см в втором монолите (среднее значение)</span>
     </div></th>
     <th><div class=\"block\">
      <div class=\"hover\">Tens50.2max </div>
      <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 50см в втором монолите (максимальное значение за интервал измерений)</span>
      </div></th>
      <th><div class=\"block\">
       <div class=\"hover\">Tens50.2min </div>
       <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 50см в втором монолите (минимальное значение за интервал измерений)</span>
       </div></th>
       <th><div class=\"block\">
        <div class=\"hover\">Vacuum50 </div>
        <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 50см (среднее значение)</span>
        </div></th>
        <th><div class=\"block\">
         <div class=\"hover\">Vacuum50max </div>
         <span class=\"hidden\">понижение давления в системе отбора проб воды с глубины 50см (максимальное значение)</span>
         </div></th>
         <th><div class=\"block\">
          <div class=\"hover\">Vacuum50min </div>
          <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 50см (минимальное значение)</span>
          </div></th>
<th><div class=\"block\">
 <div class=\"hover\">Tens120.1 </div>
 <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 120см в первом монолите (среднее значение)</span>
 </div></th>
 <th><div class=\"block\">
  <div class=\"hover\">Tens120.1max </div>
  <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 120см в первом монолите (максимальное значение за интервал измерений)</span>
  </div></th>
  <th><div class=\"block\">
   <div class=\"hover\">Tens120.1min </div>
   <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 120см в первом монолите (минимальное значение за интервал измерений)</span>
   </div></th>
   <th><div class=\"block\">
    <div class=\"hover\">Tens120.2 </div>
    <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 120см во втором монолите (среднее значение)</span>
    </div></th>
    <th><div class=\"block\">
     <div class=\"hover\">Tens120.2max </div>
     <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 120см в втором монолите (максимальное значение за интервал измерений)</span>
     </div></th>
     <th><div class=\"block\">
      <div class=\"hover\">Tens120.2min </div>
      <span class=\"hidden\"> осмотическое давление почвенной влаги на глубине 120см в втором монолите (минимальное значение за интервал измерений)</span>
      </div></th>
      <th><div class=\"block\">
       <div class=\"hover\">Vacuum120 </div>
       <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 120см (среднее значение)</span>
       </div></th>
       <th><div class=\"block\">
        <div class=\"hover\">Vacuum120max </div>
        <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 120см (максимальное значение)</span>
        </div></th>
        <th><div class=\"block\">
         <div class=\"hover\">Vacuum120min </div>
         <span class=\"hidden\"> понижение давления в системе отбора проб воды с глубины 120см (минимальное значение)</span>
         </div></th>
         <th><div class=\"block\">
          <div class=\"hover\">Accu </div>
          <span class=\"hidden\"> напряжение аккумулятора резервного питания (среднее значение)</span>
          </div></th>
<th><div class=\"block\">
 <div class=\"hover\">Accumax </div>
 <span class=\"hidden\"> напряжение аккумулятора резервного питания (максимальное значение)</span>
 </div></th>
 <th><div class=\"block\">
  <div class=\"hover\">Accumin </div>
  <span class=\"hidden\"> напряжение аккумулятора резервного питания (минимальное значение)</span>
  </div></th>
  <th><div class=\"block\">
   <div class=\"hover\">UMP30.1 </div>
   <span class=\"hidden\"> влажность почвы на глубине 30см в первом монолите</span>
   </div></th>
   <th><div class=\"block\">
    <div class=\"hover\">UMP30.2 </div>
    <span class=\"hidden\"> влажность почвы на глубине 30см во втором монолите</span>
    </div></th>
    <th><div class=\"block\">
     <div class=\"hover\">UMP50.1 </div>
     <span class=\"hidden\"> влажность почвы на глубине 50см в первом монолите</span>
     </div></th>
     <th><div class=\"block\">
      <div class=\"hover\">UMP50.2 </div>
      <span class=\"hidden\"> влажность почвы на глубине 50см во втором монолите</span>
      </div></th>
      <th><div class=\"block\">
       <div class=\"hover\">UMP120.1 </div>
       <span class=\"hidden\"> влажность почвы на глубине 120см в первом монолите</span>
       </div></th>
       <th><div class=\"block\">
        <div class=\"hover\">UMP120.2 </div>
        <span class=\"hidden\"> влажность почвы на глубине 120см во втором монолите</span>
        </div></th>
        <th><div class=\"block\">
         <div class=\"hover\">EC30.1 </div>
         <span class=\"hidden\"> электропроводность почвы на глубине 30см в первом монолите</span>
         </div></th>
         <th><div class=\"block\">
          <div class=\"hover\">EC30.2 </div>
          <span class=\"hidden\"> электропроводность почвы на глубине 30см во втором монолите</span>
          </div></th>
<th><div class=\"block\">
 <div class=\"hover\">EC50.1 </div>
 <span class=\"hidden\"> электропроводность почвы на глубине 50см в первом монолите</span>
 </div></th>
 <th><div class=\"block\">
  <div class=\"hover\">EC50.2 </div>
  <span class=\"hidden\"> электропроводность почвы на глубине 50см во втором монолите</span>
  </div></th>
  <th><div class=\"block\">
   <div class=\"hover\">EC120.1 </div>
   <span class=\"hidden\"> электропроводность почвы на глубине 120см в первом монолите</span>
   </div></th>
   <th><div class=\"block\">
    <div class=\"hover\">EC120.2 </div>
    <span class=\"hidden\"> электропроводность почвы на глубине 120см во втором монолите</span>
    </div></th>
    <th><div class=\"block\">
     <div class=\"hover\">Temp30.1 </div>
     <span class=\"hidden\"> температура почвы на глубине 30см в первом монолите</span>
     </div></th>
     <th><div class=\"block\">
      <div class=\"hover\">Temp30.2 </div>
      <span class=\"hidden\"> температура почвы на глубине 30см во втором монолите</span>
      </div></th>
      <th><div class=\"block\">
       <div class=\"hover\">Temp50.1 </div>
       <span class=\"hidden\"> температура почвы на глубине 50см в первом монолите</span>
       </div></th>
       <th><div class=\"block\">
        <div class=\"hover\">Temp50.2 </div>
        <span class=\"hidden\"> температура почвы на глубине 50см во втором монолите</span>
        </div></th>
        <th><div class=\"block\">
         <div class=\"hover\">Temp120.1 </div>
         <span class=\"hidden\"> температура почвы на глубине 120см в первом монолите</span>
         </div></th>
         <th><div class=\"block\">
          <div class=\"hover\">Temp120.2 </div>
          <span class=\"hidden\"> температура почвы на глубине 120см во втором монолите</span>
          </div></th>
<th><div class=\"block\">
 <div class=\"hover\">Weight 1 </div>
 <span class=\"hidden\"> масса первого монолита</span>
 </div></th>
 <th><div class=\"block\">
  <div class=\"hover\">Weight 2 </div>
  <span class=\"hidden\"> масса второго монолита</span>
  </div></th>
  <th><div class=\"block\">
   <div class=\"hover\">Drain1 </div>
   <span class=\"hidden\"> объём стока воды через дренаж первого монолита (среднее значение)</span>
   </div></th>
   <th><div class=\"block\">
    <div class=\"hover\">Drain1max </div>
    <span class=\"hidden\"> объём стока воды через дренаж первого монолита (максимальное значение)</span>
    </div></th>
    <th><div class=\"block\">
     <div class=\"hover\">Drain1min </div>
     <span class=\"hidden\"> объём стока воды через дренаж первого монолита (минимальное значение)</span>
     </div></th>
     <th><div class=\"block\">
      <div class=\"hover\">Drain2 </div>
      <span class=\"hidden\"> объём стока воды через дренаж второго монолита (среднее значение)</span>
      </div></th>
      <th><div class=\"block\">
       <div class=\"hover\">Drain2max </div>
       <span class=\"hidden\"> объём стока воды через дренаж второго монолита (максимальное значение)</span>
       </div></th>
       <th><div class=\"block\">
        <div class=\"hover\">Drain2min </div>
        <span class=\"hidden\"> объём стока воды через дренаж второго монолита (минимальное значение)</span>
        </div></th></tr>";
while ($row=mysqli_fetch_array($result)){
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>
<td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td><td>$row[16]</td>
<td>$row[17]</td><td>$row[18]</td><td>$row[19]</td><td>$row[20]</td><td>$row[21]</td><td>$row[22]</td><td>$row[23]</td><td>$row[24]</td>
<td>$row[25]</td><td>$row[26]</td><td>$row[27]</td><td>$row[28]</td><td>$row[29]</td><td>$row[30]</td><td>$row[31]</td><td>$row[32]</td>
<td>$row[33]</td><td>$row[34]</td><td>$row[35]</td><td>$row[36]</td><td>$row[37]</td><td>$row[38]</td><td>$row[39]</td><td>$row[40]</td>
<td>$row[41]</td><td>$row[42]</td><td>$row[43]</td><td>$row[44]</td><td>$row[45]</td><td>$row[46]</td><td>$row[47]</td><td>$row[48]</td>
<td>$row[49]</td><td>$row[50]</td><td>$row[51]</td><td>$row[52]</td><td>$row[53]</td><td>$row[54]</td><td>$row[55]</td><td>$row[56]</td><td>$row[57]</td></tr>";
}
echo "</table>";
echo "</div>";
}

else
  echo "<h3>Не сработало!</h3>";

?>

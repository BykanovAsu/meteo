<?php
   include 'login.php';
   if($adm)
   $page='
   <!DOCTYPE html>
   <html>

   <head>
      <meta charset="utf-8">
      <title>База</title>
      <link href="styles/style.css" rel="stylesheet">
   </head>
   <body>
      <script src="scripts/script.js"></script>
      <div class="import">
         <h1>Данные</h1>

         <form action="file_upload.php" method="POST" class="form2">
            <input name="bar" type="submit" value="Импорт из CSV" class="button1"/>
         </form>
         <form action="insert.php" method="POST" class="form4">
            <input name="bar" type="submit" value="Ручной ввод" class="button1"/>
         </form>
          <form action="data.php" method="POST" class="form4">
            <h3>Вывод данных:</h3>
            <p><input type="radio" name="dan" value="h"/>Гидрометеостанция</p>
            <p>  <input type="radio" name="dan" value="s"/>Стационарная станция</p>
            <p>  <input type="radio" name="dan" value="l"/>Лизимитрическая станция</p>
      <p>   <input name="data" type="submit" value="Вывод данных" class="button1"/></p>
       </form>
       <form action="export.php" method="POST" class="form4">
         <h3>Экспорт данных:</h3>
         <p><input type="radio" name="dan" value="h"/>Гидрометеостанция</p>
         <p>  <input type="radio" name="dan" value="s"/>Стационарная станция</p>
         <p>  <input type="radio" name="dan" value="l"/>Лизимитрическая станция</p>
   <p>   <input name="data" type="submit" value="Экспорт" class="button1"/></p>
    </form>
      </div>
      <div class="graph">
         <h1>Построение графиков</h1>
         <form action="chart.php"  method="post" enctype="multipart/form-data" class="form3">
            <input type="radio" name="type" value="l" checked="true"/>Линейный
            <input type="radio" name="type" value="b"/>Столбчатый
            <h3>Гидрометеостанция:</h3>
            <p>
               <input type="checkbox" id="3" name="data[]" value="mm" onclick="checkCB()"/>#1:mm
               <input type="checkbox" id="4" name="data[]" value="deg" onclick="checkCB()" />#2:deg:1
               <input type="checkbox" id="5" name="data[]" value="msdo" onclick="checkCB()" />#3:m/s:(do.)
               <input type="checkbox" id="6" name="data[]" value="Cdo" onclick="checkCB()" />#4:°C:(do.)
            </p>
            <p>
               <input type="checkbox" id="7" name="data[]" value="Prdo" onclick="checkCB()" />#5:%:(do.)
               <input type="checkbox" id="8" name="data[]" value="hPado" onclick="checkCB()" />#6:hPa:(do.)
               <input type="checkbox" id="9" name="data[]" value="mmcharp" onclick="checkCB()" />#7:mm:(do.)
               <input type="checkbox" id="10" name="data[]" value="WmI" onclick="checkCB()" />#8:W/mІ:0
            </p>
            <p>
               <input type="checkbox" id="11" name="data[]" value="HKBat" onclick="checkCB()" />#HK Bat:V
               <input type="checkbox" id="12" name="data[]" value="HKTemp" onclick="checkCB()" />#HK Temp:oC
               <input type="checkbox" id="13" name="data[]" value="HLrH" onclick="checkCB()" />#HK rH:%
            </p>
            <p>
         <form action="chart.php" method="post" enctype="multipart/form-data" class="form3">
            <h3>Стационарная станция:</h3>
            <p>
               <input type="checkbox" id="14" name="data1[]" value="CThirdty" onclick="checkCB()" />1:°C:1
               <input type="checkbox" id="15" name="data1[]" value="procdoThirdty" onclick="checkCB()" />2:%:(do.)
               <input type="checkbox" id="16" name="data1[]" value="SmdoThirdty" onclick="checkCB()" />3:S/m:(do.)
              </p>
               <p>
               <input type="checkbox" id="17" name="data1[]" value="CThirdtyF" onclick="checkCB()" />4:°C:4
               <input type="checkbox" id="18" name="data1[]" value="pFdoThirdty" onclick="checkCB()" />5:pF:(do.)
               <input type="checkbox" id="19" name="data1[]" value="CSixty" onclick="checkCB()" />6:°C:2
            </p>
            <p>
               <input type="checkbox" id="20" name="data1[]" value="procdoSixty" onclick="checkCB()" />7:%:(do.)
               <input type="checkbox" id="21" name="data1[]" value="SmdoSixty" onclick="checkCB()" />8:S/m:(do.)
               <input type="checkbox" id="22" name="data1[]" value="CSixtyF" onclick="checkCB()" />9:°C:5
             </p>
                <p>
               <input type="checkbox" id="23" name="data1[]" value="pFdoSixty" onclick="checkCB()" />10:pF:(do.)
               <input type="checkbox" id="24" name="data1[]" value="CHThirdty" onclick="checkCB()" />11:°C:3
               <input type="checkbox" id="25" name="data1[]" value="doHThirdty" onclick="checkCB()" />12:%:(do.)
            </p>
            <p>
               <input type="checkbox" id="26" name="data1[]" value="SmdoHThirdty" onclick="checkCB()" />13:S/m:(do.)
               <input type="checkbox" id="27" name="data1[]" value="CHThirdtyF" onclick="checkCB()" />14:°C:6
               <input type="checkbox" id="28" name="data1[]" value="pFdoHThirdty" onclick="checkCB()" />15:pF:(do.)
              </p>
                <p>
               <input type="checkbox" id="29" name="data1[]" value="HKBatV" onclick="checkCB()" />HK Bat:V
               <input type="checkbox" id="30" name="data1[]" value="HKTempC" onclick="checkCB()" />HK Temp:oC
               <input type="checkbox" id="31" name="data1[]" value="HKrH" onclick="checkCB()" />HK rH:%
            </p>
            <h3>Лизиметрическая станция:</h3>
            <p>
            <input type="checkbox" id="32" name="data2[]" value="Tens30.1" onclick="checkCB()" />Tens30.1
               <input type="checkbox" id="33" name="data2[]" value="Tens30.1max" onclick="checkCB()" />Tens30.1max
               <input type="checkbox" id="34" name="data2[]" value="Tens30.1min" onclick="checkCB()" />Tens30.1min
               <input type="checkbox" id="35" name="data2[]" value="Tens30.2" onclick="checkCB()" />Tens30.2
            </p>
            <p>
               <input type="checkbox" id="36" name="data2[]" value="Tens30.2max" onclick="checkCB()" />Tens30.2max
               <input type="checkbox" id="37" name="data2[]" value="Tens30.2min" onclick="checkCB()" />Tens30.2min
               <input type="checkbox" id="38" name="data2[]" value="Vacuum30" onclick="checkCB()" />Vacuum30
             </p>
                <p>
               <input type="checkbox" id="39" name="data2[]" value="Vacuum30max" onclick="checkCB()" />Vacuum30max
               <input type="checkbox" id="40" name="data2[]" value="Vacuum30min" onclick="checkCB()" />Vacuum30min
               <input type="checkbox" id="41" name="data2[]" value="Tens50.1" onclick="checkCB()" />Tens50.1
            </p>
            <p>
               <input type="checkbox" id="42" name="data2[]" value="Tens50.1max" onclick="checkCB()" />Tens50.1max
               <input type="checkbox" id="43" name="data2[]" value="Tens50.1min" onclick="checkCB()" />Tens50.1min
               <input type="checkbox" id="44" name="data2[]" value="Tens50.2" onclick="checkCB()" />Tens50.2
              </p>
                <p>
               <input type="checkbox" id="45" name="data2[]" value="Tens50.2max" onclick="checkCB()" />Tens50.2max
               <input type="checkbox" id="46" name="data2[]" value="Tens50.2min" onclick="checkCB()" />Tens50.2min
               <input type="checkbox" id="47" name="data2[]" value="Vacuum50" onclick="checkCB()" />Vacuum50
            </p>
            <p>
               <input type="checkbox" id="48" name="data2[]" value="Vacuum50max" onclick="checkCB()" />Vacuum50max
               <input type="checkbox" id="49" name="data2[]" value="Vacuum50min" onclick="checkCB()" />Vacuum50min
               <input type="checkbox" id="50" name="data2[]" value="Tens120.1" onclick="checkCB()" />Tens120.1
              </p>
               <p>
               <input type="checkbox" id="51" name="data2[]" value="Tens120.1max" onclick="checkCB()" />Tens120.1max
               <input type="checkbox" id="52" name="data2[]" value="Tens120.1min" onclick="checkCB()" />Tens120.1min
               <input type="checkbox" id="53" name="data2[]" value="Tens120.2" onclick="checkCB()" />Tens120.2
            </p>
            <p>
               <input type="checkbox" id="54" name="data2[]" value="Tens120.2max" onclick="checkCB()" />Tens120.2max
               <input type="checkbox" id="55" name="data2[]" value="Tens120.2min" onclick="checkCB()" />Tens120.2min
               <input type="checkbox" id="56" name="data2[]" value="Vacuum120" onclick="checkCB()" />Vacuum120
             </p>
                <p>
               <input type="checkbox" id="57" name="data2[]" value="Vacuum120max" onclick="checkCB()" />Vacuum120max
               <input type="checkbox" id="58" name="data2[]" value="Vacuum120min" onclick="checkCB()" />Vacuum120min
               <input type="checkbox" id="59" name="data2[]" value="Accu" onclick="checkCB()" />Accu
            </p>
            <p>
               <input type="checkbox" id="60" name="data2[]" value="Accumax" onclick="checkCB()" />Accumax
               <input type="checkbox" id="61" name="data2[]" value="Accumin" onclick="checkCB()" />Accumin
               <input type="checkbox" id="62" name="data2[]" value="UMP30.1" onclick="checkCB()" />UMP30.1
              </p>
                <p>
               <input type="checkbox" id="63" name="data2[]" value="UMP30.2" onclick="checkCB()" />UMP30.2
               <input type="checkbox" id="64" name="data2[]" value="UMP50.1" onclick="checkCB()" />UMP50.1
               <input type="checkbox" id="65" name="data2[]" value="UMP50.2" onclick="checkCB()" />UMP50.2
            </p>
            <p>
               <input type="checkbox" id="66" name="data2[]" value="UMP120.1" onclick="checkCB()" />UMP120.1
               <input type="checkbox" id="67" name="data2[]" value="UMP120.2" onclick="checkCB()" />UMP120.2
               <input type="checkbox" id="68" name="data2[]" value="EC30.1" onclick="checkCB()" />EC30.1
              </p>
               <p>
               <input type="checkbox" id="69" name="data2[]" value="EC30.2" onclick="checkCB()" />EC30.2
               <input type="checkbox" id="70" name="data2[]" value="EC50.1" onclick="checkCB()" />EC50.1
               <input type="checkbox" id="71" name="data2[]" value="EC50.2" onclick="checkCB()" />EC50.2
            </p>
            <p>
               <input type="checkbox" id="72" name="data2[]" value="EC120.1" onclick="checkCB()" />EC120.1
               <input type="checkbox" id="73" name="data2[]" value="EC120.2" onclick="checkCB()" />EC120.2
               <input type="checkbox" id="74" name="data2[]" value="Temp30.1" onclick="checkCB()" />Temp30.1
             </p>
                <p>
               <input type="checkbox" id="75" name="data2[]" value="Temp30.2" onclick="checkCB()" />Temp30.2
               <input type="checkbox" id="76" name="data2[]" value="Temp50.1" onclick="checkCB()" />Temp50.1
               <input type="checkbox" id="77" name="data2[]" value="Temp50.2" onclick="checkCB()" />Temp50.2
            </p>
            <p>
               <input type="checkbox" id="78" name="data2[]" value="Temp120.1" onclick="checkCB()" />Temp120.1
               <input type="checkbox" id="79" name="data2[]" value="Temp120.2" onclick="checkCB()" />Temp120.2
               <input type="checkbox" id="80" name="data2[]" value="Weight1" onclick="checkCB()" />Weight 1
              </p>
                <p>
               <input type="checkbox" id="81" name="data2[]" value="Weight2" onclick="checkCB()" />Weight 2
               <input type="checkbox" id="82" name="data2[]" value="Drain1" onclick="checkCB()" />Drain1
               <input type="checkbox" id="83" name="data2[]" value="Drain1max" onclick="checkCB()" />Drain1max
            </p>
            <p>
           <input type="checkbox" id="84" name="data2[]" value="Drain1min" onclick="checkCB()" />Drain1min
           <input type="checkbox" id="85" name="data2[]" value="Drain2" onclick="checkCB()" />Drain2
           <input type="checkbox" id="86" name="data2[]" value="Drain2max" onclick="checkCB()" />Drain2max
           <input type="checkbox" id="87" name="data2[]" value="Drain2min" onclick="checkCB()" />Drain2min
        </p>
            </p>
            <p><input type="submit" value="Ok" class="button1"/></p>
         </form>
      <!--   <form action="chart.php" method="post">
           <input type="submit" name="bar" value="bar"/>
         </form>
         -->
      </div>
   </body>
   </html>';

   else {
     $page='
     <!DOCTYPE html>
     <html>

     <head>
        <meta charset="utf-8">
        <title>База</title>
        <link href="styles/style.css" rel="stylesheet">
     </head>
     <body>
        <script src="scripts/script.js"></script>
        <div class="import">
           <h1>Данные</h1>
           <form action="data.php" method="POST" class="form4">
             <h3>Вывод данных:</h3>
             <p><input type="radio" name="dan" value="h"/>Гидрометеостанция</p>
             <p>  <input type="radio" name="dan" value="s"/>Стационарная станция</p>
             <p>  <input type="radio" name="dan" value="l"/>Лизиметрическая станция</p>
       <p>   <input name="data" type="submit" value="Вывод данных" class="button1"/></p>
        </form>
        <form action="export.php" method="POST" class="form4">
          <h3>Экспорт данных:</h3>
          <p><input type="radio" name="dan" value="h"/>Гидрометеостанция</p>
          <p>  <input type="radio" name="dan" value="s"/>Стационарная станция</p>
          <p>  <input type="radio" name="dan" value="l"/>Лизимитрическая станция</p>
    <p>   <input name="data" type="submit" value="Экспорт" class="button1"/></p>
     </form>
       </div>
       <div class="graph">
          <h1>Построение графиков</h1>
          <form action="chart.php"  method="post" enctype="multipart/form-data" class="form3">
             <h3>Гидрометеостанция:</h3>
             <p>
                <input type="checkbox" id="1" name="data[]" value="mm" onclick="checkCB()"/>mm
                <input type="checkbox" id="2" name="data[]" value="deg" onclick="checkCB()" />deg
                <input type="checkbox" id="3" name="data[]" value="msdo" onclick="checkCB()" />msdo
                <input type="checkbox" id="4" name="data[]" value="Cdo" onclick="checkCB()" />Cdo
                <input type="checkbox" id="5" name="data[]" value="Prdo" onclick="checkCB()" />Prdo
                <input type="checkbox" id="6" name="data[]" value="hPado" onclick="checkCB()" />hPado
             </p>
             <p>
                <input type="checkbox" id="7" name="data[]" value="mmcharp" onclick="checkCB()" />mmcharp
                <input type="checkbox" id="8" name="data[]" value="WmI" onclick="checkCB()" />WmI
                <input type="checkbox" id="9" name="data[]" value="HKBat" onclick="checkCB()" />HKBat
                <input type="checkbox" id="10" name="data[]" value="HKTemp" onclick="checkCB()" />HKTemp
                <input type="checkbox" id="11" name="data[]" value="HLrH" onclick="checkCB()" />HLrH
             </p>
             <p>
          <form action="chart.php" method="post" enctype="multipart/form-data" class="form3">

             <h3>Стационарная станция:</h3>
             <p>
                <input type="checkbox" id="12" name="data1[]" value="CThirdty" onclick="checkCB()" />CThirdty
                <input type="checkbox" id="13" name="data1[]" value="procdoThirdty" onclick="checkCB()" />procdoThirdty
                <input type="checkbox" id="14" name="data1[]" value="SmdoThirdty" onclick="checkCB()" />SmdoThirdty
               </p>
                <p>
                <input type="checkbox" id="15" name="data1[]" value="CThirdtyF" onclick="checkCB()" />CThirdtyF
                <input type="checkbox" id="16" name="data1[]" value="pFdoThirdty" onclick="checkCB()" />pFdoThirdty
                <input type="checkbox" id="17" name="data1[]" value="CSixty" onclick="checkCB()" />CSixty
             </p>
             <p>
                <input type="checkbox" id="18" name="data1[]" value="procdoSixty" onclick="checkCB()" />procdoSixty
                <input type="checkbox" id="19" name="data1[]" value="SmdoSixty" onclick="checkCB()" />SmdoSixty
                <input type="checkbox" id="20" name="data1[]" value="CSixtyF" onclick="checkCB()" />CSixtyF
              </p>
                 <p>
                <input type="checkbox" id="21" name="data1[]" value="pFdoSixty" onclick="checkCB()" />pFdoSixty
                <input type="checkbox" id="22" name="data1[]" value="CHThirdty" onclick="checkCB()" />CHThirdty
                <input type="checkbox" id="23" name="data1[]" value="doHThirdty" onclick="checkCB()" />doHThirdty
             </p>
             <p>
                <input type="checkbox" id="24" name="data1[]" value="SmdoHThirdty" onclick="checkCB()" />SmdoHThirdty
                <input type="checkbox" id="25" name="data1[]" value="CHThirdtyF" onclick="checkCB()" />CHThirdtyF
                <input type="checkbox" id="26" name="data1[]" value="pFdoHThirdty" onclick="checkCB()" />pFdoHThirdty
               </p>
                 <p>
                <input type="checkbox" id="27" name="data1[]" value="HKBatV" onclick="checkCB()" />HKBatV
                <input type="checkbox" id="28" name="data1[]" value="HKTempC" onclick="checkCB()" />HKTempC
                <input type="checkbox" id="29" name="data1[]" value="HKrH" onclick="checkCB()" />HKrH
             </p>
             </p>



                <h3>Лизиметрическая станция:</h3>
                <p>
                <input type="checkbox" id="14" name="data1[]" value="CThirdty" onclick="checkCB()" />1:°C:1
                <input type="checkbox" id="15" name="data1[]" value="procdoThirdty" onclick="checkCB()" />2:%:(do.)
                <input type="checkbox" id="16" name="data1[]" value="SmdoThirdty" onclick="checkCB()" />3:S/m:(do.)
               </p>
                <p>
                <input type="checkbox" id="17" name="data1[]" value="CThirdtyF" onclick="checkCB()" />4:°C:4
                <input type="checkbox" id="18" name="data1[]" value="pFdoThirdty" onclick="checkCB()" />5:pF:(do.)
                <input type="checkbox" id="19" name="data1[]" value="CSixty" onclick="checkCB()" />6:°C:2
             </p>
             <p>
                <input type="checkbox" id="20" name="data1[]" value="procdoSixty" onclick="checkCB()" />7:%:(do.)
                <input type="checkbox" id="21" name="data1[]" value="SmdoSixty" onclick="checkCB()" />8:S/m:(do.)
                <input type="checkbox" id="22" name="data1[]" value="CSixtyF" onclick="checkCB()" />9:°C:5
              </p>
                 <p>
                <input type="checkbox" id="23" name="data1[]" value="pFdoSixty" onclick="checkCB()" />10:pF:(do.)
                <input type="checkbox" id="24" name="data1[]" value="CHThirdty" onclick="checkCB()" />11:°C:3
                <input type="checkbox" id="25" name="data1[]" value="doHThirdty" onclick="checkCB()" />12:%:(do.)
             </p>
             <p>
                <input type="checkbox" id="26" name="data1[]" value="SmdoHThirdty" onclick="checkCB()" />13:S/m:(do.)
                <input type="checkbox" id="27" name="data1[]" value="CHThirdtyF" onclick="checkCB()" />14:°C:6
                <input type="checkbox" id="28" name="data1[]" value="pFdoHThirdty" onclick="checkCB()" />15:pF:(do.)
               </p>
                 <p>
                <input type="checkbox" id="29" name="data1[]" value="HKBatV" onclick="checkCB()" />HK Bat:V
                <input type="checkbox" id="30" name="data1[]" value="HKTempC" onclick="checkCB()" />HK Temp:oC
                <input type="checkbox" id="31" name="data1[]" value="HKrH" onclick="checkCB()" />HK rH:%
             </p>
             <h3>Лизиметрическая станция:</h3>
             <p>
             <input type="checkbox" id="32" name="data2[]" value="Tens30.1" onclick="checkCB()" />Tens30.1
                <input type="checkbox" id="33" name="data2[]" value="Tens30.1max" onclick="checkCB()" />Tens30.1max
                <input type="checkbox" id="34" name="data2[]" value="Tens30.1min" onclick="checkCB()" />Tens30.1min
                <input type="checkbox" id="35" name="data2[]" value="Tens30.2" onclick="checkCB()" />Tens30.2
             </p>
             <p>
                <input type="checkbox" id="36" name="data2[]" value="Tens30.2max" onclick="checkCB()" />Tens30.2max
                <input type="checkbox" id="37" name="data2[]" value="Tens30.2min" onclick="checkCB()" />Tens30.2min
                <input type="checkbox" id="38" name="data2[]" value="Vacuum30" onclick="checkCB()" />Vacuum30
              </p>
                 <p>
                <input type="checkbox" id="39" name="data2[]" value="Vacuum30max" onclick="checkCB()" />Vacuum30max
                <input type="checkbox" id="40" name="data2[]" value="Vacuum30min" onclick="checkCB()" />Vacuum30min
                <input type="checkbox" id="41" name="data2[]" value="Tens50.1" onclick="checkCB()" />Tens50.1
             </p>
             <p>
                <input type="checkbox" id="42" name="data2[]" value="Tens50.1max" onclick="checkCB()" />Tens50.1max
                <input type="checkbox" id="43" name="data2[]" value="Tens50.1min" onclick="checkCB()" />Tens50.1min
                <input type="checkbox" id="44" name="data2[]" value="Tens50.2" onclick="checkCB()" />Tens50.2
               </p>
                 <p>
                <input type="checkbox" id="45" name="data2[]" value="Tens50.2max" onclick="checkCB()" />Tens50.2max
                <input type="checkbox" id="46" name="data2[]" value="Tens50.2min" onclick="checkCB()" />Tens50.2min
                <input type="checkbox" id="47" name="data2[]" value="Vacuum50" onclick="checkCB()" />Vacuum50
             </p>
             <p>
                <input type="checkbox" id="48" name="data2[]" value="Vacuum50max" onclick="checkCB()" />Vacuum50max
                <input type="checkbox" id="49" name="data2[]" value="Vacuum50min" onclick="checkCB()" />Vacuum50min
                <input type="checkbox" id="50" name="data2[]" value="Tens120.1" onclick="checkCB()" />Tens120.1
               </p>
                <p>
                <input type="checkbox" id="51" name="data2[]" value="Tens120.1max" onclick="checkCB()" />Tens120.1max
                <input type="checkbox" id="52" name="data2[]" value="Tens120.1min" onclick="checkCB()" />Tens120.1min
                <input type="checkbox" id="53" name="data2[]" value="Tens120.2" onclick="checkCB()" />Tens120.2
             </p>
             <p>
                <input type="checkbox" id="54" name="data2[]" value="Tens120.2max" onclick="checkCB()" />Tens120.2max
                <input type="checkbox" id="55" name="data2[]" value="Tens120.2min" onclick="checkCB()" />Tens120.2min
                <input type="checkbox" id="56" name="data2[]" value="Vacuum120" onclick="checkCB()" />Vacuum120
              </p>
                 <p>
                <input type="checkbox" id="57" name="data2[]" value="Vacuum120max" onclick="checkCB()" />Vacuum120max
                <input type="checkbox" id="58" name="data2[]" value="Vacuum120min" onclick="checkCB()" />Vacuum120min
                <input type="checkbox" id="59" name="data2[]" value="Accu" onclick="checkCB()" />Accu
             </p>
             <p>
                <input type="checkbox" id="60" name="data2[]" value="Accumax" onclick="checkCB()" />Accumax
                <input type="checkbox" id="61" name="data2[]" value="Accumin" onclick="checkCB()" />Accumin
                <input type="checkbox" id="62" name="data2[]" value="UMP30.1" onclick="checkCB()" />UMP30.1
               </p>
                 <p>
                <input type="checkbox" id="63" name="data2[]" value="UMP30.2" onclick="checkCB()" />UMP30.2
                <input type="checkbox" id="64" name="data2[]" value="UMP50.1" onclick="checkCB()" />UMP50.1
                <input type="checkbox" id="65" name="data2[]" value="UMP50.2" onclick="checkCB()" />UMP50.2
             </p>
             <p>
                <input type="checkbox" id="66" name="data2[]" value="UMP120.1" onclick="checkCB()" />UMP120.1
                <input type="checkbox" id="67" name="data2[]" value="UMP120.2" onclick="checkCB()" />UMP120.2
                <input type="checkbox" id="68" name="data2[]" value="EC30.1" onclick="checkCB()" />EC30.1
               </p>
                <p>
                <input type="checkbox" id="69" name="data2[]" value="EC30.2" onclick="checkCB()" />EC30.2
                <input type="checkbox" id="70" name="data2[]" value="EC50.1" onclick="checkCB()" />EC50.1
                <input type="checkbox" id="71" name="data2[]" value="EC50.2" onclick="checkCB()" />EC50.2
             </p>
             <p>
                <input type="checkbox" id="72" name="data2[]" value="EC120.1" onclick="checkCB()" />EC120.1
                <input type="checkbox" id="73" name="data2[]" value="EC120.2" onclick="checkCB()" />EC120.2
                <input type="checkbox" id="74" name="data2[]" value="Temp30.1" onclick="checkCB()" />Temp30.1
              </p>
                 <p>
                <input type="checkbox" id="75" name="data2[]" value="Temp30.2" onclick="checkCB()" />Temp30.2
                <input type="checkbox" id="76" name="data2[]" value="Temp50.1" onclick="checkCB()" />Temp50.1
                <input type="checkbox" id="77" name="data2[]" value="Temp50.2" onclick="checkCB()" />Temp50.2
             </p>
             <p>
                <input type="checkbox" id="78" name="data2[]" value="Temp120.1" onclick="checkCB()" />Temp120.1
                <input type="checkbox" id="79" name="data2[]" value="Temp120.2" onclick="checkCB()" />Temp120.2
                <input type="checkbox" id="80" name="data2[]" value="Weight1" onclick="checkCB()" />Weight 1
               </p>
                 <p>
                <input type="checkbox" id="81" name="data2[]" value="Weight2" onclick="checkCB()" />Weight 2
                <input type="checkbox" id="82" name="data2[]" value="Drain1" onclick="checkCB()" />Drain1
                <input type="checkbox" id="83" name="data2[]" value="Drain1max" onclick="checkCB()" />Drain1max
             </p>
             <p>
            <input type="checkbox" id="84" name="data2[]" value="Drain1min" onclick="checkCB()" />Drain1min
            <input type="checkbox" id="85" name="data2[]" value="Drain2" onclick="checkCB()" />Drain2
            <input type="checkbox" id="86" name="data2[]" value="Drain2max" onclick="checkCB()" />Drain2max
            <input type="checkbox" id="87" name="data2[]" value="Drain2min" onclick="checkCB()" />Drain2min
             </p>
             <p>
            <input type="checkbox" id="84" name="data2[]" value="HKBatV" onclick="checkCB()" />HKBatV
            <input type="checkbox" id="85" name="data2[]" value="HKTempC" onclick="checkCB()" />HKTempC
            <input type="checkbox" id="86" name="data2[]" value="HKrH" onclick="checkCB()" />HKrH
            <input type="checkbox" id="87" name="data2[]" value="HKrH" onclick="checkCB()" />HKrH
            </p>
                </p>

             <p><input type="submit" value="Ok" class="button1"/></p>
          </form>
       <!--   <form action="chart.php" method="post">
            <input type="submit" name="bar" value="bar"/>
          </form>
          -->
       </div>
    </body>
    </html>';
   }

   if ($auth->check()){
   print $page;
   }
   else {
     print '<div class="form2"><h1>Авторизуйтесь</h1></div>';
   }

 ?>

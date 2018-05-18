<head>
  <meta charset="utf-8">
  <link href="styles/style.css" rel="stylesheet">
</head>
<?php
/*подредактировать в pChart $ColorID шоб было норм в бар графике цвета ставились*/
/*бар графики хз как сделать, мб радиобаттоны добавить как то, но тогда жестко нагромоздится на страничке
*/
/*
нужно сделать редактирование базы, потом среднее по месяцам(диплом) + документацию
на курсач: документация, импорт, ввод данных
*/
error_reporting(0);
include_once("login.php");
include ("pChart/pChart.class");

include ("pChart/pCache.class");

include ("pChart/pData.class");

$myData = new pData();
$db = mysqli_connect("127.0.0.1", "admin", "1234", "meteo");
$d = [];
$ch=0;
if (isset($_POST['data']))
$d=$_POST['data'];
elseif (isset($_POST['data1']))
{
$d=$_POST['data1'];
$ch=1;
}
else {
  goto a;
}
	$conditions = [];
	foreach($d as $data)
		{
		$conditions[] = "`$data`";
		}

	$show = implode(",  ", $conditions);
  if($ch)
  $result = mysqli_query($db, "SELECT `Time`, " . $show . " FROM `Stational`");
  else
	$result = mysqli_query($db, "SELECT `Time`, " . $show . " FROM `Hidromet`");

	while ($row = mysqli_fetch_array($result))
		{
		$myData->addPoint($row["Time"], "Time");
		/* Сохранение данных в массив */
		foreach($d as $data)
			{
			$myData->addPoint($row["$data"], $data);
			}

		/*    $myData->addPoint($row["mm"], "mm");
		$myData->addPoint($row["deg"], "deg");*/
		};

	// устанавливаем точки с датами
	// на ось абсцисс

	foreach($d as $data) $myData->AddSerie("$data");
	$myData->SetAbsciseLabelSerie("Time");

	// устанавливаем имена
	// $myData->SetSerieName(mb_convert_encoding("Time",'utf-8','windows-1251'),"Time");
	// создаем график шириной в 1000 и высотой в 500 px

	$graph = new pChart(1000, 500);

	// устанавливаем шрифт и размер шрифта

	$graph->setFontProperties("Fonts/tahoma.ttf", 10);

	// координаты левой верхней вершины и правой нижней
	// вершины графика

	$graph->setGraphArea(85, 30, 950, 400);

	// рисуем заполненный четырехугольник

	$graph->drawFilledRoundedRectangle(7, 7, 993, 493, 5, 240, 240, 240);

	// теперь незаполненный для эффекта тени

	$graph->drawRoundedRectangle(5, 5, 995, 495, 5, 230, 230, 230);

	// прорисовываем фон графика

	$graph->drawGraphArea(255, 255, 255, TRUE);

	// устанавливаем данные для графиков

	$graph->drawScale($myData->GetData() , $myData->GetDataDescription() , SCALE_NORMAL, 150, 150, 150, true, 0, 2);

	// рисуем сетку для графика

	$graph->drawGrid(4, TRUE, 230, 230, 230, 50);

	// прорисовываем линейные графики

	$graph->drawLineGraph($myData->GetData() , $myData->GetDataDescription());

	// рисуем точки на графике

	$graph->drawPlotGraph($myData->GetData() , $myData->GetDataDescription() , 3, 2, 255, 255, 255);


	$graph->setFontProperties("Fonts/tahoma.ttf", 10);

	// ложим легенду

	$graph->drawLegend(90, 35, $myData->GetDataDescription() , 255, 255, 255);


	// $graph->drawLegend(90, 60, $myData1->GetDataDescription(), 255, 255, 255);
	// Пишем заголовок

	$graph->setFontProperties("Fonts/tahoma.ttf", 10);
	$graph->drawTitle(480, 22, mb_convert_encoding("$show", 'utf-8', 'windows-1251') , 50, 50, 50, -1, -1, true);

	// выводим в браузер

	$graph->Render("Naked.png");
  goto b;


  a:
  echo "Что-то пошло не так!";
  unlink('Naked.png');
  b:

?>

<p><a href="index.php">Home</a></p>

<div class="chart">
       <img src="Naked.png" class="png">
</div>

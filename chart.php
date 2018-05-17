<?php
include ("pChart/pChart.class");

include ("pChart/pCache.class");

include ("pChart/pData.class");

$myData = new pData();
$myData1 = new pData();
$db = mysqli_connect("127.0.0.1", "admin", "1234", "meteo");
$result = mysqli_query($db, "SELECT `Time`, `mm`, `deg` FROM `Hidromet` ");

// Тут должно быть соединение с базой, выполнение запроса.

while ($row = mysqli_fetch_array($result))
	{
	/* Сохранение данных в массив */
	$myData->addPoint($row["Time"], "Time");
	if (isset($_POST['bar'])) $myData1->addPoint($row["mm"], "mm");
	  else $myData->addPoint($row["mm"], "mm");
	$myData->addPoint($row["deg"], "deg");
	};

// устанавливаем точки с датами
// на ось абсцисс

if (isset($_POST['bar']))
	{
	$myData1->SetAbsciseLabelSerie("Time");

	// помечаем данные как предназначеные для
	// отображения

	$myData1->AddSerie("mm");
	}
  else
	{
	$myData->AddSerie("mm");
	}

$myData->SetAbsciseLabelSerie("Time");
$myData->AddSerie("deg");

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

if (isset($_POST['bar'])) $graph->drawScale($myData1->GetData() , $myData1->GetDataDescription() , SCALE_NORMAL, 150, 150, 150, true, 0, 2);
  else
	{
	$graph->drawScale($myData->GetData() , $myData->GetDataDescription() , SCALE_NORMAL, 150, 150, 150, true, 0, 2);
	}

// рисуем сетку для графика

$graph->drawGrid(4, TRUE, 230, 230, 230, 50);

// прорисовываем линейные графики

$graph->drawLineGraph($myData->GetData() , $myData->GetDataDescription());

// рисуем точки на графике

$graph->drawPlotGraph($myData->GetData() , $myData->GetDataDescription() , 3, 2, 255, 255, 255);

if (isset($_POST['bar']))
	{
	$graph->drawBarGraph($myData1->GetData() , $myData1->GetDataDescription() , TRUE, 40);
	}
  else
	{
	}

// пишем в подвале некоторый текст

$graph->setFontProperties("Fonts/tahoma.ttf", 10);

// ложим легенду

$graph->drawLegend(90, 35, $myData->GetDataDescription() , 255, 255, 255);
$graph->drawLegend(20, 60, $myData1->GetDataDescription() , 255, 255, 255);

// Пишем заголовок

$graph->setFontProperties("Fonts/tahoma.ttf", 10);
$graph->drawTitle(480, 22, mb_convert_encoding("mm + deg", 'utf-8', 'windows-1251') , 50, 50, 50, -1, -1, true);

// выводим в браузер

$graph->Render("Naked.png");
/**
 * @return array
 */
?>
<a href="index.html">Home</a>
       <p><img src="Naked.png"></p>

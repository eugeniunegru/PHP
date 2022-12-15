<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
			#chartdiv {
	  width: 100%;
 	 height: 500px;
	}
	</style>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<div id="chartdiv"></div>
</head>
<body>

</body>
</html>
<?php
$corect=0.0;
$incorect=0.0;
$rasp=0;

/*****************************intrebarea 1***************/
if (isset($_POST["intr1"])) {
if ($_POST["intr1"]=="Brazilia") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 1"."<br><br>";
$rasp++;
}

/*****************************intrebarea 2***************/
if (isset($_POST["intr2"])) {
if ($_POST["intr2"]=="casa") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 2"."<br><br>";
$rasp++;
}

/*****************************intrebarea 3***************/
if (isset($_POST["intr3"])) {
if ($_POST["intr3"]=="Cabernet Sauvignon") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 3"."<br><br>";
$rasp++;
}
/*****************************intrebarea 4***************/
if (isset($_POST["intr4"])) {
if ($_POST["intr4"]=="Libia") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 4"."<br><br>";
$rasp++;
}
/*****************************intrebarea 5***************/
if (isset($_POST["intr5"])) {
if ($_POST["intr5"]=="Procesorul") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 5"."<br><br>";
$rasp++;
}
/*****************************intrebarea 6***************/
if (isset($_POST["intr6"])) {
if ($_POST["intr6"]=="Riyadh") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 6"."<br><br>";
$rasp++;
}
/*****************************intrebarea 7***************/
if (isset($_POST["intr7"])) {
if ($_POST["intr7"]=="El Cid") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 7"."<br><br>";
$rasp++;
}
/*****************************intrebarea 8***************/
if (isset($_POST["intr8"])) {
if ($_POST["intr8"]=="Alba") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 8"."<br><br>";
$rasp++;
}
/*****************************intrebarea 9***************/
if (isset($_POST["intr9"])) {
if ($_POST["intr9"]=="garbaci") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 9"."<br><br>";
$rasp++;
}
/*****************************intrebarea 10***************/
if (isset($_POST["intr10"])) {
if ($_POST["intr10"]=="acromantie") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 10"."<br><br>";
$rasp++;
}
/*****************************intrebarea 11***************/
if (isset($_POST["intr11ch1"]) || isset($_POST["intr11ch2"]) || isset($_POST["intr11ch3"]) || isset($_POST["intr11ch4"]) || isset($_POST["intr11ch5"])) {

if (isset($_POST["intr11ch1"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr11ch2"])) {
		$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr11ch3"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr11ch4"])) {
	$corect+=0.2;
}else{
	$incorect+=0.2;
}

if (isset($_POST["intr11ch5"])) {
		$corect+=0.25;
}else{
	$incorect+=0.25;
}
}else{
echo "Nu ati raspuns la intrebarea 11"."<br><br>";
$rasp++;
}
/*****************************intrebarea 12***************/
if (isset($_POST["intr12ch1"]) || isset($_POST["intr12ch2"]) || isset($_POST["intr12ch3"]) || isset($_POST["intr12ch4"]) || isset($_POST["intr12ch5"])) {

if (isset($_POST["intr12ch1"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr12ch2"])) {
		$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr12ch3"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr12ch4"])) {
	$corect+=0.2;
}else{
	$incorect+=0.2;
}

if (isset($_POST["intr12ch5"])) {
		$corect+=0.25;
}else{
	$incorect+=0.25;
}
}else{
echo "Nu ati raspuns la intrebarea 12"."<br><br>";
$rasp++;
}
/*****************************intrebarea 13***************/
if (isset($_POST["intr13ch1"]) || isset($_POST["intr13ch2"]) || isset($_POST["intr13ch3"]) || isset($_POST["intr13ch4"]) || isset($_POST["intr13ch5"])) {

if (isset($_POST["intr13ch1"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr13ch2"])) {
		$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr13ch3"])) {
		$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr13ch4"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr13ch5"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}
}else{
echo "Nu ati raspuns la intrebarea 13"."<br><br>";
$rasp++;
}
/*****************************intrebarea 14***************/
if (isset($_POST["intr14"])) {
if ($_POST["intr14"]=="extranet") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 14"."<br><br>";
$rasp++;
}
/*****************************intrebarea 15***************/
if (isset($_POST["intr15ch1"]) || isset($_POST["intr15ch2"]) || isset($_POST["intr15ch3"]) || isset($_POST["intr15ch4"]) || isset($_POST["intr15ch5"])) {

if (isset($_POST["intr15ch1"])) {
	$corect+=0.2;
}else{
	$incorect+=0.2;
}

if (isset($_POST["intr15ch2"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr15ch3"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr15ch4"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr15ch5"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}
}else{
echo "Nu ati raspuns la intrebarea 15"."<br><br>";
$rasp++;
}
/*****************************intrebarea 16***************/
if (isset($_POST["intr16ch1"]) || isset($_POST["intr16ch2"]) || isset($_POST["intr16ch3"]) || isset($_POST["intr16ch4"]) || isset($_POST["intr16ch5"])) {

if (isset($_POST["intr16ch1"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr16ch2"])) {
		$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr16ch3"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr16ch4"])) {
	$corect+=0.2;
}else{
	$incorect+=0.2;
}

if (isset($_POST["intr16ch5"])) {
		$corect+=0.25;
}else{
	$incorect+=0.25;
}
}else{
echo "Nu ati raspuns la intrebarea 16"."<br><br>";
$rasp++;
}
/*****************************intrebarea 17***************/
if (isset($_POST["intr17"])) {
if ($_POST["intr17"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 17"."<br><br>";
$rasp++;
}
/*****************************intrebarea 18***************/
if (isset($_POST["intr18"])) {
if ($_POST["intr18"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 18"."<br><br>";
$rasp++;
}
/*****************************intrebarea 19***************/
if (isset($_POST["intr19"])) {
if ($_POST["intr19"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 19"."<br><br>";
$rasp++;
}
/*****************************intrebarea 20***************/
if (isset($_POST["intr20"])) {
if ($_POST["intr20"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 20"."<br><br>";
$rasp++;
}
/*****************************intrebarea 21***************/
if (isset($_POST["intr21"])) {
if ($_POST["intr21"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 21"."<br><br>";
$rasp++;
}
/*****************************intrebarea 22***************/
if (isset($_POST["intr22"])) {
if ($_POST["intr22"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 22"."<br><br>";
$rasp++;
}
/*****************************intrebarea 23***************/
if (isset($_POST["intr23ch1"]) || isset($_POST["intr23ch2"]) || isset($_POST["intr23ch3"]) || isset($_POST["intr23ch4"]) || isset($_POST["intr23ch5"])) {

if (isset($_POST["intr23ch1"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr23ch2"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr23ch3"])) {
	$incorect+=0.2;
}else{
	$corect+=0.2;
}

if (isset($_POST["intr23ch4"])) {
	$corect+=0.2;
}else{
	$incorect+=0.2;
}

if (isset($_POST["intr23ch5"])) {
	$corect+=0.2;
}else{
	$incorect+=0.2;
}
}else{
echo "Nu ati raspuns la intrebarea 23"."<br><br>";
$rasp++;
}

/*****************************intrebarea 24***************/
if (isset($_POST["intr24"])) {
if ($_POST["intr24"]=="switch") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 24"."<br><br>";
$rasp++;
}
/*****************************intrebarea 25***************/
if (isset($_POST["intr25ch1"]) || isset($_POST["intr25ch2"]) || isset($_POST["intr25ch3"]) || isset($_POST["intr25ch4"])) {

if (isset($_POST["intr25ch1"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr25ch2"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr25ch3"])) {
	$incorect+=0.25;
}else{
	$corect+=0.25;
}

if (isset($_POST["intr25ch4"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}
}else{
echo "Nu ati raspuns la intrebarea 25"."<br><br>";
$rasp++;
}
/*****************************intrebarea 26***************/
if (isset($_POST["intr26"])) {
if ($_POST["intr26"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 26"."<br><br>";
$rasp++;
}
/*****************************intrebarea 27***************/
if (isset($_POST["intr27ch1"]) || isset($_POST["intr27ch2"]) || isset($_POST["intr27ch3"]) || isset($_POST["intr27ch4"])) {

if (isset($_POST["intr27ch1"])) {
	$incorect+=0.25;
}else{
	$corect+=0.25;
}

if (isset($_POST["intr27ch2"])) {
	$incorect+=0.25;
}else{
	$corect+=0.25;
}

if (isset($_POST["intr27ch3"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr27ch4"])) {
	$incorect+=0.25;
}else{
	$corect+=0.25;
}
}else{
echo "Nu ati raspuns la intrebarea 27"."<br><br>";
$rasp++;
}
/*****************************intrebarea 28***************/
if (isset($_POST["intr28"])) {
if ($_POST["intr28"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 28"."<br><br>";
$rasp++;
}
/*****************************intrebarea 29***************/
if (isset($_POST["intr29"])) {
if ($_POST["intr29"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 29"."<br><br>";
$rasp++;
}
/*****************************intrebarea 30***************/
if (isset($_POST["intr30ch1"]) || isset($_POST["intr30ch2"])) {

if (isset($_POST["intr30ch1"])) {
	$corect+=0.5;
}else{
	$incorect+=0.5;
}

if (isset($_POST["intr30ch2"])) {
	$incorect+=0.5;
}else{
	$corect+=0.5;
}


}else{
echo "Nu ati raspuns la intrebarea 30"."<br><br>";
$rasp++;
}
/*****************************intrebarea 32***************/
if (isset($_POST["intr32"])) {
if ($_POST["intr32"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 32"."<br><br>";
$rasp++;
}
/*****************************intrebarea 33***************/
if (isset($_POST["intr33ch1"]) || isset($_POST["intr33ch2"]) || isset($_POST["intr33ch3"]) || isset($_POST["intr33ch4"])) {

if (isset($_POST["intr33ch1"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr33ch2"])) {
	$incorect+=0.25;
}else{
	$corect+=0.25;
}
if (isset($_POST["intr33ch3"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}
if (isset($_POST["intr33ch4"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

}else{
echo "Nu ati raspuns la intrebarea 33"."<br><br>";
$rasp++;
}
/*****************************intrebarea 34***************/
if (isset($_POST["intr34"])) {
if ($_POST["intr34"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 34"."<br><br>";
$rasp++;
}
/*****************************intrebarea 35***************/
if (isset($_POST["intr35"])) {
if ($_POST["intr35"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 35"."<br><br>";
$rasp++;
}
/*****************************intrebarea 36***************/
if (isset($_POST["intr36"])) {
if ($_POST["intr36"]=="corect") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 36"."<br><br>";
$rasp++;
}
/*****************************intrebarea 37***************/
if (isset($_POST["intr37ch1"]) || isset($_POST["intr37ch2"]) || isset($_POST["intr37ch3"]) || isset($_POST["intr37ch4"])) {

if (isset($_POST["intr37ch1"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

if (isset($_POST["intr37ch2"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}
if (isset($_POST["intr37ch3"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}
if (isset($_POST["intr37ch4"])) {
	$corect+=0.25;
}else{
	$incorect+=0.25;
}

}else{
echo "Nu ati raspuns la intrebarea 37"."<br><br>";
$rasp++;
}
/*****************************intrebarea 38***************/
if (isset($_POST["intr38"]) && $_POST["intr38"]!=="") {
if ($_POST["intr38"]=="‎Washington") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 38"."<br><br>";
$rasp++;
}
/*****************************intrebarea 39***************/
if (isset($_POST["intr39"]) && $_POST["intr39"]!=="") {
if ($_POST["intr39"]=="28") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 39"."<br><br>";
$rasp++;
}
/*****************************intrebarea 40***************/
if (isset($_POST["intr40"]) && $_POST["intr40"]!=="") {
if ($_POST["intr40"]=="08:00") {
	$corect+=1;
}else{
	$incorect+=1;
}
}else{
echo "Nu ati raspuns la intrebarea 40"."<br><br>";
$rasp++;
}

echo "Corecte puncte:  ".$corect."<br><br>";
echo "Incorecte puncte:  ".$incorect."<br><br>";
echo "Fara rasp puncte:  ".$rasp."<br><br>";
// echo "VALUE CHBOX ".$_POST["intr37ch3"];

echo "<script type=\"text/javascript\">
	var chart = AmCharts.makeChart( \"chartdiv\", {
  \"type\": \"pie\",
  \"theme\": \"light\",
  \"dataProvider\": [   {
    \"country\": \"Corect\",
    \"litres\": $corect
  }, {
    \"country\": \"Incorect\",
    \"litres\": $incorect
  } ],
  \"valueField\": \"litres\",
  \"titleField\": \"country\",
   \"balloon\":{
   \"fixedPosition\":true
  },
  \"export\": {
    \"enabled\": true
  }
} );
</script>";
?>

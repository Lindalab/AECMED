<?php

$conn = mysqli_connect('localhost', "root", "", "shoppn");
$sql = "SELECT * FROM `products`";
$res = mysqli_query($conn, $sql);
$res2 = mysqli_fetch_all($res, MYSQLI_ASSOC);
// print_r($res2);

$dataPoints = array();

foreach ($res2 as $item) {
	array_push($dataPoints, array("y" => $item['product_price'], "label" => $item['product_title']));
}



?>


<!DOCTYPE HTML>
<html>

<head>
	
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="charts.js"></script>
	
</head>

<body>
	<div id="container" style="height: 370px; width: 50%;"></div>
	<div id="container2" style="height: 370px; width: 50%;"></div>
	<script>
			draw("pie", "container", "fun", "ylabel", "xlabel", <?php  echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>);

			draw("pie", "container2", "fun2", "ylabel", "xlabel", <?php  echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>);
	</script>
</body>

</html>
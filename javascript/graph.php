<?php
 
$conn = mysqli_connect('localhost',"root","","shoppn");
$sql = "SELECT * FROM `products`";
$res = mysqli_query($conn,$sql);
$res2 = mysqli_fetch_all($res, MYSQLI_ASSOC);
print_r($res2);

$dataPoints = array(
	// array("y" => 25, "label" => "Sunday"),
	// array("y" => 15, "label" => "Monday"),
	// array("y" => 25, "label" => "Tuesday"),
	// array("y" => 5, "label" => "Wednesday"),
	// array("y" => 10, "label" => "Thursday"),
	// array("y" => 0, "label" => "Friday"),
	// array("y" => 20, "label" => "Saturday")
);

foreach($res2 as $item){
	array_push($dataPoints, array("y" => $item['product_price'], "label" => $item['product_title']));
}


 
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="charts.js"></script>
<script>
draw("pie","Container","fun", "ylabel", "xlabel", <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>);
</script>
</head>
<body>
<div id="Container" style="height: 370px; width: 100%; display: inline;"></div>
</body>
</html>
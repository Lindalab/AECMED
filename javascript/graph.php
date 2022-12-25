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
<script>
window.onload = function () {
    CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#d60b0b",
				"#960808",
				


                // "#da2323",
				"#ab0909",
                "#de3c3c",
                "#e25454",
                "#e66d6d",
				"#eb8585",
				"#ef9d9d",
				"#f3b6b6",
				"#f7cece",
				"#fbe7e7",
				"#2b0202",
				"#400303",
				"#560404",
				"#6b0606",             
                ]);
 
var chart = new CanvasJS.Chart("chartContainer", {
    colorSet: "greenShades",
	animationEnabled: true,
	exportEnabled: true,
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "column",
        indexLabel: "{y}",
        //color: ["#D60B0B","#950808","#36454F"],
		yValueFormatString: "#,###.##",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "black",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",

        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();


}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%; display: inline;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
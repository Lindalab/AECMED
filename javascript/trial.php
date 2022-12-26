<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    document.onload = function (){ chart1 = new CanvasJS.Chart("chartContainer1", {
        title: {
            text: "Live Data"
        },
        data: [{
            type: "line",
            dataPoints: [{
                    label: "apple",
                    y: 10
                },
                {
                    label: "orange",
                    y: 15
                },
                {
                    label: "banana",
                    y: 25
                },
                {
                    label: "mango",
                    y: 30
                },
                {
                    label: "grape",
                    y: 28
                }
            ]
        }]
    });
}
    var chart2 = new CanvasJS.Chart("chartContainer2", {
        title: {
            text: "Live Data"
        },
        data: [{
            type: "column",
            dataPoints: [{
                    label: "apple",
                    y: 10
                },
                {
                    label: "orange",
                    y: 15
                },
                {
                    label: "banana",
                    y: 25
                },
                {
                    label: "mango",
                    y: 30
                },
                {
                    label: "grape",
                    y: 28
                }
            ]
        }]
    });

    chart1.render();
    chart2.render();
</script>

<body>
<div id="chartContainer1"></div>

<div id="chartContainer2"></div>
</body>

</html> -->
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div id="chartContainer" style="height: 500px; width: 50%;"></div>
<div id="chartContainer2" style="height: 500px; width: 50%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="charts2.js"></script>
<script>


   draw("chartContainer", "pie", <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>);
   draw("chartContainer2", "column", <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>);

    
</script>

</html>
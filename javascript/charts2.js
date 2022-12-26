function draw(container_name, chartType, data){
    var chart = new CanvasJS.Chart(""+container_name, {
        data: [{
            type: ""+chartType,
            dataPoints: data,
        }]
    });

    chart.render();
   }
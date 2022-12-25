 function bar() {
    CanvasJS.addColorSet("ashesiColorShades",
                [//colorSet Array
                "#2b0202",
                "#d60b0b",
				"#960808",
                "#ef9d9d",
                "#da2323",
				"#ab0909",
                "#de3c3c",
                "#e25454",
                "#e66d6d",
				"#eb8585",
				"#f3b6b6",
				"#f7cece",
				"#fbe7e7",
				"#400303",
				"#560404",
				"#6b0606",             
                ]);
 
var chart = new CanvasJS.Chart("chartContainer", {
    colorSet: "ashesiColorShades",
    interactivityEnabled: false,
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups",
		minimum: 0,
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

        dataPoints: dataPoints,
	}]
});
chart.render();


}
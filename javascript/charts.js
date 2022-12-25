{
  /* <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> */
}

var canvasJS = document.createElement("script");
canvasJS.setAttribute(
  "src",
  "https://canvasjs.com/assets/script/canvasjs.min.js"
);
document.head.appendChild(canvasJS);

function draw(
  graph_type,
  container_name,
  graph_title,
  ylabel,
  xlabel,
  dataPoints
) {
  window.onload = function () {
    CanvasJS.addColorSet("greenShades", [
      //colorSet Array

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

    var chart = new CanvasJS.Chart("" + container_name, {
      colorSet: "greenShades",
      animationEnabled: true,
      exportEnabled: true,
      title: {
        text: "" + graph_title,
      },
      axisY: {
        title: "" + ylabel,
        minimum: 0,
      },
      axisX: {
        title: "" + xlabel,
        // minimum: 0,
      },
      data: [
        {
          type: "" + graph_type,
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
        },
      ],
    });
    chart.render();
  };
}

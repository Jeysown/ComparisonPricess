function createColumnChart() {

  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    axisY:{
          interval: 5,
        },
    data: [{
      type: "column",
      dataPoints: [
        { y: res[0], label: "R" },
        { y: res[1], label: "I" },
        { y: res[2], label: "A" },
        { y: res[3], label: "S" },
        { y: res[4], label: "E" },
        { y: res[5], label: "C" }

      ]
    }]
  });
  chart.render();

  var piechart = new CanvasJS.Chart("piechart",
  {
    animationEnabled: true,
    data: [
    {
      type: "pie",
      showInLegend: true,
      toolTipContent: "{y} - #percent %",
      legendText: "{indexLabel}",
      dataPoints: [
        {  y: 200, indexLabel: "Match" },
        {  y: 100, indexLabel: "Not match" },
        {  y: 100, indexLabel: "Undecided" }
      ]
    }
    ]
  });
  piechart.render();

  var splineArea = new CanvasJS.Chart("splineArea", {
    animationEnabled: true,
    axisY: {
      includeZero: false,
    },
    toolTip: {
      shared: true,
      content: "<span style='\"'color: {color};'\"'><strong>{name}</strong></span> <span style='\"'color: dimgrey;'\"'>{y}</span> "
    },
    legend: {
      fontSize: 13
    },
    data: [
    {
      type: "splineArea",
      showInLegend: true,
      name: "T.I.P",
      color: "rgba(54,158,173,.6)",
      dataPoints: [
        { y: res[0], label: "R" },
        { y: res[1], label: "I" },
        { y: res[2], label: "A" },
        { y: res[3], label: "S" },
        { y: res[4], label: "E" },
        { y: res[5], label: "C" }

      ]
    },
    {
      type: "splineArea",
      showInLegend: true,
      name: "U.S.T.",
      color: "rgba(134,180,2,.7)",
      dataPoints: [
        { y: 23, label: "R" },
        { y: 44, label: "I" },
        { y: 6, label: "A" },
        { y: 19, label: "S" },
        { y: 28, label: "E" },
        { y: 11, label: "C" }

      ]
    },
    {
      type: "splineArea",
      showInLegend: true,
      color: "rgba(127,96,132,.6)",
      name: "D.L.S.U.",
      dataPoints: [
        { y: 22, label: "R" },
        { y: 21, label: "I" },
        { y: 43, label: "A" },
        { y: 10, label: "S" },
        { y: 12, label: "E" },
        { y: 22, label: "C" }

      ]
    },
    {
      type: "splineArea",
      showInLegend: true,
      color: "rgba(127,96,255,.6)",
      name: "F.E.U.",
      dataPoints: [
        { y: 23, label: "R" },
        { y: 43, label: "I" },
        { y: 12, label: "A" },
        { y: 51, label: "S" },
        { y: 22, label: "E" },
        { y: 24, label: "C" }
      ]
    }

    ]
  });

  splineArea.render();
  var stackedArea = new CanvasJS.Chart("stackedArea", {
    animationEnabled: true,
    toolTip: {
      shared: true
    },
    axisX: {
      valueFormatString: "MMM",
      interval: 1,
      intervalType: "month"
    },


    legend: {
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    data: [
    {
      type: "stackedArea",
      showInLegend: true,
      name: "Makati",
      color: "rgba(54,158,173,.6)",
      dataPoints: [
        { y: res[0], label: "R" },
        { y: res[1], label: "I" },
        { y: res[2], label: "A" },
        { y: res[3], label: "S" },
        { y: res[4], label: "E" },
        { y: res[5], label: "C" }

      ]
    },
    {
      type: "stackedArea",
      showInLegend: true,
      name: "Quezon",
      color: "rgba(134,180,2,.7)",
      dataPoints: [
        { y: 23, label: "R" },
        { y: 44, label: "I" },
        { y: 6, label: "A" },
        { y: 19, label: "S" },
        { y: 28, label: "E" },
        { y: 11, label: "C" }

      ]
    },
    {
      type: "stackedArea",
      showInLegend: true,
      color: "rgba(127,96,132,.6)",
      name: "Laguna",
      dataPoints: [
        { y: 22, label: "R" },
        { y: 21, label: "I" },
        { y: 43, label: "A" },
        { y: 10, label: "S" },
        { y: 12, label: "E" },
        { y: 22, label: "C" }

      ]
    },
    {
      type: "stackedArea",
      showInLegend: true,
      color: "rgba(127,96,255,.6)",
      name: "Pangasinan",
      dataPoints: [
        { y: 23, label: "R" },
        { y: 43, label: "I" },
        { y: 12, label: "A" },
        { y: 51, label: "S" },
        { y: 22, label: "E" },
        { y: 24, label: "C" }
      ]
    }
    ]
  });

  stackedArea.render();
}

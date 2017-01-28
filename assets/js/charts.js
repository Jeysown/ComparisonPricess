function createColumnChart() {

  var chart = new CanvasJS.Chart("chartContainer",
	{
    animationEnabled: true,
		title:{
			text: "List of Resorts per Website"
		},
		data: [
		{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			legendText: "{indexLabel}",
			dataPoints: [
				{  y: numberOfResorts[0], indexLabel: listOfWebsite[0] },
				{  y: numberOfResorts[1], indexLabel: listOfWebsite[1] },
        {  y: numberOfResorts[2], indexLabel: listOfWebsite[2] },
				{  y: numberOfResorts[3], indexLabel: listOfWebsite[3] },
        {  y: numberOfResorts[4], indexLabel: listOfWebsite[4] },
				{  y: numberOfResorts[5], indexLabel: listOfWebsite[5] },
				{  y: numberOfResorts[6], indexLabel: listOfWebsite[6] }
			]
		}
		]
	});
	chart.render();
  var totalNumberOFResortsIntwoOrmoreSites = new CanvasJS.Chart("twoOrMoreResortsContainer",
  {
      animationEnabled: true,
      title:{
        text: "Total Number of Resorts in two or more Sites"
      },
      data: [
      {
        type: "pie",
        showInLegend: true,
        toolTipContent: "{y} - #percent %",
        legendText: "{indexLabel}",
        dataPoints: [
          {  y: twoOrMoreResortsVariables[0], indexLabel: "One Site Only" },
          {  y: twoOrMoreResortsVariables[1], indexLabel: "Two or more Sites" }
        ]
      }
      ]
	});
	totalNumberOFResortsIntwoOrmoreSites.render();
  var percentageResultsforFBorOLXorBookingSitesChart = new CanvasJS.Chart("percentageResultsforFBorOLXorBookingSites",
  {
    animationEnabled: true,
  axisY:{
        interval: 10,
      },
  data: [{
    type: "column",
    toolTipContent: "{y} %",
    dataPoints: [
      {  y: percentagesResults[0], label: "Resorts Listed in OLX/FB" },
      {  y: percentagesResults[1], label: "Resorts Listed in Booking Sites" },
      {  y: percentagesResults[2], label: "Resorts Do not Exist in OLX/FB" },
      {  y: percentagesResults[3], label: "Resorts Do not Exist in Booking Sites" },
      {  y: percentagesResults[4], label: "Resorts Needs to Contact in OLX/FB" },
      {  y: percentagesResults[5], label: "Resorts Needs to Contact in Booking Sites" }
    ]
  }]
  });
  percentageResultsforFBorOLXorBookingSitesChart.render();
  //
  // var piechart = new CanvasJS.Chart("piechart",
  // {
  //   animationEnabled: true,
  //   data: [
  //   {
  //     type: "pie",
  //     showInLegend: true,
  //     toolTipContent: "{y} - #percent %",
  //     legendText: "{indexLabel}",
  //     dataPoints: [
  //       {  y: 200, indexLabel: "Match" },
  //       {  y: 100, indexLabel: "Not match" },
  //       {  y: 100, indexLabel: "Undecided" }
  //     ]
  //   }
  //   ]
  // });
  // piechart.render();
  //
  // var splineArea = new CanvasJS.Chart("splineArea", {
  //   animationEnabled: true,
  //   axisY: {
  //     includeZero: false,
  //   },
  //   toolTip: {
  //     shared: true,
  //     content: "<span style='\"'color: {color};'\"'><strong>{name}</strong></span> <span style='\"'color: dimgrey;'\"'>{y}</span> "
  //   },
  //   legend: {
  //     fontSize: 13
  //   },
  //   data: [
  //   {
  //     type: "splineArea",
  //     showInLegend: true,
  //     name: "T.I.P",
  //     color: "rgba(54,158,173,.6)",
  //     dataPoints: [
  //       { y: res[0], label: "R" },
  //       { y: res[1], label: "I" },
  //       { y: res[2], label: "A" },
  //       { y: res[3], label: "S" },
  //       { y: res[4], label: "E" },
  //       { y: res[5], label: "C" }
  //
  //     ]
  //   },
  //   {
  //     type: "splineArea",
  //     showInLegend: true,
  //     name: "U.S.T.",
  //     color: "rgba(134,180,2,.7)",
  //     dataPoints: [
  //       { y: 23, label: "R" },
  //       { y: 44, label: "I" },
  //       { y: 6, label: "A" },
  //       { y: 19, label: "S" },
  //       { y: 28, label: "E" },
  //       { y: 11, label: "C" }
  //
  //     ]
  //   },
  //   {
  //     type: "splineArea",
  //     showInLegend: true,
  //     color: "rgba(127,96,132,.6)",
  //     name: "D.L.S.U.",
  //     dataPoints: [
  //       { y: 22, label: "R" },
  //       { y: 21, label: "I" },
  //       { y: 43, label: "A" },
  //       { y: 10, label: "S" },
  //       { y: 12, label: "E" },
  //       { y: 22, label: "C" }
  //
  //     ]
  //   },
  //   {
  //     type: "splineArea",
  //     showInLegend: true,
  //     color: "rgba(127,96,255,.6)",
  //     name: "F.E.U.",
  //     dataPoints: [
  //       { y: 23, label: "R" },
  //       { y: 43, label: "I" },
  //       { y: 12, label: "A" },
  //       { y: 51, label: "S" },
  //       { y: 22, label: "E" },
  //       { y: 24, label: "C" }
  //     ]
  //   }
  //
  //   ]
  // });
  //
  // splineArea.render();
  // var stackedArea = new CanvasJS.Chart("stackedArea", {
  //   animationEnabled: true,
  //   toolTip: {
  //     shared: true
  //   },
  //   axisX: {
  //     valueFormatString: "MMM",
  //     interval: 1,
  //     intervalType: "month"
  //   },
  //
  //
  //   legend: {
  //     verticalAlign: "bottom",
  //     horizontalAlign: "center"
  //   },
  //   data: [
  //   {
  //     type: "stackedArea",
  //     showInLegend: true,
  //     name: "Makati",
  //     color: "rgba(54,158,173,.6)",
  //     dataPoints: [
  //       { y: res[0], label: "R" },
  //       { y: res[1], label: "I" },
  //       { y: res[2], label: "A" },
  //       { y: res[3], label: "S" },
  //       { y: res[4], label: "E" },
  //       { y: res[5], label: "C" }
  //
  //     ]
  //   },
  //   {
  //     type: "stackedArea",
  //     showInLegend: true,
  //     name: "Quezon",
  //     color: "rgba(134,180,2,.7)",
  //     dataPoints: [
  //       { y: 23, label: "R" },
  //       { y: 44, label: "I" },
  //       { y: 6, label: "A" },
  //       { y: 19, label: "S" },
  //       { y: 28, label: "E" },
  //       { y: 11, label: "C" }
  //
  //     ]
  //   },
  //   {
  //     type: "stackedArea",
  //     showInLegend: true,
  //     color: "rgba(127,96,132,.6)",
  //     name: "Laguna",
  //     dataPoints: [
  //       { y: 22, label: "R" },
  //       { y: 21, label: "I" },
  //       { y: 43, label: "A" },
  //       { y: 10, label: "S" },
  //       { y: 12, label: "E" },
  //       { y: 22, label: "C" }
  //
  //     ]
  //   },
  //   {
  //     type: "stackedArea",
  //     showInLegend: true,
  //     color: "rgba(127,96,255,.6)",
  //     name: "Pangasinan",
  //     dataPoints: [
  //       { y: 23, label: "R" },
  //       { y: 43, label: "I" },
  //       { y: 12, label: "A" },
  //       { y: 51, label: "S" },
  //       { y: 22, label: "E" },
  //       { y: 24, label: "C" }
  //     ]
  //   }
  //   ]
  // });
  //
  // stackedArea.render();
}

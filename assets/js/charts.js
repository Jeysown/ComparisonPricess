function glen1() {
  createColumnChartoverview();
}
function createColumnChartoverview() {

  var chart = new CanvasJS.Chart("chartContainer",
      {
        backgroundColor:"#f1f1f1",
        animationEnabled: true,
        title:{
          text: "List of Resorts per Website"
        },
        legend: {
          maxWidth:600,
          itemWidth: 250,
        },
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


}
function createColumnCharttwoormore() {
  var totalNumberOFResortsIntwoOrmoreSites = new CanvasJS.Chart("twoOrMoreResortsContainer",
  {
      backgroundColor:"#f1f1f1",
      animationEnabled: true,
      title:{
        text: "Total Number of Resorts in two or more Sites"
      },
      axisX:{
        labelAngle:0
      },
      data: [
      {
        type: "pie",
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

}
function createColumnChartwholeday() {
  var percentageResultsforFBorOLXorBookingSitesChart = new CanvasJS.Chart("percentageResultsforFBorOLXorBookingSites",
  {
    backgroundColor:"#f1f1f1",
    title:{
      text: "Online Presence of the Resort - Whole DayBooking"
    },
    animationEnabled: true,
  axisY:{
        interval: 10
      },
      axisX:{
        labelAngle:0
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

}
function createColumnChartday() {
  var percentageResultsforFBorOLXorBookingSitesChart = new CanvasJS.Chart("percentageResultsforFBorOLXorBookingSites",
  {
    backgroundColor:"#f1f1f1",
    animationEnabled: true,
    title:{
      text: "Online Presence of the Resort - Half Day Booking"
    },
  axisY:{
        interval: 10
      },
  axisX:{
    labelAngle:0
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

}

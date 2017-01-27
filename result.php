<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
  </head>
	<body onload="createColumnChart()">
		<!-- Navigation -->
	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header page-scroll">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand page-scroll" href="dashboard.php">TrabaWHO</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
									<li class="hidden">
											<a href="dashboard.php"></a>
									</li>
									<li>
											<a class="page-scroll" href="dashboard.php#about">About</a>
									</li>
									<li>
											<a class="page-scroll" href="dashboard.php#interpretation">Interpretation</a>
									</li>

									<li>
											<a class="page-scroll" href="dashboard.php#team">Team</a>
									</li>
									<li>
											<a class="page-scroll" href="dashboard.php#contact">Contact</a>
									</li>
									<li>
											<a class="page-scroll" href="result.php#result">Result</a>
									</li>
							</ul>
					</div>
			</div>
	</nav>

		<?php
			$con = mysqli_connect('localhost','root','','csv');
			$query = "SELECT name,age,r,i,a,s,e,c FROM tb";
			$result = mysqli_query($con,$query);?>
			<div class="" style="background:url('assets/images/bg.jpg');height:700px;background-attachment:fixed;">

		  </div>
			<section id="result">

			<div>
				<div class="container marketing" style="padding-top:70px;">
					<div class="row">
				<div class="col-lg-12 text-center">
						<h2 class="section-heading">Results of all the examinations</h2>
						<h3 class="section-subheading text-muted" style="margin-bottom:50px;">How's the data?</h3>
				</div>
			</div>
			</div>
			</div>

		</section>
		<div >
				<div class="col-lg-8">
					<div class="result-border" style="height:470px;overflow-y:scroll;">
						<p class="title-result result">List of Results<a href="http://localhost:8080/TrabaWHO" target="_blank" class="btn btn-primary" style="float:right;">Download as CSV</a></p>
					<table class="table table-bordered" style="padding:10px;">
						<thead>
							<tr>
							<th>Name</th>
							<th>Age</th>
							<th>R</th>
							<th>I</th>
							<th>A</th>
							<th>S</th>
							<th>E</th>
							<th>C</th>
						</tr>
						</thead>
					<?php
					while($row = mysqli_fetch_assoc($result)){?>
						<tbody>
						<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['age'];?></td>
							<td><?php echo $row['r'];?></td>
							<td><?php echo $row['i'];?></td>
							<td><?php echo $row['a'];?></td>
							<td><?php echo $row['s'];?></td>
							<td><?php echo $row['e'];?></td>
							<td><?php echo $row['c'];?></td>
						</tr>
						</tbody>
					<?php }
				?>
					</table>

				</div>
				</div>
				<div class="col-lg-4" >
					<div class="result-border">
						<p class="title-result">Match Course</p>
					<div id="piechart" style="height: 400px; width: 100%;"></div>
					</div>
				</div>
				<div class="col-lg-6" >
					<div class="result-border">
						<p class="title-result">School</p>
					<div id="splineArea" style="height: 400px; width: 100%;">
					</div>
					</div>
				</div>
				<div class="col-lg-6" >
					<div class="result-border">
						<p class="title-result">Location</p>
					<div id="stackedArea" style="height: 400px; width: 100%;">
					</div>
					</div>
				</div>
									<?php $results = array(10,20,30,40,50,60);?>
				<div class="col-lg-12" >
					<div class="result-border">
						<p class="title-result">Overall Result</p>
				  <center><div id="chartContainer" style="width:90%;height:400px;"></div></center>
					</div>
				</div>
		</div>

<div class="col-lg-12" style="Padding:0px;">
	<footer>
		<div class="container">
			<div class="row">

				<div class="col-xs-12" style="padding:20px;">
					<div class="col-sm-6 col-xs-6" style="text-align:left;font-style:italic;padding:0px;">
						All Rights Reserved Copyright © 2016
					</div>
					<div class="col-sm-6 col-xs-6" style="text-align:right;padding:0px;">
						A Product by NiceSwan!
					</div>
				</div>
			</div>

				</div>
	</footer>
</div>
	</body>
</html>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

      <script src="assets/js/header.js"></script>
      <script src="assets/js/ease.js"></script>
			<script src="assets/js/canvasjs.min.js"></script>
		  <script src="assets/js/charts.js"></script>
	<script type="text/javascript">
	  var res=<?php echo json_encode( $results ) ?>;
	</script>

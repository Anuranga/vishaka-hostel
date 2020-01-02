<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vishaka - Hostel Management</title>
	<meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

	<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

	<style>
		/*# sourceMappingURL=style.css.map */

		#weatherWidget .currentDesc {
			color: #ffffff!important;
		}
		.traffic-chart {
			min-height: 335px;
		}
		#flotPie1  {
			height: 150px;
		}
		#flotPie1 td {
			padding:3px;
		}
		#flotPie1 table {
			top: 20px!important;
			right: -10px!important;
		}
		.chart-container {
			display: table;
			min-width: 270px ;
			text-align: left;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		#flotLine5  {
			height: 105px;
		}

		#flotBarChart {
			height: 150px;
		}
		#cellPaiChart{
			height: 160px;
		}

	</style>
</head>

<body>
<!-- Left Panel -->
<?php  include_once ('LeftPanel.php')?>

<div id="right-panel" class="right-panel">
	<!-- Header-->
	<header id="header" class="header">
		<div class="top-left">
			<div class="navbar-header">
				<a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>images/logo.png" alt="Logo"></a>
				<a class="navbar-brand hidden" href="./"><img src="<?php echo base_url(); ?>images/logo2.png" alt="Logo"></a>
				<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
			</div>
		</div>
		<div class="top-right">
			<div class="header-menu">
				<div class="header-left">
					<button class="search-trigger"><i class="fa fa-search"></i></button>
					<div class="form-inline">
						<form class="search-form">
							<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
							<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
						</form>
					</div>

					<div class="dropdown for-notification">
					</div>

					<div class="dropdown for-message">
					</div>
				</div>

				<div class="user-area dropdown float-right">
					<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="user-avatar rounded-circle" src="<?php echo base_url(); ?>images/admin.jpg" alt="User Avatar">
					</a>

					<div class="user-menu dropdown-menu">
						<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

						<a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

						<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

						<a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
					</div>
				</div>

			</div>
		</div>
	</header>
	<!-- /#header -->
	<!-- Content -->
	<div class="content">
		<!-- Animated -->
		<div class="animated fadeIn">
			<!-- Widgets  -->
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="stat-widget-five">
								<div class="stat-icon dib flat-color-1">
									<i class="pe-7s-cash"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text">$<span class="count">23569</span></div>
										<div class="stat-heading">Revenue</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="stat-widget-five">
								<div class="stat-icon dib flat-color-2">
									<i class="pe-7s-cart"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text"><span class="count">3435</span></div>
										<div class="stat-heading">Sales</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="stat-widget-five">
								<div class="stat-icon dib flat-color-3">
									<i class="pe-7s-browser"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text"><span class="count">349</span></div>
										<div class="stat-heading">Templates</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="stat-widget-five">
								<div class="stat-icon dib flat-color-4">
									<i class="pe-7s-users"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text"><span class="count">2986</span></div>
										<div class="stat-heading">Clients</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Widgets -->
			<!--  Traffic  -->
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<h4 class="box-title">Traffic </h4>
						</div>
						<div class="row">
							<div class="col-lg-8">
								<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
								<div class="card-body">
									<!-- <canvas id="TrafficChart"></canvas>   -->
									<div id="traffic-chart1" class="traffic-chart"></div>

								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-body">
									<div class="progress-box progress-1">
										<h4 class="por-title">Visits</h4>
										<div class="por-txt">96,930 Users (40%)</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="progress-box progress-2">
										<h4 class="por-title">Bounce Rate</h4>
										<div class="por-txt">3,220 Users (24%)</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="progress-box progress-2">
										<h4 class="por-title">Unique Visitors</h4>
										<div class="por-txt">29,658 Users (60%)</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="progress-box progress-2">
										<h4 class="por-title">Targeted  Visitors</h4>
										<div class="por-txt">99,658 Users (90%)</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div> <!-- /.card-body -->
							</div>
						</div> <!-- /.row -->
						<div class="card-body"></div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>

	<div class="clearfix"></div>

	<?php  include_once ('footer.php')?>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/init/fullcalendar-init.js"></script>

<!--Local Stuff-->
<script>
	jQuery(document).ready(function($) {
		"use strict";
		// Line Chart  #flotLine5
		var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];
		// Line Chart  #flotLine5 End
		// Traffic Chart using chartist
		if ($('#traffic-chart').length) {
			var chart = new Chartist.Line('#traffic-chart', {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
				series: [
					[0, 18000, 35000,  25000,  22000,  0],
					[0, 33000, 15000,  20000,  15000,  300],
					[0, 15000, 28000,  15000,  30000,  5000]
				]
			}, {
				low: 0,
				showArea: true,
				showLine: false,
				showPoint: false,
				fullWidth: true,
				axisX: {
					showGrid: true
				}
			});

			chart.on('draw', function(data) {
				if(data.type === 'line' || data.type === 'area') {
					data.element.animate({
						d: {
							begin: 2000 * data.index,
							dur: 2000,
							from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
							to: data.path.clone().stringify(),
							easing: Chartist.Svg.Easing.easeOutQuint
						}
					});
				}
			});
		}
		// Traffic Chart using chartist End
		//Traffic chart chart-js
		if ($('#TrafficChart').length) {
			var ctx = document.getElementById( "TrafficChart" );
			ctx.height = 150;
			var myChart = new Chart( ctx, {
				type: 'line',
				data: {
					labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
					datasets: [
						{
							label: "Visit",
							borderColor: "rgba(4, 73, 203,.09)",
							borderWidth: "1",
							backgroundColor: "rgba(4, 73, 203,.5)",
							data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
						},
						{
							label: "Bounce",
							borderColor: "rgba(245, 23, 66, 0.9)",
							borderWidth: "1",
							backgroundColor: "rgba(245, 23, 66,.5)",
							pointHighlightStroke: "rgba(245, 23, 66,.5)",
							data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
						},
						{
							label: "Targeted",
							borderColor: "rgba(40, 169, 46, 0.9)",
							borderWidth: "1",
							backgroundColor: "rgba(40, 169, 46, .5)",
							pointHighlightStroke: "rgba(40, 169, 46,.5)",
							data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
						}
					]
				},
				options: {
					responsive: true,
					tooltips: {
						mode: 'index',
						intersect: false
					},
					hover: {
						mode: 'nearest',
						intersect: true
					}

				}
			} );
		}
		//Traffic chart chart-js  End
	});
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {packages:['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			["Element", "Density", { role: "style" } ],
			["Copper", 8.94, "#b87333"],
			["Silver", 10.49, "silver"],
			["Gold", 19.30, "gold"],
			["Platinum", 21.45, "color: #e5e4e2"]
		]);

		var view = new google.visualization.DataView(data);
		view.setColumns([0, 1,
			{ calc: "stringify",
				sourceColumn: 1,
				type: "string",
				role: "annotation" },
			2]);

		var options = {
			title: "Density of Precious Metals, in g/cm^3",
			width: 600,
			height: 400,
			bar: {groupWidth: "95%"},
			legend: { position: "none" },
		};
		var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
		chart.draw(view, options);
	}
</script>

</body>
</html>

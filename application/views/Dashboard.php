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
									<i  class="menu-icon fa fa-sign-in"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text"><span class="count">113</span></div>
										<div class="stat-heading">In Student Count</div>
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
									<i class="fa fa-sign-out"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text"><span class="count">34</span></div>
										<div class="stat-heading">Out Student Count</div>
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
									<i class="fa fa-user"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text"><span class="count">25</span></div>
										<div class="stat-heading">Visitors Count</div>
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
									<i class="fa fa-th-large"></i>
								</div>
								<div class="stat-content">
									<div class="text-left dib">
										<div class="stat-text"><span class="count">2</span></div>
										<div class="stat-heading">Available Beds</div>
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
							<h4 class="box-title">Gate Pass </h4>
						</div>
						<div class="row">
							<div class="col-lg-8">
								<div class="card-body">
									<!-- <canvas id="TrafficChart"></canvas>   -->
									<div id="traffic-chart" class="traffic-chart"></div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-body">
									<div class="progress-box progress-1">
										<h4 class="por-title">Going Home</h4>
										<div class="por-txt">30 Users (40%)</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="progress-box progress-2">
										<h4 class="por-title">Day Out</h4>
										<div class="por-txt">20 Students (24%)</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="progress-box progress-2">
										<h4 class="por-title">Sports Out</h4>
										<div class="por-txt">29 Students (60%)</div>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="progress-box progress-2">
										<h4 class="por-title">Others</h4>
										<div class="por-txt">9 (90%)</div>
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

		// Pie chart flotPie1
		var piedata = [
			{ label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
			{ label: "Tab visits", data: [[1,33]], color: '#ef5350'},
			{ label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
		];

		/*$.plot('#flotPie1', piedata, {
			series: {
				pie: {
					show: true,
					radius: 1,
					innerRadius: 0.65,
					label: {
						show: true,
						radius: 2/3,
						threshold: 1
					},
					stroke: {
						width: 0
					}
				}
			},
			grid: {
				hoverable: true,
				clickable: true
			}
		});*/
		// Pie chart flotPie1  End
		// cellPaiChart
		var cellPaiChart = [
			{ label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
			{ label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
		];
		/*$.plot('#cellPaiChart', cellPaiChart, {
			series: {
				pie: {
					show: true,
					stroke: {
						width: 0
					}
				}
			},
			legend: {
				show: false
			},grid: {
				hoverable: true,
				clickable: true
			}

		});*/
		// cellPaiChart End
		// Line Chart  #flotLine5
		var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

		/*var plot = $.plot($('#flotLine5'),[{
				data: newCust,
				label: 'New Data Flow',
				color: '#fff'
			}],
			{
				series: {
					lines: {
						show: true,
						lineColor: '#fff',
						lineWidth: 2
					},
					points: {
						show: true,
						fill: true,
						fillColor: "#ffffff",
						symbol: "circle",
						radius: 3
					},
					shadowSize: 0
				},
				points: {
					show: true,
				},
				legend: {
					show: false
				},
				grid: {
					show: false
				}
			});*/
		// Line Chart  #flotLine5 End
		// Traffic Chart using chartist
		if ($('#traffic-chart').length) {
			var chart = new Chartist.Line('#traffic-chart', {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
				series: [
					[0, 180, 350,  250,  220,  0],
					[0, 330, 150,  200,  150,  300],
					[0, 150, 280,  150,  300,  50]
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
		// Bar Chart #flotBarChart
		/*$.plot("#flotBarChart", [{
			data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
			bars: {
				show: true,
				lineWidth: 0,
				fillColor: '#ffffff8a'
			}
		}], {
			grid: {
				show: false
			}
		});*/
		// Bar Chart #flotBarChart End
	});
</script> 
</body>
</html>

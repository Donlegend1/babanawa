<!DOCTYPE html>
<html class="no-js" lang="zxx">

	<head>

		<!--=========================*
																Met Data
				*===========================-->
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Babanawa Administration">

		<!--=========================*
														Page Title
				*===========================-->
		<title>Babanawa Administration</title>

		<!--=========================*
																Favicon
				*===========================-->
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

		<!--=========================*
												Bootstrap Css
				*===========================-->
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<!--=========================*
														Custom CSS
				*===========================-->
		<link rel="stylesheet" href="/css/style.css">
		<!-- jQuery CDN -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<!--=========================*
															Owl CSS
				*===========================-->
		<link href="/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
		<link href="/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
		<!--=========================*
									Fullscreen Calendar
				*===========================-->
		<link rel="stylesheet" href="vendors/fullcalendar/dist/fullcalendar.min.css">
		<link rel="stylesheet" href="vendors/fullcalendar/dist/fullcalendar.print.min.css" media="print">

		<!--=========================*
												Font Awesome
				*===========================-->
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<script src="/js/excel.min.js"></script>

		<!--=========================*
													Themify Icons
				*===========================-->
		<link rel="stylesheet" href="/css/themify-icons.css">

		<script src="/js/excel.min.js"></script>

		<!--=========================*
															Ionicons
				*===========================-->
		<link href="/css/ionicons.min.css" rel="stylesheet" />

		<!--=========================*
														EtLine Icons
				*===========================-->
		<link href="/css/et-line.css" rel="stylesheet" />

		<!--=========================*
														Feather Icons
				*===========================-->
		<link href="/css/feather.css" rel="stylesheet" />

		<!--=========================*
														Flag Icons
				*===========================-->
		<link href="/css/flag-icon.min.css" rel="stylesheet" />

		<!--=========================*
														Modernizer
				*===========================-->
		<script src="/js/modernizr-2.8.3.min.js"></script>

		<!--=========================*
															Metis Menu
				*===========================-->
		<link rel="stylesheet" href="/css/metisMenu.css">

		<!--=========================*
															Slick Menu
				*===========================-->
		<link rel="stylesheet" href="/css/slicknav.min.css">

		<!--=========================*
															AM Chart
				*===========================-->
		<link rel="stylesheet" href="/vendors/am-charts/css/am-charts.css" type="text/css" media="all" />

		<!--=========================*
															Morris Css
				*===========================-->
		<link rel="stylesheet" href="/vendors/charts/morris-bundle/morris.css">

		<!--=========================*
												Google Fonts
				*===========================-->
		<!-- Include CKEditor from CDN -->
		<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

		<!-- Montserrat USE: font-family: 'Montserrat', sans-serif;-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

		<!-- Choices.js CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">

		<!-- Choices.js JS -->
		<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
		<script src="https://js.paystack.co/v1/inline.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	</head>

	<body>

		@yield('content')
		</div>
		<!--=================================*
																																																											End Main Content Section
																																																				*===================================-->

		<!--=================================*
																																																																		Footer Section
																																																				*===================================-->
		<footer>
			<div class="footer-area">
				<p>&copy; Copyright 2023. All right reserved</p>
			</div>
		</footer>
		<!--=================================*
																																																																End Footer Section
																																																				*===================================-->

		</div>
		<!--=========================*
																																																								End Page Container
																																																*===========================-->

		<!--=========================*
																																																						Offset Sidebar Menu
																																																*===========================-->
		<div class="offset-area">
			<div class="offset-close"><i class="ti-close"></i></div>
			<ul class="nav offset-menu-tab">
				<li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
				<li><a data-toggle="tab" href="#settings">Settings</a></li>
			</ul>
			<div class="offset-content tab-content">
				<div id="activity" class="tab-pane fade in show active">
					<div class="recent-activity">
						<div class="timeline-task">
							<div class="icon bg_secondary">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="781">
									<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>You got 1 New Message</h4>
								<span class="time"><i class="ti-time"></i>09:35</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
							</p>
						</div>
						<div class="timeline-task">
							<div class="icon bg_success">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<polyline points="20 6 9 17 4 12"></polyline>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>Your Verification Successful</h4>
								<span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur.
							</p>
						</div>
						<div class="timeline-task">
							<div class="icon bg_danger">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
									</path>
									<line x1="12" y1="9" x2="12" y2="13"></line>
									<line x1="12" y1="17" x2="12" y2="17"></line>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>Something Went Wrong</h4>
								<span class="time"><i class="ti-time"></i>09:20 Am</span>
							</div>
						</div>
						<div class="timeline-task">
							<div class="icon bg_warning">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>Member waiting for your Response</h4>
								<span class="time"><i class="ti-time"></i>09:35</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
							</p>
						</div>
						<div class="timeline-task">
							<div class="icon bg_info">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<polyline points="3 6 5 6 21 6"></polyline>
									<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
									</path>
									<line x1="10" y1="11" x2="10" y2="17"></line>
									<line x1="14" y1="11" x2="14" y2="17"></line>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>You Deleted Jhon Doe</h4>
								<span class="time"><i class="ti-time"></i>01 minutes ago</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
							</p>
						</div>
					</div>
				</div>
				<div id="settings" class="tab-pane fade">
					<div class="offset-settings">
						<h4>General Settings</h4>
						<div class="settings-list">
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Notifications</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch1" />
										<label for="switch1">Toggle</label>
									</div>
								</div>
								<p>Keep it 'On' When you want to get all the notification.</p>
							</div>
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Show recent activity</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch2" />
										<label for="switch2">Toggle</label>
									</div>
								</div>
								<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
							</div>
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Show your emails</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch3" />
										<label for="switch3">Toggle</label>
									</div>
								</div>
								<p>Show email so that easily find you.</p>
							</div>
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Show Task statistics</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch4" />
										<label for="switch4">Toggle</label>
									</div>
								</div>
								<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--=========================*
												Scripts
*===========================-->

		<!--=========================*
												Scripts
*===========================-->

		<!-- Jquery Js -->
		<script src="/js/jquery.min.js"></script>
		<!-- bootstrap 4 js -->
		<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<!-- Owl Carousel Js -->
		<script src="/js/owl.carousel.min.js"></script>
		<!-- Metis Menu Js -->
		<script src="/js/metisMenu.min.js"></script>
		<!-- SlimScroll Js -->
		<script src="/js/jquery.slimscroll.min.js"></script>
		<!-- Slick Nav -->
		<script src="/js/jquery.slicknav.min.js"></script>
		<!-- start amchart js -->
		<script src="/vendors/am-charts/js/ammap.js"></script>
		<script src="/vendors/am-charts/js/worldLow.js"></script>
		<script src="/vendors/am-charts/js/continentsLow.js"></script>
		<script src="/vendors/am-charts/js/light.js"></script>
		<!-- maps js -->
		<script src="/js/am-maps.js"></script>

		<!--Morris Chart-->
		<script src="/vendors/charts/morris-bundle/raphael.min.js"></script>
		<script src="/vendors/charts/morris-bundle/morris.js"></script>

		<!--Chart Js-->
		<script src="/vendors/charts/charts-bundle/Chart.bundle.js"></script>

		<!--Sparkline Chart-->
		<script src="/vendors/charts/sparkline/jquery.sparkline.js"></script>

		<!--Home Script-->
		<script src="/js/home.js"></script>

		<!-- Main Js -->
		<script src="/js/main.js"></script>

		<!--=========================*
								FullCalendar
*===========================-->
		<!-- jQuery UI 1.11.4 -->
		<script src="/vendors/jquery-ui/jquery-ui.min.js"></script>
		<script src="/vendors/moment/moment.js"></script>

		<script src="/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"
			integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script>
			var income = @json($query ?? '');
			var expense = @json($expensesQuery ?? '');

			// Extract 'created_at' values from both arrays
			var incomeDates = income.map(dataPoint => dataPoint.created_at);
			var expenseDates = expense.map(dataPoint => dataPoint.created_at);

			// Combine and sort the 'created_at' values
			var combinedDates = [...incomeDates, ...expenseDates].sort();

			// Fetch unique dates to ensure no duplicates
			var uniqueDates = [...new Set(combinedDates)];

			var ctx = document.getElementById('myChart').getContext('2d');
			var myChart;

			var config = {
				type: 'line',
				data: {
					labels: uniqueDates.map(date => formatCustomDate(date)),
					datasets: [{
							label: 'Income',
							backgroundColor: '#06D6A0',
							borderColor: '#06D6A0',
							data: uniqueDates.map(date => {
								const incomeDataPoint = income.find(dataPoint => dataPoint.created_at === date);
								return incomeDataPoint ? incomeDataPoint.AmountPaid : 0;
							}),
							fill: false,
						},
						{
							label: 'Expenses',
							backgroundColor: 'blue',
							borderColor: 'blue',
							data: uniqueDates.map(date => {
								const expenseDataPoint = expense.find(dataPoint => dataPoint.created_at === date);
								return expenseDataPoint ? expenseDataPoint.amount : 0;
							}),
							fill: false,
						},
					]
				},
				options: {
					responsive: true,
					scales: {
						x: {
							type: 'time',
							time: {
								unit: 'day'
							}
						},
						y: {
							beginAtZero: true
						}
					}
				}
			};

			myChart = new Chart(ctx, config);

			// Function to format the date to "20 January 2023, 11am" format
			function formatCustomDate(dateString) {
				const options = {
					day: 'numeric',
					month: 'long',
					year: 'numeric',
					hour: 'numeric',
					minute: 'numeric'
				};
				return new Date(dateString).toLocaleDateString('en-US', options);
			}

			function fetchData() {
				var start_date = document.getElementById('start_date').value;
				var end_date = document.getElementById('end_date').value;

				fetch(`/graph/filter?start_date=${start_date}&end_date=${end_date}`)
					.then(response => response.json())
					.then(data => {
						// Once data is retrieved, update the chart
						updateChart(data.data); // Pass the data directly to updateChart
					})
					.catch(error => console.error('Error fetching data:', error));
			}

			function updateChart(data) {
				if (myChart) {
					myChart.destroy(); // Destroy the existing chart if it exists
				}

				// Extract 'created_at' values from both arrays
				var incomeDates = data.incomeData.map(dataPoint => dataPoint.created_at);
				var expenseDates = data.expenseData.map(dataPoint => dataPoint.created_at);

				// Combine and sort the 'created_at' values
				var combinedDates = [...incomeDates, ...expenseDates].sort();

				// Fetch unique dates to ensure no duplicates
				var uniqueDates = [...new Set(combinedDates)];

				var ctx = document.getElementById('myChart').getContext('2d');

				var config = {
					type: 'line',
					data: {
						labels: uniqueDates.map(date => formatCustomDate(date)),
						datasets: [{
								label: 'Income',
								backgroundColor: '#06D6A0',
								borderColor: '#06D6A0',
								data: uniqueDates.map(date => {
									const dataPoint = data.incomeData.find(point => point.created_at === date);
									return dataPoint ? dataPoint.AmountPaid : 0;
								}),
								fill: false,
							},
							{
								label: 'Expenses',
								backgroundColor: 'blue',
								borderColor: 'blue',
								data: uniqueDates.map(date => {
									const dataPoint = data.expenseData.find(point => point.created_at === date);
									return dataPoint ? dataPoint.amount : 0;
								}),
								fill: false,
							},
						]
					},
					options: {
						responsive: true,
						scales: {
							x: {
								type: 'time',
								time: {
									unit: 'day'
								}
							},
							y: {
								beginAtZero: true
							}
						}
					}
				};

				myChart = new Chart(ctx, config);
			}
		</script>

		<script>
			ClassicEditor.create(document.querySelector('#editor1'))
				.then(editor => {
					editor.model.document.on('change:data', () => {
						// Editor content has changed, update the hidden input field
						document.querySelector('#message').value = editor.getData();
					});
				})
				.catch(error => {
					console.error(error);
				});
		</script>
		<script>
			// Initialize Choices.js for the 'To' select element
			const toSelect = new Choices('#to-select', {
				placeholder: true,
				placeholderValue: 'Select users...',
				searchPlaceholderValue: 'Search users...',
				removeItems: true,
			});

			// Initialize Choices.js for the 'CC' select element
			const ccSelect = new Choices('#cc-select', {
				placeholder: true,
				placeholderValue: 'Select users...',
				searchPlaceholderValue: 'Search users...',
				removeItems: true,
			});

			$(document).ready(function() {
				// Add Row
				$("#add-row").click(function() {
					var clone = $(".form-row:first").clone(true);
					clone.find("input, select").val("");
					clone.find('.remove-row').show();
					$(".container").append(clone);
				});

				// Remove Row
				$(document).on("click", ".remove-row", function() {
					if ($(".form-row").length > 1) {
						$(this).closest('.form-row').remove();
					}
				});
				$(document).on('input', '#unit_price, #qty', function() {
					var price = parseFloat($('#unit_price').val()) || 0;
					var quantity = parseFloat($('#qty').val()) || 0;
					var total = price * quantity;
					$('#amount').val(total.toFixed(2)); // Set the total price in the "Total Price" field
				});
			});
		</script>

		<!-- Calendar Init -->
		<script src="/js/init/full-calendar.js"></script>
		<script>
			$(document).ready(function() {
				$("#exporincome").click(function() {
					$("#income").table2excel({
						exclude: ".noExl",
						name: "Worksheet Name",
						filename: "income data",
						fileext: ".xls",
						exclude_img: true,
						exclude_links: true,
						exclude_inputs: true
					});
				});
			});
			$(document).ready(function() {
				$("#expense").click(function() {
					$("#expenseTable").table2excel({
						exclude: ".noExl",
						name: "Worksheet Name",
						filename: "expenses data",
						fileext: ".xls",
						exclude_img: true,
						exclude_links: true,
						exclude_inputs: true
					});
				});
			});
		</script>

	</body>

</html>

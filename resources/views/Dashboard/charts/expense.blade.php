	<div class="row">
	<div class="col-lg-12 stretched_card mt-4">
	<div class="card">
	<div class="card-body">
	<h4 class="card_title">Income & Expense Chart</h4>
	<div class="d-flex total_sales_sec mt-2 mt-3">
	<div class="col-md-5">

	</div>
	<div class="col-md-7 row no-gutters mt-2">
	<div class="col-sm-6">
	<div class="sales-info"><span class="sales-info-box bg-success mr-2"></span>
	<div class="sales-info-body">
	<h6>Income</h6>
	</div>
	</div>
	</div>
	<div class="col-sm-6">
	<div class="sales-info"><span class="sales-info-box bg-primary mr-2"></span>
	<div class="sales-info-body">
	<h6>Expenses</h6>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="mb-10">
	<label for="start_date">Start Date:</label>
	<input type="date" name="start_date" id="start_date" class="form-control"
	value="{{ request('start_date', '2023-01-01') }}">

	<label for="end_date">End Date:</label>
	<input type="date" name="end_date" id="end_date" class="form-control"
	value="{{ request('end_date', now()->format('Y-m-d')) }}">
	<div class="text-right mt-3 mb-5">
	<button type="button" onclick="fetchData();" class="btn btn-primary btn-sm">Filter</button>

	</div>
	</div>

	<canvas id="myChart" width="400" height="200"></canvas>
	</div>
	</div>
	</div>

	</div>

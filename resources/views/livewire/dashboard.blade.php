<div class="main-content-inner">
    <div class="col-md-12 rt_subheader">
        <div class="subheader_btns">

            {{--             <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-watch mr-0"></i></a>
 --}}
            <select wire:model="selectedPeriod" class="form-control">
                <option value="">--Filter Information --</option>
                <option value="day">Day</option>
                <option value="week">Week</option>
                <option value="month">Month</option>
                <option value="year">Year</option>
            </select>

        </div>

    </div>

    <div class="row mt-3">

        <div class="col-lg-4 col-md-6 stretched_card pl-mob-3 mb-mob-3">
            <div class="card bg-primary analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row align-items-center justify-content-between flex-wrap">
                        <div class="icon-rounded">
                            <i class="feather ft-trending-up text-primary"></i>
                        </div>
                        <div class="text-white">
                            <p class="mt-xl-0 text-xl-left mb-2">Total Income</p>
                            
                            <div
                                class="d-flex flex-md-column flex-xl-row align-items-baseline align-items-md-center align-items-xl-baseline flex-wrap">
                                <h3 class="mb-md-1 mb-lg-0 mb-0 mr-1 text-white">₦{{ number_format($totalIncome, 0) }}
                                </h3>

                                {{-- <small class="stats_icon">3% <span class="feather ft-chevron-up"></span></small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 stretched_card mb-mob-3">
            <div class="card bg-primary analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row align-items-center justify-content-between flex-wrap">
                        <div class="icon-rounded">
                            <i class="feather ft-shopping-bag text-primary"></i>
                        </div>
                        <div class="text-white">
                            <p class="mt-xl-0 text-xl-left mb-2">School Fees</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row align-items-baseline align-items-md-center align-items-xl-baseline flex-wrap">
                                <h3 class="mb-md-1 mb-lg-0 mb-0 mr-1 text-white">0</h3>
                                {{-- <small class="stats_icon">5% <span class="feather ft-chevron-up"></span></small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 stretched_card mb-xs-mob-3">
            <div class="card bg-primary analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row align-items-center justify-content-between flex-wrap">
                        <div class="icon-rounded">
                            <i class="feather ft-users text-primary"></i>
                        </div>
                        <div class="text-white">
                            <p class="mt-xl-0 text-xl-left mb-2">Application fees</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row align-items-baseline align-items-md-center align-items-xl-baseline flex-wrap">
                                <h3 class="mb-md-1 mb-lg-0 mb-0 mr-1 text-white">₦{{ number_format($totalRem, 0) }}</h3>

                               {{--  <small class="stats_icon">2% <span class="feather ft-chevron-up"></span></small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-3">

        <div class="col-lg-4 col-md-6 stretched_card pl-mob-3 mb-mob-3">
            <div class="card bg-warning analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row align-items-center justify-content-between flex-wrap">
                        <div class="icon-rounded">
                            <i class="feather ft-trending-up text-primary"></i>
                        </div>
                        <div class="text-dark">
                            <p class="mt-xl-0 text-xl-left mb-2">Application Expenses</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row align-items-baseline align-items-md-center align-items-xl-baseline flex-wrap">
                                <h3 class="mb-md-1 mb-lg-0 text-dark mb-0 mr-1">₦{{ number_format($sumexpen, 0) }}</h3>
                                {{-- <small class="stats_icon">3% <span class="feather ft-chevron-up"></span></small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 stretched_card mb-mob-3">
            <div class="card bg-warning analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row align-items-center justify-content-between flex-wrap">
                        <div class="icon-rounded">
                            <i class="feather ft-shopping-bag text-dark"></i>
                        </div>
                        <div class="text-dark">
                            <p class="mt-xl-0 text-xl-left mb-2">School Fees Expenses</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row align-items-baseline align-items-md-center align-items-xl-baseline flex-wrap">
                                <h3 class="mb-md-1 mb-lg-0 text-dark mb-0 mr-1">0</h3>
                               {{--  <small class="stats_icon">5% <span class="feather ft-chevron-up"></span></small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 stretched_card mb-xs-mob-3">
            <div class="card bg-warning analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row align-items-center justify-content-between flex-wrap">
                        <div class="icon-rounded">
                            <i class="feather ft-users text-dark"></i>
                        </div>
                        <div class="text-dark">
                            <p class="mt-xl-0 text-xl-left mb-2">Contribution Expense</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row align-items-baseline align-items-md-center align-items-xl-baseline flex-wrap">
                                <h3 class="mb-md-1 mb-lg-0 text-dark mb-0 mr-1">0</h3>
                               {{--  <small class="stats_icon">2% <span class="feather ft-chevron-up"></span></small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Income & Expense Chart</h4>
                    <div class="d-flex mt-2 total_sales_sec mt-3">
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
                    <div id="morris_line"></div>
                </div>
            </div>
        </div>
   
    </div>

    <div class="row">
        <!-- Progress Table start -->


        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">

                    <h3 class="card_title">Income Table</h3>
                    <div class="text-right">

                        <div class="card card-icon text-center">
                            <div class="card-body">
                                <i class="ti-download"></i>
                                
                             
                            </div>
                        </div>
                        <br>


                    </div>


                    <div class="single-table">
                        <div class="table-responsive">
                            <table id="income" class="table-hover progress-table table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Description</th>


                                        <th scope="col">Amount</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paymentsdata as $payment)
                                        <tr>
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td scope="col">
                                                {{ Carbon\Carbon::parse($payment->date)->isoFormat('Do MMMM YYYY') }}
                                            </td>

                                            <td scope="col">{{ $payment->payment_type }}</td>

                                            <td scope="col">{{ $payment->paidFor }}</td>

                                            <td scope="col">{{ $payment->AmountPaid }}</td>
                                    @endforeach

                                </tbody>
                                <!-- Hardcoded Left Arrow -->

                            </table>
                            
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Progress Table end -->
    </div>
    <div class="row">
        <!-- Progress Table start -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Expenses Table</h4>


                  {{--   <h3 class="card_title">Income Table</h3> --}}
                    <div class="text-right">

                        <div class="card card-icon text-center">
                            <div class="card-body">
                                <i class="ti-download" id="expense"></i>
                                
                             
                            </div>
                        </div>
                        <br>

                        {{--                         <button class="btn btn-primary" id="exporincome">Export to Excel</button>
 --}}

                    </div>
        {{--             <div class="text-right">
                        <button class="btn btn-primary" id="expense">Export to Excel</button>

                    </div> --}}

                    <div class="single-table">
                        <div class="table-responsive">
                            <table id="expenseTable" class="table-hover progress-table table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Expense Type</th>

                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Qunatity</th>

                                        <th scope="col">Amount</th>

                                        <th scope="col">Date</th>
                                      {{--   <th scope="col">Action</th> --}}

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expenses as $expense)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>

                                            <td>{{ $expense->sort_code }}</td>


                                            <td>{{ $expense->expense_type_name }}</td>

                                            <td>{{ number_format($expense->unit_price) }}</td>
                                            <td>{{ $expense->qty }}</td>
                                            <td>{{ number_format($expense->amount) }}</td>

                                            <td>{{ Carbon\Carbon::parse($expense->created_at)->isoFormat('Do MMMM YYYY') }}
                                            </td>

                                          {{--   <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3">
                                                        <button type="button" class="btn btn-inverse-primary"
                                                            data-toggle="modal"
                                                            data-target="#editModal{{ $loop->iteration }}">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-inverse-danger"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $loop->iteration }}">
                                                            <i class="ti-trash"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </td> --}}
                                        </tr>
                                        <div class="modal fade" id="editModal{{ $loop->iteration }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $loop->iteration }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Expense Type</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span></button>
                                                        </div>
                                                        <form action={{ route('edit_expense') }} method="POST">
                                                            @csrf
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="form-group">
                                                                        <label for="expense_type_1">Expense Type
                                                                        </label>
                                                                        <select class="form-control form-control-lg"
                                                                            name="expense_type" id="expense_type_1">
                                                                            <option value="">Select Expense
                                                                                Type</option>
                                                                            @foreach ($expensesType as $type)
                                                                                <option value="{{ $type->id }}"
                                                                                    {{ $type->name == $expense->expense_type_name ? 'selected' : '' }}>
                                                                                    {{ $type->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $expense->id }}">

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="amount">Unit Price </label>
                                                                        <input class="form-control form-control-lg"
                                                                            name="unit_price" type="text"
                                                                            placeholder="Price per unit"
                                                                            id="example-text-input-lg"
                                                                            value="{{ $expense->unit_price }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="amount">Qunatity </label>
                                                                        <input class="form-control form-control-lg"
                                                                            name="qty" type="integer"
                                                                            placeholder="Qunatity"
                                                                            value="{{ $expense->qty }}"
                                                                            id="example-text-input-lg">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal content for editing the current row -->
                                        </div>

                                        <!-- Delete Modal for Current Row -->
                                        <div class="modal fade" id="deleteModal{{ $loop->iteration }}"
                                            tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel{{ $loop->iteration }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            delete{{ $expense->expense_type_name }} </h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>&times;</span></button>
                                                    </div>
                                                    <form action={{ route('delete_expense') }} method="POST">
                                                        @csrf
                                                        <div class="card">
                                                            <div class="card-body">

                                                                <div class="form-group">
                                                                    <h5>Pls confirm you want to delete
                                                                        {{ $expense->expense_type_name }} of
                                                                        {{ number_format($expense->amount) }} made
                                                                        on
                                                                        {{ Carbon\Carbon::parse($expense->created_at)->isoFormat('Do MMMM YYYY') }}
                                                                        ?
                                                                    </h5>

                                                                    <input type="hidden" name="id"
                                                                        value="{{ $expense->id }}">

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </tbody>
                            </table>
                            <ul class="pagination pg-color-border">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <span class="ti-angle-left"></span>
                                    </a>
                                </li>
                                <!-- Dynamic Pagination Links -->
                                {{ $expenses->onEachSide(5)->links() }}
                                <!-- Hardcoded Right Arrow -->
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <span class="ti-angle-right"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Table end -->
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        var data = google.visualization.arrayToDataTable({!! $data !!});

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Income', 'Expenses'],
                {!! $data !!}
            ]);

            var options = {
                title: 'Income and Expenses',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.hook('message.processed', (message, component) => {
                // Handle Livewire events here
                if (message.updateQueue[0].method === 'updatedSelectedPeriod') {
                    // Call the JavaScript function when selectedPeriod is updated
                    drawChart();
                }
            });
        });
    </script>
</div>

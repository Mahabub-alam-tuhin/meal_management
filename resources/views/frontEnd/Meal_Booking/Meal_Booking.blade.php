@extends('frontEnd.user-master')
@section('title')
    Home
@endsection
@section('content')
<div class="page-body">
    <div>
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h5> Dashboard </h5>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-dashboard">
                            <div class="d-flex">
                                <div class="text-end">
                                    <h4 class="mt-0 counter font-primary">{{$payment}}</h4>
                                    <span>Total Amount</span>
                                </div>
                            </div>
                            <div class="dashboard-chart-container">
                                <div id="line-chart-sparkline-dashboard1"
                                    class="flot-chart-placeholder line-chart-sparkline"><canvas
                                        width="223" height="50"
                                        style="display: inline-block; width: 223.3px; height: 50px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-dashboard">
                            <div class="d-flex">
                                <div class="text-end">
                                    <h4 class="mt-0 counter font-primary">{{$due}}</h4>
                                    <span>Total Due</span>
                                </div>
                            </div>
                            <div class="dashboard-chart-container">
                                <div id="line-chart-sparkline-dashboard1"
                                    class="flot-chart-placeholder line-chart-sparkline"><canvas
                                        width="223" height="50"
                                        style="display: inline-block; width: 223.3px; height: 50px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-dashboard">
                            <div class="d-flex">
                                <div class="text-end">
                                    <h4 class="mt-0 counter font-primary">{{$meal}}</h4>
                                    <span>Total meal</span>
                                </div>
                            </div>
                            <div class="dashboard-chart-container">
                                <div id="line-chart-sparkline-dashboard1"
                                    class="flot-chart-placeholder line-chart-sparkline"><canvas
                                        width="223" height="50"
                                        style="display: inline-block; width: 223.3px; height: 50px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
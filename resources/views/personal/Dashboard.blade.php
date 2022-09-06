@extends('personal.layout.layout')

@section('extracss')
@endsection
@section('content')

<div class="icon-cards-row">
    <div class="owl-container">
        <div class="owl-carousel dashboard-numbers">
            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="simple-icon-user-following"></i>
                    <p class="card-text mb-0">Registered Customer</p>
                    <p class="lead text-center">85</p>
                </div>
            </a>
            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-money-bag"></i>
                    <p class="card-text mb-0">Balance</p>
                    <p class="lead text-center">21212.00</p>
                </div>
            </a>

            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-coins"></i>
                    <p class="card-text mb-0">Received Payment</p>
                    <p class="lead text-center">for today- $ 1000.00</p>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 50px">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transactions</h5>
                <div class="dashboard-line-chart">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extrajs')
    <script src="{{ asset('public/assets/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
@endsection
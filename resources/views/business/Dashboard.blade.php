@extends('business.layout.layout')

@section('businesscss')
@endsection
@section('content')
<div>
    <div class="toggle_radio">
        <input type="radio" class="toggle_option" id="b2b_show" name="toggle_option">
        <input type="radio" checked class="toggle_option" id="b2c_show" name="toggle_option">
        <input type="radio" class="toggle_option" id="bbc_show" name="toggle_option">
        <label for="b2b_show"><p>B2B</p></label>
        <label for="b2c_show"><p>B2C</p></label>        
        <label for="bbc_show"><p>All</p></label>
        <div class="toggle_option_slider">
        </div>
    </div>
</div>
<div class="b2c-container">
    <div class="icon-cards-row" style="display: flex;">
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card ">
                <div class="card-body text-center">
                    <i class="simple-icon-user-following"></i>
                    <p class="card-text mb-0">Registered B2C Customer</p>
                    <p class="lead text-center">85</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-money-bag"></i>
                    <p class="card-text mb-0">Balance</p>
                    <p class="lead text-center">21212.00</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-coins"></i>
                    <p class="card-text mb-0">Received Payment</p>
                    <p class="lead text-center">for today- $ 1000.00</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row" style="margin-top: 50px">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transactions for B2C</h5>
                    <div class="dashboard-line-chart">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="b2b-container">
    <div class="icon-cards-row" style="display: flex;">
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card ">
                <div class="card-body text-center">
                    <i class="simple-icon-user-following"></i>
                    <p class="card-text mb-0">Registered B2B Customer</p>
                    <p class="lead text-center">85</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-money-bag"></i>
                    <p class="card-text mb-0">Balance</p>
                    <p class="lead text-center">21212.00</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-coins"></i>
                    <p class="card-text mb-0">Received Payment from B2B Customers</p>
                    <p class="lead text-center">for today- $ 1000.00</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row" style="margin-top: 50px">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transactions for B2B</h5>
                    <div class="dashboard-line-chart">
                        <canvas id="salesChart_b2b"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bbc-container">
    <div class="icon-cards-row" style="display: flex;">
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card ">
                <div class="card-body text-center">
                    <i class="simple-icon-user-following"></i>
                    <p class="card-text mb-0">Registered Customer</p>
                    <p class="lead text-center">85</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-money-bag"></i>
                    <p class="card-text mb-0">Balance</p>
                    <p class="lead text-center">21212.00</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="iconsminds-coins"></i>
                    <p class="card-text mb-0">Received Payment Customers</p>
                    <p class="lead text-center">for today- $ 1000.00</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row" style="margin-top: 50px">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Transactions for this week</h5>
                    <div class="dashboard-line-chart">
                        <canvas id="salesChart_all"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('businessjs')
    
@endsection
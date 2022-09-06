@extends('admin.layout.AdminLayout')

@section('content')
    <div class="icon-cards-row">
        <div class="owl-container">
            <div class="owl-carousel dashboard-numbers">
                <a href="#" class="card">
                    <div class="card-body text-center">
                        <i class="iconsminds-clock"></i>
                        <p class="card-text mb-0">Pending Orders</p>
                        <p class="lead text-center">16</p>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card-body text-center">
                        <i class="iconsminds-basket-coins"></i>
                        <p class="card-text mb-0">Completed Orders</p>
                        <p class="lead text-center">32</p>
                    </div>
                </a>

                <a href="#" class="card">
                    <div class="card-body text-center">
                        <i class="iconsminds-arrow-refresh"></i>
                        <p class="card-text mb-0">Refund Requests</p>
                        <p class="lead text-center">2</p>
                    </div>
                </a>

                <a href="#" class="card">
                    <div class="card-body text-center">
                        <i class="iconsminds-mail-read"></i>
                        <p class="card-text mb-0">New Comments</p>
                        <p class="lead text-center">25</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
@endsection

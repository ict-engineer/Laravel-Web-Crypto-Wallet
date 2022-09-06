@extends('admin.layout.AdminLayout')
@section('content')
<!-- <div class="row"> -->
    <!-- <div class="col-md-4">
    </div> -->
    <div style="display:flex">
    <div class="col-md-6 col-sm-6 col-lg-4 col-12 mb-4">
        <div class="card ">
            <div class="card-body">
                <div class="text-center">
                    <img alt="Profile" src="{{ asset('public/assets/img/profile-pic-l.jpg') }}" class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail">
                    <p class="list-item-heading mb-1">{{ $User->first_name }}&nbsp {{ $User->last_name }}</p>
                    <p class="mb-4 text-muted text-small">{{$User->user_type}}</p>
                    <a href="/admin/users"><button type="button" class="btn btn-sm btn-outline-primary ">Back</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 mb-4">
        <div class="card dashboard-link-list">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <div class="d-flex flex-row">
                    <div class="w-50">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="#">User ID</a>
                            </li>
                            @if($User->organization_name != null)
                            <li class="mb-1">
                                <a href="#">Organization Name</a>
                            </li>
                            @endif
                            <li class="mb-1">
                                <a href="#">First Name</a>
                            </li>
                            <li class="mb-1">
                                <a href="#">Last Name</a>
                            </li>
                            @if($User->website_url != null)
                            <li class="mb-1">
                                <a href="#">Website URL</a>
                            </li>
                            @endif
                            @if($User->yearly_revenue != null)
                            <li class="mb-1">
                                <a href="#">Yearly Revenue</a>
                            </li>
                            @endif
                            <li class="mb-1">
                                <a href="#">User Type</a>
                            </li>
                            <li class="mb-1">
                                <a href="#">Email</a>
                            </li>
                            <li class="mb-1">
                                <a href="#">Updated At</a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-50">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="#">{{$User->id}}</a>
                            </li>
                            @if($User->organization_name != null)
                            <li class="mb-1">
                                <a href="#">{{$User->organization_name}}</a>
                            </li>
                            @endif
                            <li class="mb-1">
                                <a href="#">{{$User->first_name}}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#">{{$User->last_name}}</a>
                            </li>
                            @if($User->website_url != null)
                            <li class="mb-1">
                                <a href="#">{{$User->website_url}}</a>
                            </li>
                            @endif
                            @if($User->yearly_revenue != null)
                            <li class="mb-1">
                                <a href="#">{{$User->yearly_revenue}}</a>
                            </li>
                            @endif
                            <li class="mb-1">
                                <a href="#">{{$User->user_type}}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#">{{$User->email}}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#">{{$User->updated_at}}</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--     
</div> -->
@endsection
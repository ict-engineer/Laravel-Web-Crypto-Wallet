@extends('admin.layout.AdminLayout')
@section('admincss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="container-fluid" >
    <div class="row mb-4">
        <div class="col-12">
            <h1>Users</h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">All</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Admins</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Business Users</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">General Users</a>
                    </li>               
                    
                </ol>
                
            </nav>
            <a type="button" href="{{ route('admin.users.create') }}" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-plus">Add User</i></a>
            
            <div class="separator mb-5"></div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">Filter & Length</h5> -->
                    <table class="data-table data-table-feature" >
                        
                        <thead>
                            <tr>
                                <th style="padding:15px">ID</th>
                                <th style="padding:15px">Name</th>
                                <!-- <th style="padding:15px">Last Name</th> -->
                                <th style="padding:15px">Email</th>
                                <th style="padding:15px">Organization Name</th>
                                <th style="padding:15px">User Type</th>
                                <!-- <th style="text-align:center">password</th> -->
                                <th style="padding:15px">Action</th>
                                <!-- <th>Salary</th> -->
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($Users as $User)
                            <tr>
                                <td style="padding:17px">{{$User->id}}</td>
                                <td style="padding:17px">{{$User->first_name}}&nbsp{{$User->last_name}}</td>
                                <!-- <td style="padding:17px">{{$User->last_name}}</td> -->
                                <td style="padding:17px">{{$User->email}}</td>
                                <td style="padding:17px">{{$User->organization_name}}</td>
                                <td style="padding:17px">{{$User->user_type}}</td>
                                <td style="display:flex padding:3px"> 
                                    <a type="button" href="{{ route('admin.users.show', $User->id)}}" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                    <a type="button" href="{{ route('admin.users.edit', $User->id)}}" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                    <button type="button" class="btn-danger mb-1 btn-sm remove-user" data-id="{{ $User->id }}" data-action="{{ route('admin.users.destroy',$User->id) }}" > <i class="simple-icon-trash"> </i></button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection 

<!-- <script type="text/javascript">
  $("body").on("click",".remove-user",function(){
    var current_object = $(this);
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this user info!",
        type: "error",
        showCancelButton: true,
        dangerMode: true,
        cancelButtonClass: '#DD6B55',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Delete!',
    },function (result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
    });
});
</script> -->

@section('adminjs')
<script type="text/javascript">
  $("body").on("click",".remove-user",function(){
    var current_object = $(this);
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this user info!",
        type: "error",
        showCancelButton: true,
        dangerMode: true,
        cancelButtonClass: '#DD6B55',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Delete!',
    },function (result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');
            console.log(id);
            console.log(action);
            console.log(token);
            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
    });
});
</script>
@endsection

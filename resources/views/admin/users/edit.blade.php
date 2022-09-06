@extends('admin.layout.AdminLayout')

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div>
        <h5 class="mb-4">Edit User</h5>
        <br>
        <form role="form" id="AdminForm" action="{{ route('admin.users.update',$User->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                <div class="btn-group btn-group-toggle" >
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option11" onchange="selectedAdmin()"> Admin
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option21" onchange="selectedBusiness()"> Business
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option31" onchange="selectedUser()"> User
                    </label>
                </div>
            </div>
            <br>
            <input name="rolecheck" style="display:none" value="Admin">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name" value="{{ old( 'first_name', $User->first_name  ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="" name="last_name" class="form-control" id="inputEmail3" placeholder="Last Name" value="{{ old( 'last_name', $User->last_name ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" type="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email" value="{{ old( 'email', $User->email )}}" required>
                    @if( $errors->has( 'email' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'email' ) }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            
            <div class="form-group row" style="padding-left: 16px">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" name="password_reset" class="custom-control-input"  id="customCheck1" onchange="setPassword()">
                    <label class="custom-control-label"  for="customCheck1">Password Reset</label>
                </div>
            </div>

            <div class="form-group row" id="reset_password1" style="display:none">
                <label for="inputPassword1" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Password" value="{{ old( 'password' ) }}">
                </div>
            </div>
            <div class="form-group row" id="reset_password_confirm1" style="display:none">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputPassword3" placeholder="Confirm Password" value="{{ old( 'confirm_password' ) }}">
                    @if( $errors->has( 'confirm_password' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'confirm_password' ) }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <br>
            <div class="form-group row mb-0">
                <div class="col-sm-10">
                    <a href="/admin/users" class="btn btn-secondary float-right" style="margin-left:10px;">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
            
        </form>


        <!-- Business User Form -->
        <form role="form" id="BusinessForm"  action="{{ route('admin.users.update',$User->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                <div class="btn-group btn-group-toggle">
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option1" onchange="selectedAdmin()"> Admin
                    </label>
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option2" onchange="selectedBusiness()"> Business
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option3" onchange="selectedUser()"> User
                    </label>
                </div>
            </div>
            <br>
            <input name="rolecheck" style="display:none" value="Business">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Organization Name</label>
                <div class="col-sm-10">
                    <input type="" name="organization_name" class="form-control" id="inputEmail3" placeholder="Organization Name" value="{{ old( 'organization_name', $User->organization_name ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name" value="{{ old( 'first_name', $User->first_name )}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="" name="last_name" class="form-control" id="inputEmail3" placeholder="Last Name" value="{{ old( 'last_name' , $User->last_name) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Web Site URL</label>
                <div class="col-sm-10">
                    <input type="url" name="website_url" class="form-control" id="inputEmail3" placeholder="Web Site URL" value="{{ old( 'website_url', $User->website_url) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Yearly Revenue</label>
                <div>
                    <select id="inputRevenue"  name="revenue" class="form-control" style="margin-left:15px" required="">
                        <option>$ 0 ~ 2 Million</option>
                        <option>$ 2 ~ 25 Million</option>
                        <option>$ 25 ~ 150 Million</option>
                        <option>$ 150 ~ 500 Million</option>
                        <option>$ 500 ~ 2 Billion</option>
                        <option>$ 2 Billion+</option>
                    </select>          
                </div>
                
            </div>
            <div class="form-group row">
                <label for="" type="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email" value="{{ old( 'email', $User->email) }}" required>
                    @if( $errors->has( 'email' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'email' ) }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>

            <div class="form-group row" style="padding-left: 16px">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" name="password_reset" class="custom-control-input"  id="customCheck2" onchange="setPassword()">
                    <label class="custom-control-label"  for="customCheck2">Password Reset</label>
                </div>
            </div>

            <div class="form-group row" id="reset_password2" style="display:none">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="{{ old( 'password' ) }}">
                </div>
            </div>
            <div class="form-group row" id="reset_password_confirm2" style="display:none">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputPassword3" placeholder="Confirm Password" value="{{ old( 'confirm_password' ) }}">
                    @if( $errors->has( 'confirm_password' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'confirm_password' ) }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            
            <div class="form-group row mb-0">
                <div class="col-sm-10">
                    <a href="/admin/users" class="btn btn-secondary float-right" style="margin-left:10px;">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>


        <!-- General User Form -->
        <form role="form" id="UserForm" action="{{ route('admin.users.update',$User->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                <div class="btn-group btn-group-toggle" >
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option11" onchange="selectedAdmin()"> Admin
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option21" onchange="selectedBusiness()"> Business
                    </label>
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option31" onchange="selectedUser()"> User
                    </label>
                </div>
            </div>
            <br>
            <input name="rolecheck" style="display:none" value="User">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name" value="{{ old( 'first_name', $User->first_name  ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="" name="last_name" class="form-control" id="inputEmail3" placeholder="Last Name" value="{{ old( 'last_name', $User->last_name ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" type="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email" value="{{ old( 'email', $User->email )}}" required>
                    @if( $errors->has( 'email' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'email' ) }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            
            <div class="form-group row" style="padding-left: 16px">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" name="password_reset" class="custom-control-input"  id="customCheck3" onchange="setPassword()">
                    <label class="custom-control-label"  for="customCheck3">Password Reset</label>
                </div>
            </div>

            <div class="form-group row" id="reset_password3" style="display:none">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="{{ old( 'password' ) }}">
                </div>
            </div>
            <div class="form-group row" id="reset_password_confirm3" style="display:none">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputPassword3" placeholder="Confirm Password" value="{{ old( 'confirm_password' ) }}">
                    @if( $errors->has( 'confirm_password' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'confirm_password' ) }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <br>
            <div class="form-group row mb-0">
                <div class="col-sm-10">
                    <a href="/admin/users" class="btn btn-secondary float-right" style="margin-left:10px;">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
            
        </form>
    </div>
    </div>
</div>
@endsection 

@section('adminjs')
<script type="text/javascript">
    $(document).ready(function(){
        @if( $User->user_type === 'Admin' )
            var admin_form = document.getElementById("AdminForm");
            var business_form = document.getElementById("BusinessForm");
            var user_form = document.getElementById("UserForm");
            admin_form.style.display = "block";
            business_form.style.display = "none";
            user_form.style.display = "none";
        @elseif( $User->user_type === 'Business User' )
            var admin_form = document.getElementById("AdminForm");
            var business_form = document.getElementById("BusinessForm");
            var user_form = document.getElementById("UserForm");
            admin_form.style.display = "none";
            business_form.style.display = "block";
            user_form.style.display = "none";
        @elseif( $User->user_type === 'General User' )
            var admin_form = document.getElementById("AdminForm");
            var business_form = document.getElementById("BusinessForm");
            var user_form = document.getElementById("UserForm");
            admin_form.style.display = "none";
            business_form.style.display = "none";
            user_form.style.display = "block";
        @endif
    });
    function selectedAdmin() {
        
        var admin_form = document.getElementById("AdminForm");
        var business_form = document.getElementById("BusinessForm");
        var user_form = document.getElementById("UserForm");
        admin_form.style.display = "block";
        business_form.style.display = "none";
        user_form.style.display = "none";
    }
    function selectedBusiness() {
        var admin_form = document.getElementById("AdminForm");
        var business_form = document.getElementById("BusinessForm");
        var user_form = document.getElementById("UserForm");
        admin_form.style.display = "none";
        business_form.style.display = "block";
        user_form.style.display = "none";
    }
    function selectedUser() {
        var admin_form = document.getElementById("AdminForm");
        var business_form = document.getElementById("BusinessForm");
        var user_form = document.getElementById("UserForm");
        admin_form.style.display = "none";
        business_form.style.display = "none";
        user_form.style.display = "block";
    }
    function setPassword() {
        
        var reset_password = document.getElementById("reset_password1");
        var reset_password_confirm = document.getElementById("reset_password_confirm1");
        if(document.getElementById("customCheck1").checked == true)
        {
            
            reset_password.style.display = "block";
            reset_password_confirm.style.display = "block";
        }
        else
        {
            reset_password.style.display = "none";
            reset_password_confirm.style.display = "none";
        }

        var reset_password = document.getElementById("reset_password2");
        var reset_password_confirm = document.getElementById("reset_password_confirm2");
        if(document.getElementById("customCheck2").checked == true)
        {
            reset_password.style.display = "block";
            reset_password_confirm.style.display = "block";
        }
        else
        {
            reset_password.style.display = "none";
            reset_password_confirm.style.display = "none";
        }

        var reset_password = document.getElementById("reset_password3");
        var reset_password_confirm = document.getElementById("reset_password_confirm3");
        if(document.getElementById("customCheck3").checked == true)
        {
            reset_password.style.display = "block";
            reset_password_confirm.style.display = "block";
        }
        else
        {
            reset_password.style.display = "none";
            reset_password_confirm.style.display = "none";
        }
        
    }
</script>
@endsection

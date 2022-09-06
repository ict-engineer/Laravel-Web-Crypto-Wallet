@extends('admin.layout.AdminLayout')

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div>
        <h5 class="mb-4">Create User</h5>
        <!-- Admin Form -->
        <form role="form" id="AdminForm" action="{{ route('admin.users.store') }}" method="POST">
            @csrf
        
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
                    <input type="" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name" value="{{ old( 'first_name' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="" name="last_name" class="form-control" id="inputEmail3" placeholder="Last Name" value="{{ old( 'last_name' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" type="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email" value="{{ old( 'email' ) }}" required>
                    @if( $errors->has( 'email' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'email' ) }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="{{ old( 'password' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputPassword3" placeholder="Confirm Password" value="{{ old( 'confirm_password' ) }}" required>
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


        <!-- Business User Form -->
        <form role="form" style="display:none" id="BusinessForm"  action="{{ route('admin.users.store') }}" method="POST">
            @csrf
        
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
                    <input type="" name="organization_name" class="form-control" id="inputEmail3" placeholder="Organization Name" value="{{ old( 'organization_name' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name" value="{{ old( 'first_name' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="" name="last_name" class="form-control" id="inputEmail3" placeholder="Last Name" value="{{ old( 'last_name' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Web Site URL</label>
                <div class="col-sm-10">
                    <input type="url" name="website_url" class="form-control" id="inputEmail3" placeholder="Web Site URL" value="{{ old( 'website_url' ) }}" required>
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
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email" value="{{ old( 'email' ) }}" required>
                    @if( $errors->has( 'email' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'email' ) }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="{{ old( 'password' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputPassword3" placeholder="Confirm Password" value="{{ old( 'confirm_password' ) }}" required>
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
        <form role="form" id="UserForm" style="display:none" action="{{ route('admin.users.store') }}" method="POST">
            @csrf
        
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                <div class="btn-group btn-group-toggle">
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option1" onchange="selectedAdmin()"> Admin
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2" onchange="selectedBusiness()"> Business
                    </label>
                    <label class="btn btn-primary active">
                        <input type="radio" name="options active" id="option3" onchange="selectedUser()"> User
                    </label>
                </div>
            </div>
            <br>
            <input name="rolecheck" style="display:none" value="User">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name" value="{{ old( 'first_name' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="" name="last_name" class="form-control" id="inputEmail3" placeholder="Last Name" value="{{ old( 'last_name' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" type="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email" value="{{ old( 'email' ) }}" required>
                    @if( $errors->has( 'email' ) )
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first( 'email' ) }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="{{ old( 'password' ) }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputPassword3" placeholder="Confirm Password" value="{{ old( 'confirm_password' ) }}" required>
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

    </div>
</div>


@endsection 

@section('adminjs')
<script type="text/javascript">
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
</script>
@endsection




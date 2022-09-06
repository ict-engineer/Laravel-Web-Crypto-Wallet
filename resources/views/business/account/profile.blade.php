@extends('business.layout.layout')

@section('businesscss')
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Edit Profile</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('business.setting') }}">Setting</a>
                            </li>                            
                            
                        </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row p-2 ">
            <div class="col-12">
                <form class="needs-validation mb-5" action="{{ route('business.setting.profile.create') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip001">First name</label>
                            <input type="text" class="form-control" name="firstName" id="validationTooltip001" placeholder="First name"
                                    required>
                            
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip002">Last name</label>
                            <input type="text" class="form-control" name="lastName" id="validationTooltip002" placeholder="Last name"
                                    required>
                            
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip002">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phoneNumber" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            <div class="invalid-tooltip">
                                Please input phone number as this format(123-45-678)
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Birthday</label>
                                <input class="form-control datepicker" name="birthday" placeholder="" required>
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" name="address1" id="inputAddress" placeholder="1234 Main St" required>
                            </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip003">City</label>
                            <input type="text" class="form-control" name="city" id="validationTooltip003" placeholder="City"
                                required>
                            <div class="invalid-tooltip">
                                Please provide a city.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip004">State</label>
                            <input type="text" class="form-control" name="state" id="validationTooltip004" placeholder="State"
                                required>
                            <div class="invalid-tooltip">
                                Please provide a state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip005">Zip</label>
                            <input type="text" class="form-control" name="zip" id="validationTooltip005" placeholder="Zip"
                                required>
                            <div class="invalid-tooltip">
                                Please provide a zip.
                            </div>
                        </div>
                    </div>
                    <!-- <div>
                        <label for="validationTooltip005">identity</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Identity Verify</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" required>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            <div class="invalid-tooltip">
                                Please upload a scan or photo of a drivers license or passport of the account holder.
                            </div>
                        </div>
                    </div> -->
                    </div>
                    <button class="btn btn-primary" style="margin-left: auto; margin-right: auto;" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('businessjs')
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
@endsection
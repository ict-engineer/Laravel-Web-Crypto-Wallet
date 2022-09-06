@extends('business.layout.layout')

@section('businesscss')
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Verify Identity</h1>
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
                @if($profileInputed == false)
                    <h7>Please complete your profile to verify Identity.
                    Complete your profile. <a href="{{ route('business.setting.profile') }}" style="color:blue">here</a>
                   </h7>

                @else
                    <form class="needs-validation mb-5" action="{{ route('business.setting.identity') }}" method="POST" novalidate>
                        @csrf
                        <div>
                            <!-- <label for="validationTooltip005">Please upload a scan or photo of your drivers license or passport to verify your identity.</label>
                            <br>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Identity Verify</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                <div class="input-group-prepend">
  
                            </div> -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="margin-left: auto; margin-right: auto;" type="submit">Submit</button>
                    </form>
                @endif
                
            </div>
        </div>
    </div>
@endsection

@section('businessjs')
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
@endsection
@extends('business.layout.layout')

@section('businesscss')
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
    
@endsection

@section('content')    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Verify Payment Method</h1>
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
                    <h7>Please complete your profile to verify your payment method.
                    Complete your profile. <a href="{{ route('business.setting.profile') }}" style="color:blue">here</a>
                   </h7>

                @else
                <h5>Please verify your payment method</h5>
                    <div class="d-flex ">
                        <img class="w-5" style="width:100px" src="{{ asset('public/assets/images/visa.png')}}" />
                        <img class="w-5" style="width:100px" src="{{ asset('public/assets/images/master.png')}}" />
                        <img class="w-1" style="width:100px" src="{{ asset('public/assets/images/Wire.png')}}" />
                        <img class="w-5" style="width:100px" src="{{ asset('public/assets/images/Sepa.png')}}" />
                    </div>
                    <div class="d-flex ">
                        <a href="#" onclick="achPayment()">
                            <img style="width:100px" src="{{ asset('public/assets/images/ACH.png')}}" class="w-120 mr-3"/>
                        </a>
                        <a href="#">
                            <img style="width:100px" class="w-1 mr-3" src="{{ asset('public/assets/images/google-pay.png')}}" class="w-150"/>
                        </a>
                        <a href="#" >
                            <img style="width:100px" class="w-1 mr-3" src="{{ asset('public/assets/images/apple-pay.png')}}" class="w-150"/>
                        </a>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
@endsection

@section('businessjs')
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://cdn.plaid.com/link/v2/stable/link-initialize.js"></script>
    <script src="https://verify.sendwyre.com/js/pm-widget-init.js"></script>
    <script>
        function achPayment()
        {
            var handler = new WyrePmWidget({
                env: "test",
                onLoad: function(){
                    // In this example we open the modal immediately on load. More typically you might have the handler.open() invocation attached to a button.
                    handler.open();
                },
                onSuccess: function(result){
                    // Here you would forward the publicToken back to your server in order to  be shipped to the Wyre API
                    console.log(result.publicToken);
                    let _token   = $('meta[name="csrf-token"]').attr('content');
                    $.post({
                            url: "/business/setting/payment",
                            data:{
                                paymentType:'ACH',
                                publicToken:result.publicToken,
                                _token: _token
                            },
                            success:function(response){
                                console.log(response.value);
                                
                            
                            },
                        });
                },
                onExit: function(err){
                    if (err != null) {
                        
                    // The user encountered an error prior to exiting the module
                    }
                    console.log("Thingo exited:", err);
                }
            });
        }
    </script>
@endsection
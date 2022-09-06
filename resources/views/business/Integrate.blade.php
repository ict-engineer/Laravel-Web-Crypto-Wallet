@extends('business.layout.layout')

@section('businesscss')

@endsection

@section('content')    
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Integrate</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>                            
                            <li class="breadcrumb-item active" aria-current="page">Integrate</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                <div class="card mb-4">
                    <div class="card-body ">
                        <h5 class="mb-4">Embed Code</h5>
                        <textarea style="display: block;height: 128px;width: 100%;padding: 10px;text-align: left;background: #f1f1f1;border-color: #b9b9b9;" readonly>
                            <div id="btn-raplex-payment"></div>
                            <script src="https://raplex.com/embed.js"></script>
                            <script>
                            var _raplex = new _Raplex_payment('Ab3sdfc!232123123','btn-raplex-payment');
                            </script>
                        </textarea>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-body ">
                        <h5 class="mb-4">Your API Key</h5>
                        <p>Ab3sdfc!232123123</p>
                        <span>Please check our integration docs if you</span>
                    </div>
                </div>                 

            </div>
        </div>
    </div>
@endsection

@section('businessjs')
@endsection
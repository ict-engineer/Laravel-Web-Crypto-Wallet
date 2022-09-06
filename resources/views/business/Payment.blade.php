@extends('business.layout.layout')

@section('businesscss')
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap-float-label.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/fullcalendar.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/select2-bootstrap.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/dropzone.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/nouislider.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/cropper.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('content')    
    <div class="container-fluid">      
        <div class="row app-row">
            <div class="col-12 list">
                <div class="mb-2 coin-title">
                    <img src="{{asset('public/assets/images/coins/raplex.png')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                    <span id="mainTotalBalance"><b>$ 212,212.02 </b></span>    
                    
                                                         
                </div>
                <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                            aria-controls="first" aria-selected="true">Wallet History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="second-tab" data-toggle="tab" href="#second" role="tab"
                            aria-controls="second" aria-selected="false">Send Payment</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="third-tab" data-toggle="tab" href="#third" role="tab"
                            aria-controls="third" aria-selected="false">Receive Payment</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="forth-tab" data-toggle="tab" href="#forth" role="tab"
                            aria-controls="forth" aria-selected="false">Exchange</a>
                    </li>
                </ul>
                <div class="tab-content">  
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <table class="data-table data-table-feature" >
                                            <h5 class="card-title">Wallet History</h5>
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Coin</th>
                                                    <th>Amount</th>
                                                    <th>details</th>
                                                    <th>Address</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                
                                                @foreach($transactionHistory as $history)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $history['coin'] }}</td>
                                                        <td>{{ $history['amount'] }}</td>         
                                                        <td>{{ $history['details'] }}</td>
                                                        <td>{{ $history['address'] }}</td>
                                                        <td>{{ $history['time'] }}</td>
                                                        <td>{{ $history['status'] }}</td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="tab-pane fade" id="second" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h5 class="mb-4">Send Transaction</h5>
                                    
                                    <form role="form" class="send-transaction" action="{{ route('business.payment.sendTransaction') }}" method="POST">
                                        @csrf
                                        <label class="form-group has-float-label">
                                            <select class="form-control select2-single" onchange="handleCryptoTypeChange()" name="cryptoType" id="cryptoType">
                                                <option value="BTC">BTC</option>
                                                <option value="ETH">ETH</option>
                                                <option value="BCH">BCH</option>
                                                <option value="USDT">USDT</option>
                                            </select>
                                            <span>Source</span>
                                        </label>
                                        
                                        <div class="form-group has-float-label" id="sendAddress1">
                                            <input class="form-control" type="text" id="recipientAddress" name="recipientAddress" placeholder="To Address" required>
                                            <span>To Address</span>
                                        </div>
                                        <label class="form-group has-float-label">
                                            <input class="form-control" id="amountCurrency" onchange="sendCryptoAmountChange()" name="amount" type="number" placeholder="" required>
                                            <span id="symbolSentInput">Amount(BTC)</span>
                                        </label>       
                                        <label class="form-group has-float-label">
                                            <input class="form-control" id="amountUSD" onchange="sendUSDAmountChange()" type="number" placeholder="" required>
                                            <span>Amount(USD)</span>
                                        </label>
                                        <div id="sendPaymentErrormsg"></div>
                                        <button type="button" onclick="setMinimumAmount()" class="btn btn-outline-info btn-xs mb-1">set min amount</button>
                                        <button type="button" onclick="setMaximumAmount()" class="btn btn-outline-danger btn-xs mb-1">set max amount</button>
                                        <button class="btn btn-success btn-block" type="button" onclick="sendTransaction()">Send</button>
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6" id="CurCurrencyValueDiv">
                                <script type="text/javascript" id="CurCurrencyValue">
                                baseUrl = "https://widgets.cryptocompare.com/";
                                var scripts = document.getElementsByTagName("script");
                                var embedder = scripts[ scripts.length - 1 ];
                                console.log(embedder);
                                (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    console.log(appName);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    console.log(embedder.parentNode);
                                    console.log(s);
                                    embedder.parentNode.appendChild(s);
                                    // document.getElementById("#currencyValue").appendChild(s);
                                })();
                                </script>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="mb-4">Receive Payment</h5>

                                <p class="mb-0">
                                    <a class="mb-1" data-toggle="collapse" href="#collapseBTC" role="button"
                                        aria-expanded="true" aria-controls="collapseBTC">
                                        <img alt="Profile Picture" src="{{asset('public/assets/images/coins/btc.png')}}" class="img-thumbnail rounded-circle list-thumbnail align-self-center receive-a">
                                    </a>
                                    <a class="mb-1" data-toggle="collapse" href="#collapseETH" role="button"
                                        aria-expanded="true" aria-controls="collapseETH">
                                        <img alt="Profile Picture" src="{{asset('public/assets/images/coins/eth.png')}}" class="img-thumbnail rounded-circle list-thumbnail align-self-center receive-a">
                                    </a>
                                    <a class="mb-1" data-toggle="collapse" href="#collapseBCH" role="button"
                                        aria-expanded="true" aria-controls="collapseBCH">
                                        <img alt="Profile Picture" src="{{asset('public/assets/images/coins/bch.png')}}" class="img-thumbnail rounded-circle list-thumbnail align-self-center receive-a">
                                    </a>
                                    <a class="mb-1" data-toggle="collapse" href="#collapseUSDT" role="button"
                                        aria-expanded="true" aria-controls="collapseUSDT">
                                        <img alt="Profile Picture" src="{{asset('public/assets/images/coins/usdt.png')}}" class="img-thumbnail rounded-circle list-thumbnail align-self-center receive-a">
                                    </a>                                    
                                </p>
                                <div class="collapse receive-container-tab" id="collapseBTC">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h3>My <b>BTC</b> deposit Address </h3>
                                            <p>{{ $BTCDepositAddress }}</p>
                                            <button type="button" id="copyBTCAddress" class="btn btn-outline-info btn-xs mb-1">Copy Address</button>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="img-thumbnail xmiddle border-0 " src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl=bitcoin:{{ $BTCDepositAddress }}" />     
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse receive-container-tab" id="collapseETH">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h3>My <b>ETH</b> deposit Address </h3>
                                            <p>{{ $ETHDepositAddress }}</p>
                                            <button type="button" id="copyETHAddress" class="btn btn-outline-info btn-xs mb-1">Copy Address</button>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="img-thumbnail xmiddle border-0 " src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl=ethereum:{{ $ETHDepositAddress }}" />     
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse receive-container-tab" id="collapseBCH">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h3>My <b>BCH</b> deposit Address </h3>
                                            <p>{{ $BCHDepositAddress }}</p>
                                            <button type="button" id="copyBCHAddress" class="btn btn-outline-info btn-xs mb-1">Copy Address</button>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="img-thumbnail xmiddle border-0 " src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl=bitcoincash:{{ $BCHDepositAddress }}" />     
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse receive-container-tab" id="collapseUSDT">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h3>My <b>USDT</b> deposit Address </h3>
                                            <p>{{ $USDTDepositAddress }}</p>
                                            <button type="button" id="copyUSDTAddress" class="btn btn-outline-info btn-xs mb-1">Copy Address</button>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="img-thumbnail xmiddle border-0 " src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl=tether:{{ $USDTDepositAddress }}" />     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="forth" role="tabpanel" aria-labelledby="forth-tab">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="mb-4">Exchange</h5>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>From</label>
                                                    <select class="form-control select2-single">
                                                        <option value="btc">BTC</option>
                                                        <option value="btc">ETH</option>
                                                        <option value="btc">USDT</option>
                                                        <option value="btc">BCH</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>To</label>
                                                    <select class="form-control select2-single">                                              
                                                        <option value="btc">ETH</option>
                                                        <option value="btc">USDT</option>
                                                        <option value="btc">BCH</option>
                                                    </select> 
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>From Amount(BTC)</label>
                                                    <input type="text" class="form-control" placeholder="0.00">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>To Amount(ETH)</label>
                                                    <input type="text" class="form-control" placeholder="0.00">
                                                </div>
                                            </div>                                                                    
                                        </form>                                        
                                        <div style="display:flex;justify-content:space-around;">
                                            <button type="submit" class="btn btn-primary mb-0">Exchange</button>                                            
                                        </div>
                                        <br>                                                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <script type="text/javascript">
                                baseUrl = "https://widgets.cryptocompare.com/";
                                var scripts = document.getElementsByTagName("script");
                                var embedder = scripts[ scripts.length - 1 ];
                                (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/chart?fsym=ETH&tsym=BTC';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                })();
                                </script>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="app-menu">
        <div>
            <div class="scroll">
                <div class="price-card">
                    <h5 class="card-h1">TOTAL BALANCE</h5>
                    <div class="d-flex flex-row mb-3">
                        <a href="#">
                            <img alt="Profile Picture" src="{{asset('public/assets/images/coins/raplex.png')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                        </a>
                        <div class="pl-3">
                            <a href="#">
                                <p class="font-weight-bold mb-0 d-flex justify-content-center" id="TotalBalance">1 BTC</p>
                                <p class="text-muted mb-0 text-small d-flex" id="TotalBalanceUSD">{{ $CryptoCurrencyValue->BTC->USD }} $</p>
                            </a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-success btn-block mb-1 btn-sm">Exchange Coins</button>
                </div>
                <div class="coin-card">                    
                    <div class="d-flex flex-row border-bottom p-2">
                        <a href="#">
                            <img alt="Profile Picture" src="{{asset('public/assets/images/coins/btc.png')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#">
                                <p class="font-weight-bold mb-1">BTC</p>
                                <p id="totalBalanceBTC" class="text-semi-muted mb-0">
                                    {{ $BTCBalance }} BTC ( $ {{ $CryptoCurrencyValue->BTC->USD }} )
                                </p>                                
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row border-bottom p-2">
                        <a href="#">
                            <img alt="Profile Picture" src="{{asset('public/assets/images/coins/eth.png')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#">
                                <p class="font-weight-bold mb-1">ETH</p>
                                <p id="totalBalanceETH" class="text-semi-muted mb-0">
                                    {{ $ETHBalance }} ETH ( $ {{ $CryptoCurrencyValue->ETH->USD }} )
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row border-bottom p-2">
                        <a href="#">
                            <img alt="Profile Picture" src="{{asset('public/assets/images/coins/bch.png')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#">
                                <p class="font-weight-bold mb-1">BCH</p>
                                <p id="totalBalanceBCH" class="text-semi-muted mb-0">
                                    {{ $BCHBalance }} BCH ( $ {{ $CryptoCurrencyValue->BCH->USD }} )
                                </p>                                
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row border-bottom p-2">
                        <a href="#">
                            <img alt="Profile Picture" src="{{asset('public/assets/images/coins/usdt.png')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#">
                                <p class="font-weight-bold mb-1">USDT</p>
                                <p id="totalBalanceUSDT" class="text-semi-muted mb-0">
                                    {{ $USDTBalance }} USDT ( $ {{ $CryptoCurrencyValue->USDT->USD }} )
                                </p>                                
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="app-menu-button d-inline-block d-xl-none" href="#">
            <i class="simple-icon-refresh"></i>
        </a>
    </div>
@endsection

@section('businessjs')
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/cropper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/typeahead.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    

    <script>
        // $(document).ready(function(){
            // alert("abc");
        $(document).ready(function() {
            const BTCBalance = @json($BTCBalance);
            const ETHBalance = @json($ETHBalance);
            const BCHBalance = @json($BCHBalance);
            const USDTBalance = @json($USDTBalance);
            const PerBTCValue = @json($CryptoCurrencyValue->BTC->USD);
            const PerETHValue = @json($CryptoCurrencyValue->ETH->USD);
            const PerBCHValue = @json($CryptoCurrencyValue->BCH->USD);
            const PerUSDTValue = @json($CryptoCurrencyValue->USDT->USD);
            const totalBalance = PerBTCValue * BTCBalance + PerETHValue * ETHBalance + PerBCHValue * BCHBalance + PerUSDTValue * USDTBalance;
            $('#mainTotalBalance').html("<b>$ "+totalBalance+" </b></span> <span> ( "+(BTCBalance*1).toFixed(4)+" BTC,     &nbsp&nbsp"+
            (ETHBalance*1).toFixed(3)+" ETH,  &nbsp&nbsp"+(BCHBalance*1).toFixed(3)+" BCH,  &nbsp&nbsp"+(USDTBalance*1).toFixed(3)+" USDT "+" )");

            $('#TotalBalance').html((BTCBalance*1).toFixed(4)+" BTC,     &nbsp&nbsp"+
            (ETHBalance*1).toFixed(3)+" ETH "+(BCHBalance*1).toFixed(3)+" BCH,  &nbsp&nbsp"+(USDTBalance*1).toFixed(3)+" USDT ");
            $('#TotalBalanceUSD').html(totalBalance + " $");

            $('#totalBalanceBTC').html((BTCBalance*1).toFixed(5) + " BTC ( $ "+(PerBTCValue * BTCBalance).toFixed(2)+" )");
            $('#totalBalanceETH').html((ETHBalance*1).toFixed(3) + " ETH ( $ "+(PerETHValue * ETHBalance).toFixed(2)+" )");
            $('#totalBalanceBCH').html((BCHBalance*1).toFixed(3) + " BCH ( $ "+(PerBCHValue * BCHBalance).toFixed(2)+" )");
            $('#totalBalanceUSDT').html((USDTBalance*1).toFixed(2) + " USDT ( $ "+(PerUSDTValue * USDTBalance).toFixed(2)+" )");
            
            
            $('#copyBTCAddress').on('click', function() {
                const el = document.createElement('textarea');
                el.value = @json($BTCDepositAddress);
                document.body.appendChild(el);
                el.select();
                document.execCommand('copy');
                document.body.removeChild(el);
            });
            $('#copyETHAddress').on('click', function() {
                const el = document.createElement('textarea');
                el.value = @json($ETHDepositAddress);
                document.body.appendChild(el);
                el.select();
                document.execCommand('copy');
                document.body.removeChild(el);
            });
            $('#copyBCHAddress').on('click', function() {
                const el = document.createElement('textarea');
                el.value = @json($BCHDepositAddress);
                document.body.appendChild(el);
                el.select();
                document.execCommand('copy');
                document.body.removeChild(el);
            });
            $('#copyUSDTAddress').on('click', function() {
                const el = document.createElement('textarea');
                el.value = @json($USDTDepositAddress);
                document.body.appendChild(el);
                el.select();
                document.execCommand('copy');
                document.body.removeChild(el);
            });
        });
        $(".data-table-feature").DataTable({
            searching: false,
            bLengthChange: false,
            destroy: true,
            info: false,
            sDom: '<"row view-filter"<"col-sm-12"<"float-left"l><"float-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
            pageLength: 6,
            language: {
            paginate: {
                previous: "<i class='simple-icon-arrow-left'></i>",
                next: "<i class='simple-icon-arrow-right'></i>"
            },
            search: "_INPUT_",
            searchPlaceholder: "Search...",
            lengthMenu: "Items Per Page _MENU_"
            },

            drawCallback: function () {
            $($(".dataTables_wrapper .pagination li:first-of-type"))
                .find("a")
                .addClass("prev");
            $($(".dataTables_wrapper .pagination li:last-of-type"))
                .find("a")
                .addClass("next");

            $(".dataTables_wrapper .pagination").addClass("pagination-sm");
            }
        });
        
        function setMaximumAmount(){
            // alert("abc");
            if(document.getElementById("cryptoType").value == 'BTC')
            {
                const balance = @json($BTCBalance);
                perBTCValue = 12000;
                document.getElementById("amountCurrency").value = balance;
                document.getElementById("amountUSD").value = balance*perBTCValue;
            }
            else if(document.getElementById("cryptoType").value == 'ETH')
            {
                const balance = @json($ETHBalance);
                perBTCValue = 256;
                document.getElementById("amountCurrency").value = balance;
                document.getElementById("amountUSD").value = balance*perBTCValue;
            }
            else if(document.getElementById("cryptoType").value == 'BCH')
            {
                const balance = @json($BCHBalance);
                perBTCValue = 599;
                document.getElementById("amountCurrency").value = balance;
                document.getElementById("amountUSD").value = balance*perBTCValue;
            }
            else if(document.getElementById("cryptoType").value == 'USDT')
            {
                const balance = @json($USDTBalance);
                perBTCValue = 0.5;
                document.getElementById("amountCurrency").value = balance;
                document.getElementById("amountUSD").value = balance*perBTCValue;
            }
            
        }
        function setMinimumAmount(){
            // alert("abc");
            if(document.getElementById("cryptoType").value == 'BTC')
            {
                const balance = @json($BTCBalance);
                if(balance < 0.00001){
                    document.getElementById("amountCurrency").value = balance;
                    document.getElementById("amountUSD").value = balance*12000;
                }
                else{
                    const minimum = 0.00001;
                    document.getElementById("amountCurrency").value = minimum;
                    document.getElementById("amountUSD").value = minimum * 12000;
                }
            }
            else if(document.getElementById("cryptoType").value == 'ETH')
            {
                const balance = @json($ETHBalance);
                if(balance < 0.00001){
                    document.getElementById("amountCurrency").value = balance;
                    document.getElementById("amountUSD").value = balance*256;
                }
                else{
                    const minimum = 0.00001;
                    document.getElementById("amountCurrency").value = minimum;
                    document.getElementById("amountUSD").value = minimum * 256;
                }
            }
            else if(document.getElementById("cryptoType").value == 'BCH')
            {
                const balance = @json($BCHBalance);
                if(balance < 0.00001){
                    document.getElementById("amountCurrency").value = balance;
                    document.getElementById("amountUSD").value = balance*599;
                }
                else{
                    const minimum = 0.00001;
                    document.getElementById("amountCurrency").value = minimum;
                    document.getElementById("amountUSD").value = minimum * 599;
                }
            }
            else if(document.getElementById("cryptoType").value == 'USDT')
            {
                const balance = @json($USDTBalance);
                if(balance < 0.00001){
                    document.getElementById("amountCurrency").value = balance;
                    document.getElementById("amountUSD").value = balance*0.5;
                }
                else{
                    const minimum = 0.00001;
                    document.getElementById("amountCurrency").value = minimum;
                    document.getElementById("amountUSD").value = minimum * 0.5;
                }
            }
        }
        function sendTransaction(){     
            var recipientAddress=$("#recipientAddress").val();
            var amountCurrency=$("#amountCurrency").val();
            if(recipientAddress == '')
            {
                $("#recipientAddress").focus();
                $('#sendPaymentErrormsg').html("Please Enter Recipient Address.").css("color","red");
            }
            else if(amountCurrency == '')
            {
                $("#recipientAddress").focus();
                $('#sendPaymentErrormsg').html("Please Enter Transaction Amount.").css("color","red");
            }
            else if(amountCurrency <= 0)
            {
                $("#recipientAddress").focus();
                $('#sendPaymentErrormsg').html("Please Enter Transaction Amount greater than 0.").css("color","red");
            }
            else{
                $('#sendPaymentErrormsg').html("");
                const balance = document.getElementById("amountCurrency").value;
                const address = document.getElementById("recipientAddress").value;
                var cryptoType = document.getElementById("cryptoType").value.toUpperCase();
                var current_object = $(this);
                swal({
                    title: "Are you sure?",
                    text: "Transfer Amount: "+balance+" "+cryptoType+"\n\nRecipient Address: "+address+"",
                    showCancelButton: true,
                    cancelButtonClass: '#DD6B55',
                    confirmButtonColor: '#3cb371',
                    confirmButtonText: 'Send',

                },function (result) {
                    if (result) {
                        // $('body').find('.send-transaction').submit();
                        let cryptoType = document.getElementById("cryptoType").value;
                        let recipientAddress = document.getElementById("recipientAddress").value;
                        let amount = document.getElementById("amountCurrency").value;
                        let _token   = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "/business/payment/sendTransaction",
                            type:"POST",
                            data:{
                                cryptoType:cryptoType,
                                recipientAddress:recipientAddress,
                                amount:amount,
                                _token: _token
                            },
                            success:function(response){
                                console.log(response.value);
                                if(response.value == "Success")
                                {
                                    swal("Success!", "Sent Successfully!", "success");
                                }
                                else{
                                    swal({
                                        title: "Failed To Send",
                                        text: response.value,
                                        icon: "warning",
                                        buttons: true,
                                        dangerMode: true,
                                    });
                                }
                            
                            },
                        });
                    }
                }
                );
            }
            
            
        }
        function sendCryptoAmountChange(){
            const value = document.getElementById("amountCurrency").value;
            if (document.getElementById("cryptoType").value == 'BTC')
            {
                const PerBTCValue = @json($CryptoCurrencyValue->BTC->USD);
                document.getElementById("amountUSD").value = value * PerBTCValue;
            }
            else if (document.getElementById("cryptoType").value == 'ETH')
            {
                const PerETHValue =  @json($CryptoCurrencyValue->ETH->USD);
                document.getElementById("amountUSD").value = value * PerETHValue;
            }
            else if (document.getElementById("cryptoType").value == 'BCH')
            {
                const PerBCHValue =  @json($CryptoCurrencyValue->BCH->USD);
                document.getElementById("amountUSD").value = value * PerBCHValue;
            }
            else if (document.getElementById("cryptoType").value == 'USDT')
            {
                const PerUSDTValue =  @json($CryptoCurrencyValue->USDT->USD);
                document.getElementById("amountUSD").value = value * PerUSDTValue;
            }
        }

        function sendUSDAmountChange(){
            const value = document.getElementById("amountUSD").value;
            if (document.getElementById("cryptoType").value == 'BTC')
            {           
                const PerBTCValue = 12000;       
                document.getElementById("amountCurrency").value = (value / PerBTCValue).toFixed(5);
            }
            else if (document.getElementById("cryptoType").value == 'ETH')
            {
                const PerETHValue = 256;
                document.getElementById("amountCurrency").value = (value / PerETHValue).toFixed(3);
            }
            else if (document.getElementById("cryptoType").value == 'BCH')
            {
                const PerBCHValue = 599;
                document.getElementById("amountCurrency").value = (value / PerBCHValue).toFixed(3);
            }
            else if (document.getElementById("cryptoType").value == 'USDT')
            {
                const PerUSDTValue = 0.5;
                document.getElementById("amountCurrency").value = (value / PerUSDTValue).toFixed(2);
            }
        }

        function handleCryptoTypeChange(){
            value = document.getElementById("amountUSD").value;
            var cryptoType = "";
            if (document.getElementById("cryptoType").value == 'BTC')
            {
                const PerBTCValue = 12000;             
                document.getElementById("amountCurrency").value = (value / PerBTCValue).toFixed(5);
                cryptoType = 'BTC';
            }
            else if (document.getElementById("cryptoType").value == 'ETH')
            {
                const PerETHValue = 256;
                document.getElementById("amountCurrency").value = (value / PerETHValue).toFixed(3);
                cryptoType = 'ETH';
            }
            else if (document.getElementById("cryptoType").value == 'BCH')
            {
                const PerBCHValue = 599;
                document.getElementById("amountCurrency").value = (value / PerBCHValue).toFixed(3);
                cryptoType = 'BCH';
            }
            else if (document.getElementById("cryptoType").value == 'USDT')
            {
                const PerUSDTValue = 0.5;
                document.getElementById("amountCurrency").value = (value / PerUSDTValue).toFixed(2);
                cryptoType = 'USDT';
            }
            $('#symbolSentInput').html("Amount("+cryptoType+")")

            baseUrl = "https://widgets.cryptocompare.com/";
            var scripts = document.getElementsByTagName("script");
            var embedder = document.getElementById("CurCurrencyValue");  
            console.log(embedder);
            (function (){
                var appName = encodeURIComponent(window.location.hostname);
                if(appName==""){appName="local";}
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                var theUrl = baseUrl+'serve/v1/coin/chart?fsym='+cryptoType+'&tsym=USD';
                console.log(theUrl);
                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                $("#CurCurrencyValueDiv").html("");    
                document.getElementById("CurCurrencyValueDiv").append(s);
            })();
        }
    </script>
    
@endsection
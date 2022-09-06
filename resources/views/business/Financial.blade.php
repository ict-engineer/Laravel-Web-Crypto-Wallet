@extends('business.layout.layout')

@section('businesscss')
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap-float-label.min.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link  href="{{ asset('public/assets/css/vendor/style.css') }}" rel="stylesheet"> -->
    <!-- <link  href="{{ asset('public/assets/font/material-design-iconic-font/css/material-design-iconic-font.css') }}" rel="stylesheet"> -->

		<!-- DATE-PICKER -->
		<!-- <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css"> -->


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
                            aria-controls="first" aria-selected="true">Financial History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="second-tab" data-toggle="tab" href="#second" role="tab"
                            aria-controls="second" aria-selected="false">Buy Crypto</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="third-tab" data-toggle="tab" href="#third" role="tab"
                            aria-controls="third" aria-selected="false">Withdraw</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="forth-tab" data-toggle="tab" href="#forth" role="tab"
                            aria-controls="forth" aria-selected="false">Payment Accounts</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="forth" role="tabpanel" aria-labelledby="forth-tab">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class=""><b>Bank accounts</b></h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="mb-4"><b>Rope Media</b></h5>
                                        <p class="mb-4 text-muted text-small">USD Bank Account</p>
                                        *********1152
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class=""><b>Apple account</b></h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="mb-4"><b>xxx@xxx.com</b></h5>
                                        <p class="mb-4 text-muted text-small">Card Number</p>
                                        *********1152
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class=""><b>Google Pay Account</b></h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="mb-4"><b>Rope Media</b></h5>
                                        <p class="mb-4 text-muted text-small">Email</p>
                                        xxx@xxx.com
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="third" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h5 class="mb-4">Withdraw</h5>
                                    <form role="form" class="send-transaction"  method="POST">
                                        <label class="form-group has-float-label">
                                            <select  class="form-control select2-single" onchange="withdrawCryptoTypeChange()" name="withdraw_crypto_type" id="withdraw_crypto_type">
                                                <option value="BTC">BTC</option>
                                                <option value="ETH">ETH</option>
                                                <option value="BCH">BCH</option>
                                                <option value="USDT">USDT</option>
                                            </select>
                                            <span>Select Coin(From)</span>
                                        </label>
                                        <label class="form-group has-float-label">
                                            <select class="form-control select2-single" name="withdraw_payment_type" id="withdraw_payment_type">
                                                <option value="btc">Apple Pay - xxx@xxx.com</option>
                                                <option value="eth">Google Pay - xxx@xxx.com</option>
                                                <option value="ACH">ACH Bank - ***3321</option>
                                                
                                            </select>
                                            <span>Select Fiat Method(To)</span>
                                        </label>
                                        <label class="form-group has-float-label" >
                                            <input class="form-control"  name="withdraw_crypto_amount" id="withdraw_crypto_amount" onchange="withdrawCryptoAmountChange()"/>
                                            <span id="withdraw_crypto_text">From Amount(BTC)</span>
                                        </label>      

                                        <label class="form-group has-float-label">
                                            <input class="form-control" name="withdraw_usd_amount" id="withdraw_usd_amount" onchange="withdrawUSDAmountChange()" required/>
                                            <span>Receive Amount(USD)</span>
                                        </label>
                                        <div id="withdrawValidationMsg">
                                        </div>
                                        <div id="withdrawBigMsg" style="display:none">
                                            <div style="border-style: solid; border: 1px solid; border-color: red; border-color: #e02a28; background-color: #fff6f5; padding:10px; border-top: 4px solid red; margin-bottom: 5px;">
                                                <p id="verifyErrorMessage"></p>
                                                Please verify <a style="color: blue" href="{{ route('business.setting') }}">here</a>
                                            </div>
                                        </div>                    
                                        <button class="btn btn-success btn-block" name="withdraw_submit" onclick="withdrawCrypto()" id="withdraw_submit" type="button">Withdraw Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6" id="CurCurrencyValueDiv_withdraw">
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
                                    var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                })();
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h5 class="mb-4">Buy Crypto</h5>
                                    <form role="form" >
                                        @csrf
                                        <label class="form-group has-float-label">
                                            <select class="form-control select2-single" name="paymentType" id="paymentType">
                                                <option value="applePay">Apple Pay</option>
                                                <option value="cardPay"> Debit or Credit Card</option>
                                                
                                                
                                            </select>
                                            <span>Select Fiat Method(from)</span>
                                        </label>                          

                                        <label class="form-group has-float-label">
                                            <select class="form-control select2-single" onchange="handleCryptoTypeChange()" name="cryptoType" id="cryptoType">
                                                <option value="BTC">BTC</option>
                                                <option value="ETH">ETH</option>
                                                <option value="BCH">BCH</option>
                                                <option value="USDT">USDT</option>
                                            </select>
                                            <span>Select Coin(To)</span>
                                        </label>
                                                            
                                        <label class="form-group has-float-label">
                                            <input class="form-control" id="amountUSD" onchange="sendUSDAmountChange()" type="number" placeholder="" required/>
                                            <span>From Amount(USD)</span>
                                        </label>       

                                        <label class="form-group has-float-label">
                                            <input class="form-control" id="amountCurrency" onchange="sendCryptoAmountChange()" name="amount" type="number" placeholder="" required/>
                                            <span>Receive Amount(BTC)</span>
                                        </label>                                            
                                        <div id="sendPaymentErrormsg"></div>
                                        <button class="btn btn-success btn-block" id="buyCryptoBtn" type="button" onclick="purchaseCrypto()">Buy Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6" id="CurCurrencyValueDiv">
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
                                    var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                })();
                                </script>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <table class="data-table data-table-feature" >
                                            <h5 class="card-title">Financial History</h5>
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Amount</th>
                                                    <th>Amount($)</th>                                                    
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>note</th>                                                    
                                                    <th>details</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BTC</td>
                                                    <td>Apple Pay - xxx@xx.com</td>
                                                    <td>0.1 BTC</td>         
                                                    <td>2,245 USD</td>                                                    
                                                    <td>2020/5/3</td>
                                                    <td>Confirmed</td>
                                                    <td>Withdraw</td>
                                                    <td><a type="button" href="" class="btn-secondary mb-1 btn-sm">Transaction</a></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BTC</td>
                                                    <td>Apple Pay - xxx@xx.com</td>
                                                    <td>0.1 BTC</td>         
                                                    <td>2,245 USD</td>                                                    
                                                    <td>2020/5/3</td>
                                                    <td>Confirmed</td>
                                                    <td>Withdraw</td>
                                                    <td><a type="button" href="" class="btn-secondary mb-1 btn-sm">Transaction</a></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BTC</td>
                                                    <td>Apple Pay - xxx@xx.com</td>
                                                    <td>0.1 BTC</td>         
                                                    <td>2,245 USD</td>                                                    
                                                    <td>2020/5/3</td>
                                                    <td>Confirmed</td>
                                                    <td>Withdraw</td>
                                                    <td><a type="button" href="" class="btn-secondary mb-1 btn-sm">Transaction</a></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BTC</td>
                                                    <td>Apple Pay - xxx@xx.com</td>
                                                    <td>0.1 BTC</td>         
                                                    <td>2,245 USD</td>                                                    
                                                    <td>2020/5/3</td>
                                                    <td>Confirmed</td>
                                                    <td>Withdraw</td>
                                                    <td><a type="button" href="" class="btn-secondary mb-1 btn-sm">Transaction</a></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BTC</td>
                                                    <td>Apple Pay - xxx@xx.com</td>
                                                    <td>0.1 BTC</td>         
                                                    <td>2,245 USD</td>                                                    
                                                    <td>2020/5/3</td>
                                                    <td>Confirmed</td>
                                                    <td>Withdraw</td>
                                                    <td><a type="button" href="" class="btn-secondary mb-1 btn-sm">Transaction</a></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BTC</td>
                                                    <td>Apple Pay - xxx@xx.com</td>
                                                    <td>0.1 BTC</td>         
                                                    <td>2,245 USD</td>                                                    
                                                    <td>2020/5/3</td>
                                                    <td>Confirmed</td>
                                                    <td>Withdraw</td>
                                                    <td><a type="button" href="" class="btn-secondary mb-1 btn-sm">Transaction</a></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>
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
                                <p class="font-weight-bold mb-0 " id="TotalBalance">1 BTC</p>
                                <p class="text-muted mb-0 text-small" id="TotalBalanceUSD">12,0000 $</p>
                            </a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-success btn-block mb-1 btn-sm">Add Payment Method</button>
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
                                <p  id="totalBalanceUSDT" class="text-semi-muted mb-0">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://verify.sendwyre.com/js/verify-module-init-beta.js"></script>
     <script src="https://verify.sendwyre.com/js/verify-module-init-beta.js"></script>
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- <script src="{{ asset('public/assets/js/vendor/jquery.steps.js') }}"></script> -->
    <!-- <script src="{{ asset('public/assets/js/vendor/main.js') }}"></script> -->
    <!-- <script src="{{ asset('public/assets/js/vendor/jquery-3.3.1.min.js') }}"></script> -->
   
    <script type="text/javascript"> 
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

      (function($) {
          
          // debit card popup
          var widget = new Wyre({
              env: 'test',
              reservation: 'CVGGJ3X8D7J96UCAZP2J', // reservation is mandatory
              operation: {
                  type: 'debitcard-hosted-dialog'
              }
          });

          widget.on("paymentSuccess", function (e) {
              console.log("paymentSuccess", e );
          });

          $('#buy').click(function(){
              alert("abc");
              widget.open();
          })

      })(jQuery);
      
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
            
        });           
        
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

        function withdrawCryptoAmountChange(){
            const value = document.getElementById("withdraw_crypto_amount").value;
            if (document.getElementById("withdraw_crypto_type").value == 'BTC')
            {
                const PerBTCValue = @json($CryptoCurrencyValue->BTC->USD);
                document.getElementById("withdraw_usd_amount").value = value * PerBTCValue;
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'ETH')
            {
                const PerETHValue =  @json($CryptoCurrencyValue->ETH->USD);
                document.getElementById("withdraw_usd_amount").value = value * PerETHValue;
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'BCH')
            {
                const PerBCHValue =  @json($CryptoCurrencyValue->BCH->USD);
                document.getElementById("withdraw_usd_amount").value = value * PerBCHValue;
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'USDT')
            {
                const PerUSDTValue =  @json($CryptoCurrencyValue->USDT->USD);
                document.getElementById("withdraw_usd_amount").value = value * PerUSDTValue;
            }
        }

        function sendUSDAmountChange(){
            const value = document.getElementById("amountUSD").value;
            if (document.getElementById("cryptoType").value == 'BTC')
            {           
                const PerBTCValue =  @json($CryptoCurrencyValue->BTC->USD);
                document.getElementById("amountCurrency").value = (value / PerBTCValue).toFixed(5);
            }
            else if (document.getElementById("cryptoType").value == 'ETH')
            {
                const PerETHValue =  @json($CryptoCurrencyValue->ETH->USD);
                document.getElementById("amountCurrency").value = (value / PerETHValue).toFixed(3);
            }
            else if (document.getElementById("cryptoType").value == 'BCH')
            {
                const PerBCHValue =  @json($CryptoCurrencyValue->BCH->USD);
                document.getElementById("amountCurrency").value = (value / PerBCHValue).toFixed(3);
            }
            else if (document.getElementById("cryptoType").value == 'USDT')
            {
                const PerUSDTValue =  @json($CryptoCurrencyValue->USDT->USD);
                document.getElementById("amountCurrency").value = (value / PerUSDTValue).toFixed(2);
            }
        }

        function withdrawUSDAmountChange(){
            const value = document.getElementById("withdraw_usd_amount").value;
            if (document.getElementById("withdraw_crypto_type").value == 'BTC')
            {           
                const PerBTCValue =  @json($CryptoCurrencyValue->BTC->USD);
                document.getElementById("withdraw_crypto_amount").value = (value / PerBTCValue).toFixed(5);
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'ETH')
            {
                const PerETHValue =  @json($CryptoCurrencyValue->ETH->USD);
                document.getElementById("withdraw_crypto_amount").value = (value / PerETHValue).toFixed(3);
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'BCH')
            {
                const PerBCHValue =  @json($CryptoCurrencyValue->BCH->USD);
                document.getElementById("withdraw_crypto_amount").value = (value / PerBCHValue).toFixed(3);
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'USDT')
            {
                const PerUSDTValue =  @json($CryptoCurrencyValue->USDT->USD);
                document.getElementById("withdraw_crypto_amount").value = (value / PerUSDTValue).toFixed(2);
            }
        }

        function handleCryptoTypeChange(){
            value = document.getElementById("amountUSD").value;
            var cryptoType = "";
            if (document.getElementById("cryptoType").value == 'BTC')
            {
                const PerBTCValue = @json($CryptoCurrencyValue->BTC->USD);      
                document.getElementById("amountCurrency").value = (value / PerBTCValue).toFixed(5);
                cryptoType = 'BTC';
            }
            else if (document.getElementById("cryptoType").value == 'ETH')
            {
                const PerETHValue = @json($CryptoCurrencyValue->ETH->USD);
                document.getElementById("amountCurrency").value = (value / PerETHValue).toFixed(3);
                cryptoType = 'ETH';
            }
            else if (document.getElementById("cryptoType").value == 'BCH')
            {
                const PerBCHValue = @json($CryptoCurrencyValue->BCH->USD);
                document.getElementById("amountCurrency").value = (value / PerBCHValue).toFixed(3);
                cryptoType = 'BCH';
            }
            else if (document.getElementById("cryptoType").value == 'USDT')
            {
                const PerUSDTValue =@json($CryptoCurrencyValue->USDT->USD);
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

        function withdrawCryptoTypeChange(){
            value = document.getElementById("withdraw_usd_amount").value;
            var cryptoType = "";
            if (document.getElementById("withdraw_crypto_type").value == 'BTC')
            {
                const PerBTCValue = @json($CryptoCurrencyValue->BTC->USD);      
                document.getElementById("withdraw_crypto_amount").value = (value / PerBTCValue).toFixed(5);
                cryptoType = 'BTC';
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'ETH')
            {
                const PerETHValue = @json($CryptoCurrencyValue->ETH->USD);
                document.getElementById("withdraw_crypto_amount").value = (value / PerETHValue).toFixed(3);
                cryptoType = 'ETH';
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'BCH')
            {
                const PerBCHValue = @json($CryptoCurrencyValue->BCH->USD);
                document.getElementById("withdraw_crypto_amount").value = (value / PerBCHValue).toFixed(3);
                cryptoType = 'BCH';
            }
            else if (document.getElementById("withdraw_crypto_type").value == 'USDT')
            {
                const PerUSDTValue =@json($CryptoCurrencyValue->USDT->USD);
                document.getElementById("withdraw_crypto_amount").value = (value / PerUSDTValue).toFixed(2);
                cryptoType = 'USDT';
            }
            $('#withdraw_crypto_text').html("From Amount("+cryptoType+")")

            baseUrl = "https://widgets.cryptocompare.com/";
            var scripts = document.getElementsByTagName("script");
            var embedder = document.getElementById("CurCurrencyValue");  
        
            (function (){
                var appName = encodeURIComponent(window.location.hostname);
                if(appName==""){appName="local";}
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                var theUrl = baseUrl+'serve/v1/coin/chart?fsym='+cryptoType+'&tsym=USD';
                console.log(theUrl);
                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                $("#CurCurrencyValueDiv_withdraw").html("");    
                document.getElementById("CurCurrencyValueDiv_withdraw").append(s);
            })();
        }


        function purchaseCrypto() {
            var amountCurrency=$("#amountCurrency").val();
            if(amountCurrency == '')
            {
                $("#recipientAddress").focus();
                $('#sendPaymentErrormsg').html("Please Enter USD Amount To Purchase").css("color","red");
            }
            else if(amountCurrency <= 0)
            {
                $("#recipientAddress").focus();
                $('#sendPaymentErrormsg').html("Please Enter Purchase Amount greater than 0.").css("color","red");
            }
            else{
                $('#sendPaymentErrormsg').html("Please Wait");
                var paymentMethod = document.getElementById("paymentType").value;
                var current_object = $(this);
                
                let cryptoType = document.getElementById("cryptoType").value;
                let amount = document.getElementById("amountUSD").value;
                let _token   = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "/business/financial/buyCrypto",
                    type:"POST",
                    data:{
                        paymentMethod: paymentMethod,
                        cryptoType:cryptoType,
                        amount:amount,
                        _token: _token
                    },
                    success:function(response){
                        console.log(response.value);
                        
                        (function($) {
                        // debit card popup
                            var widget = new Wyre({
                                env: 'test',
                                reservation: response.value, // reservation is mandatory
                                operation: {
                                    type: 'debitcard-hosted-dialog'
                                }
                            });
                            
                            widget.on("paymentSuccess", function (e) {
                                $('#sendPaymentErrormsg').html("");
                                console.log("paymentSuccess", e );
                            });

                            widget.open();
                            $('#sendPaymentErrormsg').html("");

                         })(jQuery);
                    
                    },
                });
            }
        }

        function withdrawCrypto() {
            var withdraw_amount=$("#withdraw_crypto_amount").val();
            if(withdraw_amount == '')
            {
                $("#recipientAddress").focus();
                $('#withdrawValidationMsg').html("Please Enter Amount To Withdraw").css("color","red");
            }
            else if(withdraw_amount <= 0)
            {
                $("#recipientAddress").focus();
                $('#withdrawValidationMsg').html("Please Enter Withdraw Amount greater than 0.").css("color","red");
            }
            else{
                let paymentMethod = document.getElementById("withdraw_payment_type").value;
                
                    $.ajax({
                        url: "/business/financial/getUserInformation",
                        type:"GET",
                        success:function(response){
                            // console.log(response.identity_verified);
                    
                            if(response.identity_verified == null || response.payment_verified == null)
                            {
                                let errorText = "Your "+(response.identity_verified?"":"identity ")+(response.identity_verified?"":response.payment_verified?"":"and ")+(response.payment_verified?"":"payment method "+"is not verified yet.");
                                $('#verifyErrorMessage').html(errorText);
                                $('#withdrawValidationMsg').html("");
                                document.getElementById("withdrawBigMsg").style.display = 'block';
                            }
                            else {
                                alert(" you are able to withdraw.");
                            }
                        },
                    }); 
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
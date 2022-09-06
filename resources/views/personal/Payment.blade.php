@extends('personal.layout.layout')

@section('extracss')
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 list">
                <div class="mb-2">
                    <h1>Balance - $ 212,212.02 </h1> <span> ( 21.2 BTC )</span>
                    <div class="float-sm-right">
                        <button type="button" class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Funds
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Deposit</a>
                            <a class="dropdown-item" href="#">WithDraw</a>
                        </div>
                    </div>                        
                </div>
                <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                            aria-controls="first" aria-selected="true">BTC</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="second-tab" data-toggle="tab" href="#second" role="tab"
                            aria-controls="second" aria-selected="false">ETH</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="second-tab" data-toggle="tab" href="#second" role="tab"
                            aria-controls="second" aria-selected="false">BCH</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="second-tab" data-toggle="tab" href="#second" role="tab"
                            aria-controls="second" aria-selected="false">USDT</a>
                    </li>
                </ul>
                <div class="tab-content">                  
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <div class="card mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0"><small>Balance</small> <b>2.34 BTC</b></h6>
                                        <div role="progressbar" class="progress-bar-circle position-relative"
                                            data-color="#922c88" data-trailColor="#d7d7d7" aria-valuemax="100"
                                            aria-valuenow="40" data-show-percent="true">
                                        </div>                                        
                                    </div>
                                    <div class="card-body">
                                        <div><p>Wallet Address 0x12312312Aasd234234</p></div>                                        
                                        <div><img class="img-thumbnail list-thumbnail xmiddle border-0 " src="{{ asset('public/assets/images/icon/QRCode.png') }}" /></div>
                                        <button type="button" class="btn btn-outline-primary btn-xs">Copy Address</button>
                                        <h5 class="text-white mb-3">Transfer Bitcoin</h5>
                                        <div class="form-container">
                                            <form>
                                            <div class="form-group">
                                                    <label>Recipient's Wallet Address</label>
                                                    <input type="input" class="form-control" name="recipient_address" id="recipient_address" placeholder="Recipient's Wallet Address">                    
                                                </div>                                                
                                                <div class="form-group mb-5">
                                                    <label>Amount</label>
                                                    <input type="input" class="form-control" name="recipient_address" id="recipient_address" placeholder="Transfer Amount">
                                                </div>                                               
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-primary mt-3 pl-5 pr-5 ">Send</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="mb-4">Exchange</h5>
                                        <form style="display:flex">
                                            <div style="width:250px">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <select class="form-control select2-single">
                                                        <option label="&nbsp;">&nbsp;</option>
                                                        <optgroup label="Your Currency">
                                                            <option value="AK">BTC</option>
                                                            
                                                        </optgroup>
                                                        
                                                    </select>
                                                    <br>
                                                    <br>
                                                    <div class="form-group mb-4">
                                                        <label>Amount</label>
                                                        <div>
                                                            <div class="slider" id="singleSlider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-5">
                                                <!-- <label></label> -->
                                                <div>
                                                    <div class="slider" id="dashboardPriceRange1"></div>
                                                </div>
                                            </div>
                                            </div>
                                            <div style="padding:30px">
                                                <img src="{{ asset('public/assets/images/icon/exchange.jpg') }}" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                            </div>
                                            <div style="width:250px">

                                                <div class="form-group">
                                                    <label>To</label>
                                                    <select class="form-control select2-single">
                                                        <option label="&nbsp;">&nbsp;</option>
                                                        <optgroup label="Currencies ">
                                                            <option value="AK">USD</option>
                                                            <option value="AK">USD</option> 
                                                            <option value="AK">USD</option>
                                                            <option value="AK">USD</option>
                                                            
                                                        </optgroup>
                                                        
                                                    </select>
                                                    <div>
                                                        <br>
                                                        <br>
                                                        you will receive 5000 USD.
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        
                                        <div style="display:flex;justify-content:space-around;">
                                            <button type="submit" class="btn btn-primary mb-0">Exchange</button>
                                            
                                        </div>
                                        <br>
                                        <table class="data-table data-table-feature" >
                                            <h5 class="card-title">Transaction History</h5>
                                            <thead>
                                                <tr>
                                                    <th style="padding:15px">ID</th>
                                                    <th style="padding:15px">Amount</th>
                                                    <th style="padding:15px">details</th>
                                                    <th style="padding:15px">Address</th>
                                                    <th style="padding:15px">Date</th>
                                                    <th style="padding:15px">Status</th>
                                                    
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            
                                                <tr>
                                                    <td style="padding:15px">1</td>
                                                    <td style="padding:15px">20 BTC</td>         
                                                    <td style="padding:15px">Received</td>
                                                    <td style="padding:15px">0x12315326Aasd234234</td>
                                                    <td style="padding:15px">2020/5/3</td>
                                                    <td style="padding:15px">pending</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:15px">1</td>
                                                    <td style="padding:15px">20 BTC</td>         
                                                    <td style="padding:15px">Received</td>
                                                    <td style="padding:15px">0x12315326Aasd234234</td>
                                                    <td style="padding:15px">2020/5/3</td>
                                                    <td style="padding:15px">pending</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:15px">1</td>
                                                    <td style="padding:15px">20 BTC</td>         
                                                    <td style="padding:15px">Received</td>
                                                    <td style="padding:15px">0x12315326Aasd234234</td>
                                                    <td style="padding:15px">2020/5/3</td>
                                                    <td style="padding:15px">pending</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:15px">1</td>
                                                    <td style="padding:15px">20 BTC</td>         
                                                    <td style="padding:15px">Received</td>
                                                    <td style="padding:15px">0x12315326Aasd234234</td>
                                                    <td style="padding:15px">2020/5/3</td>
                                                    <td style="padding:15px">pending</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:15px">1</td>
                                                    <td style="padding:15px">20 BTC</td>         
                                                    <td style="padding:15px">Received</td>
                                                    <td style="padding:15px">0x12315326Aasd234234</td>
                                                    <td style="padding:15px">2020/5/3</td>
                                                    <td style="padding:15px">pending</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:15px">1</td>
                                                    <td style="padding:15px">20 BTC</td>         
                                                    <td style="padding:15px">Received</td>
                                                    <td style="padding:15px">0x12315326Aasd234234</td>
                                                    <td style="padding:15px">2020/5/3</td>
                                                    <td style="padding:15px">pending</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:15px">1</td>
                                                    <td style="padding:15px">20 BTC</td>         
                                                    <td style="padding:15px">Received</td>
                                                    <td style="padding:15px">0x12315326Aasd234234</td>
                                                    <td style="padding:15px">2020/5/3</td>
                                                    <td style="padding:15px">pending</td>
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
@endsection

@section('extrajs')
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
@endsection
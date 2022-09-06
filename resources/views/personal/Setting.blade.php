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
                    <!-- <h1><i class="simple-icon-settings"></i>&nbsp&nbsp&nbspSettings</h1>  -->
                                          
                </div>
                
                <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                            aria-controls="first" aria-selected="true">Basic Info</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="second-tab" data-toggle="tab" href="#second" role="tab"
                            aria-controls="second" aria-selected="false">Payment Methods</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="third-tab" data-toggle="tab" href="#third" role="tab"
                            aria-controls="third" aria-selected="false">Security</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="fourth-tab" data-toggle="tab" href="#fourth" role="tab"
                            aria-controls="fourth" aria-selected="false">API Keys</a>
                    </li>
                </ul>
                <div class="tab-content">      
                    <!-- Basic info tab             -->
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                         <div class="row mt-5">
                            <div class="col-lg-4 col-12 mb-4">
                                <!-- <div class="card mb-4"> -->
                                    <!-- <div class="card-body d-flex justify-content-between align-items-center"> -->
                                        <h6 class="mb-4"><b>Profile</b></h5>
                                                                              
                                    <!-- </div> -->
                                    <!-- <div class="card-body"> -->
                                        <div class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <img alt="Profile" src="{{ asset('public/assets/img/profile-pic-l.jpg') }}" class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail">
                                                &nbsp&nbsp&nbsp&nbsp
                                                <div>
                                                    <br>
                                                    <br>
                                                    <h3 class="">Sarah Kortney</h3>
                                                </div>
                                            </div>
                                            <p class="mb-4 text-muted text-small">Account ID AC_DUAGU2TJHDL</p>
                                            <p class="mb-4 text-muted text-small">Joined Auguest 03, 2020</p>
                                        </div>
                                    <!-- </div> -->

                                <!-- </div> -->
                            </div>
                            <div class="col-12 col-lg-8">
                                <!-- <div class="card mb-4"> -->
                                    <!-- <div class="card-body"> -->
                                        <h6 class="mb-4"><b>Account Status</b></h6>
                                        <div>
                                            <h10 class="mb-4" style="color:rgb(97, 240, 96)"> <img alt="Profile" src="{{ asset('public/assets/images/icon/verified.png' ) }}" style="width:15px;height:15px" ><b>&nbsp&nbspActive</b></h10>   
                                        </div>
                                        <br>
                                        <br>
                                        <div>
                                            <p class=" text-muted text-small">Address</p>
                                            <h8 class="mb-2" > 704 Ross Dr Trevose, PA, 19053, US</h8><br><br>
                                            <h10 class="mb-4" style="color:rgb(97, 240, 96)"> <img alt="Profile" src="{{ asset('public/assets/images/icon/verified.png' ) }}" style="width:15px;height:15px ml-2" ><b>&nbsp&nbspVerified</b></h10>                           
                                        </div>
                                        <br>
                                        <br>
                                        <div>
                                            <p class=" text-muted text-small">Email&nbsp&nbsp<a style="color:blue">Edit</a></p>
                                            <h8 class="mb-2" > 704 Ross Dr Trevose, PA, 19053, US</h8><br><br>
                                            <h10 class="mb-4" style="color:rgb(97, 240, 96)"> <img alt="Profile" src="{{ asset('public/assets/images/icon/verified.png' ) }}" style="width:15px;height:15px ml-2" ><b>&nbsp&nbspVerified</b></h10>                           
                                        </div>
                                        <br>
                                        <br>
                                        <div>
                                            <p class=" text-muted text-small">Phone number&nbsp&nbsp<a style="color:blue">Edit</a></p>
                                            <h8 class="mb-2" > +1 (323) 477-2451</h8><br><br>
                                            <h10 class="mb-4" style="color:rgb(97, 240, 96)"> <img alt="Profile" src="{{ asset('public/assets/images/icon/verified.png' ) }}" style="width:15px;height:15px ml-2" ><b>&nbsp&nbspVerified</b></h10>                           
                                        </div>
                                    <!-- </div> -->
                                <!-- </div> -->
                            </div>
                        </div>
                        
                    </div> 

                    <!-- Payment Methods tab -->
                    <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                         <div class="">
                            <div class="col-lg-4 col-12 mb-4">
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
                            <div class="col-120 col-lg-8 d-flex">
                                 <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class=""><b>Bitcoin</b></h5>
                                                                              
                                    </div>
                                    <div class="card-body ml-3">
                                        <h6 class="mb-4"><b>Bitcoin Deposit <br>Address</b></h5>
                                    
                                            <p class="mb-4 text-muted text-small">1CknMaAsh2tL2x9Gs5kc6gz<br>Azf19vcws</p>
                                      

                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class=""><b>Ethereum</b></h5>
                                                                              
                                    </div>
                                    <div class="card-body ml-3">
                                        <h6 class="mb-4"><b>ETH + Supported <br >ERC20 Deposit</b></h5>
                                    
                                            <p class="mb-4 text-muted text-small">0xc089898fsd9fsd9f8s9f890s8<br>A8s098fs09fds</p>
                                      

                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>  

                    <!-- Security tab -->
                    <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                         <div class="">
                            <!-- <div class="col-lg-4 col-1112 d-flex"> -->
                                
                            <div class="row">
                                <div class="col-lg-4 col-12 mb-4">
                            
                                    <div class="card-body">
                                        <h6 class="mb-5"><b>Multifactor is disabled</b></h5>
                                        <h10 class="mb-4">How would you like to confirm actions</br>on Raplex</h10>

                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                                value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                None
                                                <br>
                                                <p class="mb-4 text-muted text-small">About None</p>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                                value="option1" >
                                            <label class="form-check-label" for="gridRadios1">
                                                SMS link
                                                <p class="mb-4 text-muted text-small">About SMS link</p>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                                value="option1" >
                                            <label class="form-check-label" for="gridRadios1">
                                                SMS code
                                                <p class="mb-4 text-muted text-small">About SMS code</p>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                                value="option1" >
                                            <label class="form-check-label" for="gridRadios1">
                                                Authenticator
                                                <p class="mb-4 text-muted text-small">About Authenticator</p>
                                            </label>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary mb-0">Save</button>


                                    </div>

                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="card-body">
                                        <h6 class="mb-5"><b>What is it and why it's important</b></h5>
                                        <h10 class="mb-4">Multifactor authentification is an 
                                        optional but highly recommended security feature that adds an <br>extra layer of protection to your wyre account. once enabled an authentification code or action will <br>
                                        be required in addtion to your password whenever you log in.</h10>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-12 mb-4">
                                    <div class="card-body">
                                        <h6 class="mb-5"><b>Change password</b></h5>                                                                            
                                    
                                        <input class="form-control mb-4" type="password" placeholder="Old password" />                                      
                                        <input class="form-control mb-4" type="password" placeholder="New password" />
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="card-body">
                                        <h6 class="mb-5"><b>Last sessions</b></h5>                                                                            
                                
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">192.16.42.53</th>
                                                    <th scope="col">City/Country</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>192.16.42.53</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>192.16.42.53</td>
                                                    <td>Thornton</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>192.16.42.53</td>
                                                    <td>the Bird</td>
                                                </tr>
                                            </tbody>
                                        </table>                                    
                                    </div>
                                </div>
                            </div>                                                         
                        </div>
                        
                    </div>  
                    <!-- API Keys -->
                    <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <div class="card-body">
                                    <h6 class="mb-5"><b>API Keys</b></h5>
                                    <h10 class="mb-4">You have no API keys</h10>

                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card-body">
                                    <h6 class="mb-5"><b><a style="color:blue">Request API Key</a></b></h5>

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
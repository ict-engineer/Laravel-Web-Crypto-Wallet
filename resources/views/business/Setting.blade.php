@extends('business.layout.layout')

@section('businesscss')
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
                        <a class="nav-link " id="third-tab" data-toggle="tab" href="#third" role="tab"
                            aria-controls="third" aria-selected="false">Security</a>
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
                            <!-- <div class="col-12 col-lg-8">
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
                            </div> -->
                            <div class="col-12 col-lg-8 pt-5 pl-5">
                                <div class="d-flex mb-3 mx-auto">
                                    
                                    @if($profile_completed == null)
                                        <div style="width: 25px; height: 25px;">
                                            <svg width="100%" fill="#4d525b" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M12,12 C14.7575,12 17,9.75625 17,7 C17,4.24375 14.7575,2 12,2 C9.2425,2 7,4.24375 7,7 C7,9.75625 9.24375,12 12,12 Z M12,13.25 C6.1125,13.25 2,16.33375 2,20.75 L2,22 L22,22 L22,20.75 C22,16.33375 17.8875,13.25 12,13.25 Z"></path>
                                                </g>
                                            </svg>
                                            
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Profile Completed</p>
                                        <a href="{{ route('business.setting.profile') }}" style="color: blue">Complete</a>
                                    
                                    @else
                                        <div style="width: 25px; height: 25px;">
                                            <svg width="100%" fill="#5dc26a" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M12,12 C14.7575,12 17,9.75625 17,7 C17,4.24375 14.7575,2 12,2 C9.2425,2 7,4.24375 7,7 C7,9.75625 9.24375,12 12,12 Z M12,13.25 C6.1125,13.25 2,16.33375 2,20.75 L2,22 L22,22 L22,20.75 C22,16.33375 17.8875,13.25 12,13.25 Z"></path>
                                                </g>
                                            </svg>
                                            
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Profile Completed<a href="{{ route('business.setting.profile') }}" style="color: blue; margin-left: 10px">Edit</a></p>
                                        <div style="width: 25px; height: 25px; margin-left: 8px ">
                                            <svg fill=#5dc26a width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <polygon points="20.093 4 7.953 16.3652376 3.908 12.2421336 2 14.1855334 7.954 20.25 22 5.94238122"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    @endif
                                </div>
            
                                <div class="d-flex mb-3">      
                                    
                                    @if($identity_verified == null)
                                        <div style="width: 25px; height: 25px; "> 
                                            <svg fill="#4d525b" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M20,4 L4,4 C2.9,4 2,4.9 2,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M9,8 C10.105,8 11,8.896 11,10 C11,11.104 10.105,12 9,12 C7.895,12 7,11.104 7,10 C7,8.896 7.897,8 9,8 Z M6,16 C6,14.16 7.16,13 9,13 C10.84,13 12,14.16 12,16 L6,16 Z M18,16 L14,16 L14,14 L18,14 L18,16 Z M18,13 L14,13 L14,11 L18,11 L18,13 Z"></path>
                                                </g>
                                                
                                            </svg>
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Identity Verified</p>
                                        <a href="{{ route('business.setting.identity') }}" style="color: blue">Verify</a>
                                    @else
                                        <div style="width: 25px; height: 25px; "> 
                                            <svg fill="#5dc26a" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M20,4 L4,4 C2.9,4 2,4.9 2,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M9,8 C10.105,8 11,8.896 11,10 C11,11.104 10.105,12 9,12 C7.895,12 7,11.104 7,10 C7,8.896 7.897,8 9,8 Z M6,16 C6,14.16 7.16,13 9,13 C10.84,13 12,14.16 12,16 L6,16 Z M18,16 L14,16 L14,14 L18,14 L18,16 Z M18,13 L14,13 L14,11 L18,11 L18,13 Z"></path>
                                                </g>
                                                
                                            </svg>
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Identify Verified<a href="#" style="color: blue; margin-left: 10px">Edit</a></p>
                                        <div style="width: 25px; height: 25px; margin-left: 8px ">
                                            <svg fill=#5dc26a width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <polygon points="20.093 4 7.953 16.3652376 3.908 12.2421336 2 14.1855334 7.954 20.25 22 5.94238122"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div class="d-flex mb-3">
                                    
                                    @if($payment_verified == null)
                                        <div style="width: 25px; height: 25px;">
                                            <svg fill="#4d525b" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M20.3421511,2.10528149 C20.0041943,1.93630311 19.6026222,1.97308076 19.3014431,2.19971058 L15.9218756,4.73339219 L12.5423082,2.19871659 C12.1894416,1.93431513 11.7033802,1.93431513 11.3495196,2.19871659 L7.96995216,4.73339219 L4.59038469,2.19871659 C4.2882116,1.97308076 3.88663947,1.93630311 3.54967671,2.10528149 C3.21171996,2.27425986 3,2.61818055 3,2.99390894 L3,11.9398228 C3,17.430626 11.1507215,21.6014098 11.4986182,21.7743642 L11.9459139,22 L12.3932096,21.7753582 C12.7411062,21.6014098 20.8918278,17.430626 20.8918278,11.9398228 L20.8918278,2.99390894 C20.8918278,2.61818055 20.6791138,2.27425986 20.3421511,2.10528149 Z M14.9278852,9.95184196 L11.4489187,9.95184196 C11.1755713,9.95184196 10.9519235,10.1754898 10.9519235,10.4488372 C10.9519235,10.7231785 11.1755713,10.9458324 11.4489187,10.9458324 L12.4429091,10.9458324 C13.8146159,10.9458324 14.9278852,12.0610897 14.9278852,13.4308085 C14.9278852,14.6315489 14.0730534,15.6374672 12.9399043,15.866085 L12.9399043,16.909775 L10.9519235,16.909775 L10.9519235,15.9157846 L8.9639426,15.9157846 L8.9639426,13.9278037 L12.4429091,13.9278037 C12.7172505,13.9278037 12.9399043,13.7051498 12.9399043,13.4308085 C12.9399043,13.1574611 12.7172505,12.9338133 12.4429091,12.9338133 L11.4489187,12.9338133 C10.0791999,12.9338133 8.9639426,11.818556 8.9639426,10.4488372 C8.9639426,9.25008472 9.81877437,8.24516039 10.9519235,8.01356062 L10.9519235,6.96987067 L12.9399043,6.96987067 L12.9399043,7.9638611 L14.9278852,7.9638611 L14.9278852,9.95184196 Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Payment Verified</p>
                                        <a href="{{ route('business.setting.payment') }}" style="color: blue">Verify</a>
                                    @else
                                        <div style="width: 25px; height: 25px;">
                                            <svg fill="#5dc26a" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M20.3421511,2.10528149 C20.0041943,1.93630311 19.6026222,1.97308076 19.3014431,2.19971058 L15.9218756,4.73339219 L12.5423082,2.19871659 C12.1894416,1.93431513 11.7033802,1.93431513 11.3495196,2.19871659 L7.96995216,4.73339219 L4.59038469,2.19871659 C4.2882116,1.97308076 3.88663947,1.93630311 3.54967671,2.10528149 C3.21171996,2.27425986 3,2.61818055 3,2.99390894 L3,11.9398228 C3,17.430626 11.1507215,21.6014098 11.4986182,21.7743642 L11.9459139,22 L12.3932096,21.7753582 C12.7411062,21.6014098 20.8918278,17.430626 20.8918278,11.9398228 L20.8918278,2.99390894 C20.8918278,2.61818055 20.6791138,2.27425986 20.3421511,2.10528149 Z M14.9278852,9.95184196 L11.4489187,9.95184196 C11.1755713,9.95184196 10.9519235,10.1754898 10.9519235,10.4488372 C10.9519235,10.7231785 11.1755713,10.9458324 11.4489187,10.9458324 L12.4429091,10.9458324 C13.8146159,10.9458324 14.9278852,12.0610897 14.9278852,13.4308085 C14.9278852,14.6315489 14.0730534,15.6374672 12.9399043,15.866085 L12.9399043,16.909775 L10.9519235,16.909775 L10.9519235,15.9157846 L8.9639426,15.9157846 L8.9639426,13.9278037 L12.4429091,13.9278037 C12.7172505,13.9278037 12.9399043,13.7051498 12.9399043,13.4308085 C12.9399043,13.1574611 12.7172505,12.9338133 12.4429091,12.9338133 L11.4489187,12.9338133 C10.0791999,12.9338133 8.9639426,11.818556 8.9639426,10.4488372 C8.9639426,9.25008472 9.81877437,8.24516039 10.9519235,8.01356062 L10.9519235,6.96987067 L12.9399043,6.96987067 L12.9399043,7.9638611 L14.9278852,7.9638611 L14.9278852,9.95184196 Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Payment Verified<a href="#" style="color: blue; margin-left: 10px">Edit</a></p>
                                        <div style="width: 25px; height: 25px; margin-left: 8px ">
                                            <svg fill=#5dc26a width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <polygon points="20.093 4 7.953 16.3652376 3.908 12.2421336 2 14.1855334 7.954 20.25 22 5.94238122"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div class="d-flex mb-3">
                                    
                                    @if($phone_verified == null)
                                        <div style="width: 25px; height: 25px;">
                                            <svg fill="#4d525b" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M14.9411765,22 L20.8235294,22 C21.4732762,22 22,21.4732762 22,20.8235294 L22,16.1176471 C22,15.4679003 21.4732762,14.9411765 20.8235294,14.9411765 L16.1176471,14.9411765 C15.4679003,14.9411765 14.9411765,15.4679003 14.9411765,16.1176471 L14.9411765,17.2941176 C12.7483529,17.3228692 10.6369269,16.4644604 9.08623323,14.9137668 C7.53553956,13.3630731 6.67713076,11.2516471 6.70588235,9.05882353 L7.88235294,9.05882353 C8.53209971,9.05882353 9.05882353,8.53209971 9.05882353,7.88235294 L9.05882353,3.17647059 C9.05882353,2.52672382 8.53209971,2 7.88235294,2 L3.17647059,2 C2.52672382,2 2,2.52672382 2,3.17647059 L2,9.05882353 C2,16.2060379 7.79396206,22 14.9411765,22 Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Phone number Verified</p>
                                        <a href="#" style="color: blue">Verify</a>
                                    @else
                                        <div style="width: 25px; height: 25px;">
                                            <svg fill="#5dc26a" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M14.9411765,22 L20.8235294,22 C21.4732762,22 22,21.4732762 22,20.8235294 L22,16.1176471 C22,15.4679003 21.4732762,14.9411765 20.8235294,14.9411765 L16.1176471,14.9411765 C15.4679003,14.9411765 14.9411765,15.4679003 14.9411765,16.1176471 L14.9411765,17.2941176 C12.7483529,17.3228692 10.6369269,16.4644604 9.08623323,14.9137668 C7.53553956,13.3630731 6.67713076,11.2516471 6.70588235,9.05882353 L7.88235294,9.05882353 C8.53209971,9.05882353 9.05882353,8.53209971 9.05882353,7.88235294 L9.05882353,3.17647059 C9.05882353,2.52672382 8.53209971,2 7.88235294,2 L3.17647059,2 C2.52672382,2 2,2.52672382 2,3.17647059 L2,9.05882353 C2,16.2060379 7.79396206,22 14.9411765,22 Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Phone number Verified<a href="#" style="color: blue; margin-left: 10px">Edit</a></p>
                                        <div style="width: 25px; height: 25px; margin-left: 8px ">
                                            <svg fill=#5dc26a width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <polygon points="20.093 4 7.953 16.3652376 3.908 12.2421336 2 14.1855334 7.954 20.25 22 5.94238122"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div class="d-flex mb-3">
                                    
                                    @if($email_verified == null)
                                        <div style="width: 25px; height: 25px;">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="#4d525b" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                <path d="M12,11.823 L3.035,6.26 C3.322,6.1 3.648,6 4,6 L20,6 C20.352,6 20.677,6.1 20.965,6.26 L12,11.823 Z M12.527,13.85 L12.527,13.849 L21.997,7.972 C21.997,7.98 22,7.99 22,8 L22,17 C22,18.1 21.103,19 20,19 L4,19 C2.897,19 2,18.1 2,17 L2,8 C2,7.99 2.003,7.983 2.003,7.973 L11.473,13.85 C11.634,13.95 11.817,14 12,14 C12.183,14 12.367,13.95 12.527,13.85 Z"></path>
                                            </g>
                                        </svg></div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Email Verified</p>
                                        <a href="#" style="color: blue">Verify</a>
                                    @else
                                        <div style="width: 25px; height: 25px;">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="#5dc26a" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                <path d="M12,11.823 L3.035,6.26 C3.322,6.1 3.648,6 4,6 L20,6 C20.352,6 20.677,6.1 20.965,6.26 L12,11.823 Z M12.527,13.85 L12.527,13.849 L21.997,7.972 C21.997,7.98 22,7.99 22,8 L22,17 C22,18.1 21.103,19 20,19 L4,19 C2.897,19 2,18.1 2,17 L2,8 C2,7.99 2.003,7.983 2.003,7.973 L11.473,13.85 C11.634,13.95 11.817,14 12,14 C12.183,14 12.367,13.95 12.527,13.85 Z"></path>
                                            </g>
                                        </svg></div>
                                        <p class="ml-3 p-1" style="width: 200px; font-size: 1em">Email Verified<a href="#" style="color: blue; margin-left: 10px">Edit</a></p>
                                        <div style="width: 25px; height: 25px; margin-left: 8px ">
                                            <svg fill=#5dc26a width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <polygon points="20.093 4 7.953 16.3652376 3.908 12.2421336 2 14.1855334 7.954 20.25 22 5.94238122"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    @endif
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
                </div>
            </div>
        </div>                    
    </div>
@endsection

@section('businessjs')
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
@endsection
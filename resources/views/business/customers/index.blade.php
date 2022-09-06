@extends('business.layout.layout')

@section('businesscss')
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div>
    <div class="toggle_radio">
        <input type="radio" class="toggle_option" id="b2b_show" name="toggle_option">
        <input type="radio" checked class="toggle_option" id="b2c_show" name="toggle_option">
        <input type="radio" class="toggle_option" id="bbc_show" name="toggle_option">
        <label for="b2b_show"><p>B2B</p></label>
        <label for="b2c_show"><p>B2C</p></label>        
        <label for="bbc_show"><p>All</p></label>
        <div class="toggle_option_slider">
        </div>
    </div>
</div>
<div class="b2c-container">
    <div class="row sortable">
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Total B2C Customers</h6>
                    <h3 class="sub-title-number">220</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">New B2C Customers</h6>
                    <h3 class="sub-title-number">16</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Active B2C Customers</h6>
                    <h3 class="sub-title-number">204</h3>
                </div>
            </div>
        </div>    
    </div>
    <div class="container-fluid" >
        
        <div class="row mb-4">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title"></h5> -->
                        <div style="display:flex">
                            <div>
                                <h5 class="card-title">Customers</h5>
                            </div>
                            <div>
                            <a type="button" style="margin-left: 30px" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-plus">Add Customer</i></a>
                            </div>                   
                        </div>
                        <table class="data-table data-table-feature" >
                            
                            <thead>
                                <tr>
                                    <th style="padding:15px">ID</th>
                                    <th style="padding:15px">Name</th>                                
                                    <th style="padding:15px">Email</th>
                                    <th style="padding:15px">Phone</th>
                                    <th style="padding:15px">Total Orders</th>
                                    <!-- <th style="text-align:center">password</th> -->
                                    <th style="padding:15px">Order for this week</th>
                                    <th style="padding:15px">Status</th>
                                    <th style="padding:15px">Type</th>
                                    <th style="padding:15px">Details</th>
                                    <th style="padding:15px">Actions</th>                                
                                </tr>
                            </thead>
                            <tbody>                                                      
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="b2b-container">
    <div class="row sortable">
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Total B2B Customers</h6>
                    <h3 class="sub-title-number">220</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">New B2B Customers</h6>
                    <h3 class="sub-title-number">16</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Active B2B Customers</h6>
                    <h3 class="sub-title-number">204</h3>
                </div>
            </div>
        </div>    
    </div>
    <div class="container-fluid" >
        
        <div class="row mb-4">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title"></h5> -->
                        <div style="display:flex">
                            <div>
                                <h5 class="card-title">B2B Customers</h5>
                            </div>
                            <div>
                            <a type="button" style="margin-left: 30px" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-plus">Add Customer</i></a>
                            </div>                   
                        </div>
                        <table class="data-table data-table-feature" >
                            
                            <thead>
                                <tr>
                                    <th style="padding:15px">ID</th>
                                    <th style="padding:15px">Name</th>                                
                                    <th style="padding:15px">Email</th>
                                    <th style="padding:15px">Phone</th>
                                    <th style="padding:15px">Total Orders</th>
                                    <!-- <th style="text-align:center">password</th> -->
                                    <th style="padding:15px">Order for this week</th>
                                    <th style="padding:15px">Status</th>
                                    <th style="padding:15px">Type</th>
                                    <th style="padding:15px">Details</th>
                                    <th style="padding:15px">Actions</th>                                
                                </tr>
                            </thead>
                            <tbody>                                                      
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">Miguel Pereira</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bbc-container">
    <div class="row sortable">
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Total Customers</h6>
                    <h3 class="sub-title-number">440</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">New Customers</h6>
                    <h3 class="sub-title-number">32</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative">
                    <div class="position-absolute handle card-icon">
                        <i class="simple-icon-shuffle"></i>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Active Customers</h6>
                    <h3 class="sub-title-number">408</h3>
                </div>
            </div>
        </div>    
    </div>
    <div class="container-fluid" >
        
        <div class="row mb-4">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title"></h5> -->
                        <div style="display:flex">
                            <div>
                                <h5 class="card-title">Customers</h5>
                            </div>
                            <div>
                            <a type="button" style="margin-left: 30px" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-plus">Add Customer</i></a>
                            </div>                   
                        </div>
                        <table class="data-table data-table-feature" >
                            
                            <thead>
                                <tr>
                                    <th style="padding:15px">ID</th>
                                    <th style="padding:15px">Name</th>                                
                                    <th style="padding:15px">Email</th>
                                    <th style="padding:15px">Phone</th>
                                    <th style="padding:15px">Total Orders</th>
                                    <!-- <th style="text-align:center">password</th> -->
                                    <th style="padding:15px">Order for this week</th>
                                    <th style="padding:15px">Status</th>
                                    <th style="padding:15px">Type</th>
                                    <th style="padding:15px">Details</th>
                                    <th style="padding:15px">Actions</th>                                
                                </tr>
                            </thead>
                            <tbody>                                                      
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">Miguel Pereira</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">William</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2B</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                                <tr>
                                    <td style="padding:15px">1</td>
                                    <td style="padding:15px">John Smith</td>                              
                                    <td style="padding:15px">john@samedayhire.com</td>
                                    <td style="padding:15px">345344525</td>
                                    <td style="padding:15px">100</td>
                                    <td style="padding:15px">20</td>
                                    <td style="padding:15px">Active</td>
                                    <td style="padding:15px">B2C</td>
                                    <td style="padding:15px">Vendor Owner</td>
                                    <td style="display:flex padding:3px"> 
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-eye"></i></a>
                                        <a type="button" href="" class="btn-secondary mb-1 btn-sm"><i class="simple-icon-pencil"></i></a>
                                        <button type="button" class="btn-danger mb-1 btn-sm remove-user"  > <i class="simple-icon-trash"> </i></button>
                                    </td>                                 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('businessjs')
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
    <script>
        $(".data-table-feature").DataTable({
            searching: true,
            bLengthChange: true,
            destroy: true,
            info: true,
            sDom: '<"row view-filter"<"col-sm-12"<"float-left"l><"float-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
            pageLength: 6,
            language: {
              paginate: {
                previous: "<i class='simple-icon-arrow-left'></i>",
                next: "<i class='simple-icon-arrow-right'></i>"
              }
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
    </script>
@endsection

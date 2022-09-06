<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="We at Raplex offer plethora of world’s leading Crypto Payment provider known for expert and industry expertise to build all-inclusive B2B2C platform."/>
    <meta name="keywords" content="Raplex.io Raplex CryptoPayment Wallet Payment Gateway">
    <meta name="author" content="raplex.io">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Raplex</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/assets/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/default.css') }}" rel="stylesheet">    
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TKDQH2J');</script>
    <!-- End Google Tag Manager -->
  
    <script>
        window.intercomSettings = {
            app_id: "d2iaunfn"
        };
    </script>

    <script>
    // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/d2iaunfn'
    (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/d2iaunfn';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>
   
</head>
<body>
    <header class="header-area">
        <div class="header-nav sticky">
            <div class="container-fluid">
                <div style="height:10px">
                    <div><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginWidth="0" marginHeight="0" frameBorder="0" border="0" style="margin-top:-10px"></iframe></div>    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="/"><img src="/public/assets/images/logo.png" alt="" style="width: 150px;"></a>
                                <!-- logo -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">   
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/">Business</a>
                                        </li>                                     
                                        <li class="nav-item">
                                            <a class="nav-link" href="/personal">Personal</a>
                                        </li>
                                    </ul>
                                </div> 
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">                                                                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">How it works</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#whyus">Why Us</a>
                                        </li>                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="#partner">Partners</a>
                                        </li>                                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                                <div class="navbar-btn d-none d-sm-flex">
                                    <a class="main-btn" href="/partner/register">Become a Partner</a>
                                </div>
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class='footer-area'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-3 col-md-6 col-sm-6'>
            <div class='footer-list mt-30'>
              <h4 class='title'>Menu</h4>
              <ul>
                <li>
                  <a href='#about'>How it works</a>
                </li>                
                <li>
                  <a href='#whyus'>Why US</a>
                </li>
                <li>
                  <a href='#partner'>Partners</a>
                </li>
                <li>
                  <a href='/support'>Support</a>
                </li>
              </ul>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-sm-6'>
            <div class='footer-list mt-30'>
              <h4 class='title'>Web App</h4>
              <ul>
                <li>
                  <a href='/login'>Login</a>
                </li>
                <li>
                  <a href='/register'>Signup</a>
                </li>
                <li>
                  <a href='/developers'>Developers</a>
                </li>
                <li>
                  <a href='/blogs'>Blogs</a>
                </li>
              </ul>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-sm-6'>
            <div class='footer-list mt-30'>
              <h4 class='title'>legal</h4>
              <ul>
                <li>
                  <a href='/legal/GDPR'>GDPR Privacy Policy</a>
                </li>
                <li>
                  <a href='/legal/AML'>AML Policy</a>
                </li>
                <li>
                  <a href='/legal/KYC'>KYC</a>
                </li>
              </ul>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-sm-6'>
            <div class='footer-list mt-30'>
              <h4 class='title'>Newsletter</h4>
              <form action='#'>
                <div class='input-box'>
                  <input type='text' placeholder='Email Address' />
                  <button>
                    <i class='fal fa-arrow-right'></i>
                  </button>
                </div>
              </form>
            </div>
            <div class="footer-visa">
              <img src="{{ asset('public/assets/images/visa.png')}}" />
              <img src="{{ asset('public/assets/images/master.png')}}" />
              <img src="{{ asset('public/assets/images/Wire.png')}}" />
              <img src="{{ asset('public/assets/images/Sepa.png')}}" />
            </div>
            <div class="footer-ach  d-flex justify-content-center">
              <a href="#" class="w-50 d-flex justify-content-center p-1">
                <img src="{{ asset('public/assets/images/ACH.png')}}" class="w-120"/>
              </a>
              <a href="#" class="w-50 d-flex justify-content-center p-1">
                <img src="{{ asset('public/assets/images/google-pay.png')}}" class="w-150"/>
              </a>
              <a href="#" class="w-50 d-flex justify-content-center p-1">
                <img src="{{ asset('public/assets/images/apple-pay.png')}}" class="w-150"/>
              </a>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-lg-12'>
            <div class='footer-copyright d-flex justify-content-sm-between justify-content-center align-items-center'>
              <p>Copyright © 2020 AVR Technology LLC. All rights reserved.</p>
              <ul>
                <li>
                  <a href='#'>
                    <i class='fab fa-facebook-square'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fab fa-twitter'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fab fa-linkedin'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fab fa-dribbble'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fab fa-github'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fal fa-paper-plane'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fab fa-btc'></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>      
    </footer>
    <script src="{{ asset('public/assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>

    @yield('script')
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKDQH2J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
</html>

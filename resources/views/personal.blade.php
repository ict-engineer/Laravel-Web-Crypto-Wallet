@extends('layouts.client')

@section('content')
<!--====== BANNER PART START ======-->
<section class='banner-area bg_cover d-block d-md-flex align-items-center'>
    <div class='banner-background'></div>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-7 col-md-7'></div>
            <div class='col-lg-5 col-md-5'>
            <div class='banner-content'>
                <h1 class='title'>
                Smart, Secure and Reliable Crypto Wallet with Buy/Sell
                  exchange features.
                </h1>
                <p>
                Experience a 360 full-feature wallet support that makes
                  Buy/Sell exchange features within your reach.
                </p>
                <ul>
                <li>
                    <a class='main-btn' href='/partner/register'>
                    Join Now
                    </a>
                </li>
                <li>
                    <a class='main-btn main-btn-2' href="{{ route('login' )}}">
                    Login1
                    </a>
                </li>
                </ul>
                <span>
                Join us on
                <a href='#'>
                    <i class='fab fa-facebook-square'></i> 21K
                </a>
                <a href='#'>
                    <i class='fab fa-twitter'></i> 16K
                </a>
                <a href='#'>
                    <i class='fab fa-linkedin'></i> 21K
                </a>
                </span>
            </div>
            </div>
        </div>
    </div>
    <div class='banner-thumb'>
    <img src="{{ asset('public/assets/images/personal.png')}}" alt='thumb' />
    </div>
</section>

<!-- Slide Part Start -->
<section class=" section-main" id="about">
    <!-- The slideshow -->
    <div class = "carousel-section row">
        <div class="col-md-6">
            <span class="text-above-title">One account for your crypto solution</span>
            <h2 class="text-block__title">Simple and Easy steps to use our wallet</h2>                
            <div class = "btns-link-to-slide">
                <div class="swiper-wrapper row">
                    <div class="swiper-external-switcher--item swiper-slide-thumb-active"  data-target="#myCarousel" data-slide-to="0">
                        <span><img src="/public/assets/images/icon/wallet-hover.png" class="hover-img" /><img src="/public/assets/images/icon/wallet.png" class="default-img" /> Create your wallet</span>
                    </div>
                
                    <div class="swiper-external-switcher--item"  data-target="#myCarousel" data-slide-to="1">                            
                        <span><img src="/public/assets/images/icon/exchange-hover.png" class="hover-img" /><img src="/public/assets/images/icon/exchange.png" class="default-img" /> Buy Crypto with your Fiat Currencies</span>
                    </div>

                    <div class="swiper-external-switcher--item"  data-target="#myCarousel" data-slide-to="2">                            
                        <span><img src="/public/assets/images/icon/pay-hover.png" class="hover-img" /><img src="/public/assets/images/icon/pay.png" class="default-img" /> Pay your bills in Crypto</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider-about--item__image-title">
                            <img src="/public/assets/images/carousel/person1.png" alt="Los Angeles">
                            <span class="title13">Create your wallet</span>
                        </div>
                        <div class="slider-about--item__text"><p>Are you looking at creating a full-bodies wallet which can
                            get generated in less than 5 minutes – all you need is
                            just complete your KYC verification and you are good to
                            own your own wallet.</p></div>                            
                    </div>
                    <div class="carousel-item">
                        <div class="slider-about--item__image-title">
                            <img src="/public/assets/images/carousel/person2.png" alt="Chicago">
                            <span class="title13">Buy Crypto with your Fiat Currencies</span>
                        </div>
                        <div class="slider-about--item__text"><p>No more waiting to buy your crypto or sell your crypto to
                            fiat- experience seamless execution of Buying and Selling
                            with us.</p></div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider-about--item__image-title">
                            <img src="/public/assets/images/carousel/person3.png" alt="New York">
                            <span class="title13">Buy Product or Services using Crypto or Pay Your Billsss</span>
                        </div>
                        <div class="slider-about--item__text"><p>Start paying your merchant anytime in Crypto using our
                            all-time accessible wallet. Sending and receiving has just
                            got easier.</p></div>
                    </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

                <ul class="carousel-indicators" style="position: relative; margin-top: 15px;">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>                    
                </ul>
                
            </div>
            <!-- Indicators -->
            
        </div>
    </div>    
</section>

<section class='marketplace-area pt-180 pb-200' id='whyus'>
    <div class='container'>
        <div class='row justify-content-center'>
        <div class='col-lg-8'>
            <div class='section-title text-center'>
            <span>Our Features</span>
            <h3 class='title'>What you can expect from US!</h3>
            </div>
        </div>
        </div>
        <div class='row justify-content-center'>
        <div class='col-lg-4 col-md-7 order-lg-1 order-1'>
            <div class='marketplace-item mt-30'>
            <img
                src="{{ asset('public/assets/images/features/Security.svg')}}"
                alt='icon'
            />
            <h3 class='title'>Secure System</h3>
            <p>
                Rest assured that your personal and financial data is
                completely safe with us.
            </p>
            </div>
        </div>
        <div class='col-lg-4 col-md-7 order-lg-2 order-3'>
            <div class='marketplace-item mt-30'>
            <img
                src="{{ asset('public/assets/images/features/payout.svg')}}"
                alt='icon'
            />
            <h3 class='title'>High Speed</h3>
            <p>
                All transaction is very quickly done and you can see all
                transaction histories on one place.
            </p>
            </div>
        </div>
        <div class='col-lg-4 col-md-7 order-lg-3 order-5'>
            <div class='marketplace-item mt-30'>
            <img
                src="{{ asset('public/assets/images/features/Account.svg')}}"
                alt='icon'
            />
            <h3 class='title'>One click Wizard</h3>
            <p>
                Hassle-free integration – just one click and you can integrate
                your system using the friendly wizard.
            </p>
            </div>
        </div>
        <div class='col-lg-4 col-md-7 order-lg-4 order-2'>
            <div class='marketplace-item item-2 mt-15'>
            <img
                src="{{ asset('public/assets/images/features/wallet.svg')}}"
                alt='icon'
            />
            <h3 class='title'>Support 150 + cryptocurrencies</h3>
            <p>
                We are supporting over most of published cryptocurrencies.
            </p>
            </div>
        </div>
        <div class='col-lg-4 col-md-7 order-lg-5 order-4'>
            <div class='marketplace-item item-2 mt-15'>
            <img
                src="{{ asset('public/assets/images/features/cryptofx.svg')}}"
                alt='icon'
            />
            <h3 class='title'>50+ fiat method to buy/sell crypto</h3>
            <p>
                You and your customers can buy the crypto using most of
                payment method such as CC,Apple Pay, Google Pay, Stripe, etc.
            </p>
            </div>
        </div>
        <div class='col-lg-4 col-md-7 order-lg-6 order-6'>
            <div class='marketplace-item item-2 mt-15'>
            <img
                src="{{ asset('public/assets/images/features/saving.svg')}}"
                alt='icon'
            />
            <h3 class='title'>Mobile App</h3>
            <p>We provide beautiful mobile app for your comfortable.</p>
            </div>
        </div>
        </div>
        <div class='row'>
        <div class='col-lg-12'>
            <div class='marketplace-btn text-center'>
            <ul>
                <li>
                <a class='main-btn' href='/register'>
                    Join Now
                </a>
                </li>
                <li>
                <a class='main-btn main-btn-2' href='/login'>
                    Check your reports
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</section>
<section class='brand-area' id='partner'>
    <div class='container'>
        <div class='row justify-content-center'>
        <div class='col-lg-6'>
            <div class='section-title text-center'>
            <span>Our Partners & Platform Backers</span>
            <h3 class='title'>Our Ambassador to the World!</h3>
            </div>
        </div>
        </div>
        <div class='row justify-content-center'>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/blockcypher.svg')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/coingate.png')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/gem.svg')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/jubiter.svg')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        </div>
        <div class='row justify-content-center mt-70'>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/MoonPay.svg')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/wirex.svg')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/gocrypto.svg')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        <div class='col-lg-2 col-md-3 col-sm-6 col-6'>
            <div class='brand-item mt-30'>
            <a href='#'>
                <img
                src="{{ asset('public/assets/images/logos/wyre.svg')}}"
                alt='brand'
                />
            </a>
            </div>
        </div>
        </div>
    </div>
</section>
<section class='contact-area' id='contact'>
    <div class='container'>
        <div class='row justify-content-center'>
        <div class='col-lg-6'>
            <div class='section-title text-center'>
            <span>get in touch with us</span>
            <h3 class='title'>Contact Raplex Today</h3>
            <p>
                Have any question? Write to us and we’ll get back to you
                shortly.
            </p>
            <ul>
                <li>
                <a href='tel:+18135637145'>
                    <img
                    src="{{ asset('public/assets/images/icon/icon-7.png')}}"
                    alt='icon'
                    /> 
                    +1 2678107770
                </a>
                </li>
                <li>
                <a href='mailto:info@Raplex.com'>
                    <img
                    src="{{ asset('public/assets/images/icon/icon-8.png')}}"
                    alt='icon'
                    />
                    support@raplex.io
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <div class='row justify-content-center'>
        <div class='col-lg-8'>
            <form action='#'>
            <div class='contact-box'>
                <div class='row'>
                <div class='col-lg-6'>
                    <div class='input-box mt-10'>
                    <input type='text' placeholder='Name' />
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class='input-box mt-10'>
                    <input type='text' placeholder='Email Address' />
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class='input-box mt-10'>
                    <input type='text' placeholder='Phone' />
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class='input-box mt-10'>
                    <input type='text' placeholder='Subject' />
                    </div>
                </div>
                <div class='col-lg-12'>
                    <div class='input-box mt-10 text-center'>
                    <textarea
                        name='#'
                        id='#'
                        cols='30'
                        rows='10'
                        placeholder='Message'
                    ></textarea>
                    <button type='submit' class='main-btn'>
                        send message <i class='fal fa-arrow-right'></i>
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</section>


@endsection

@section('script')
<script>
    $('.carousel').carousel({
        interval: 0
    })

    $( ".swiper-external-switcher--item" ).click(function() {
        $( ".swiper-slide-thumb-active" ).removeClass("swiper-slide-thumb-active");
        $(this).addClass("swiper-slide-thumb-active");
    });

    var x_start=0;
    var x_last=0;

    $('#myCarousel').on('slide.bs.carousel', function (e) {
        // do something...
        $( ".swiper-slide-thumb-active" ).removeClass("swiper-slide-thumb-active");
        
        $('.swiper-external-switcher--item[data-slide-to='+e.to+']').addClass("swiper-slide-thumb-active");                       
    })
</script>
@endsection
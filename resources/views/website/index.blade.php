@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Easy Steps -->
            <section class="overview-block-ptb6 banner-stars action-box white-bg">
                <div class="container">
                    <div class="row h-80">
                        <div class="col-lg-9 col-md-12 text-muted">
                            <h3 class="text-muted mb-3 " style="font-family:'Poppins';">Do You know Forex Trade?</h3>
                            <div>
                                <p style="font-family:'Comfortaa SemiBold';">Forex trading can be a complex and exciting opportunity to grow your wealth. At CryptoFx Stock Trade, we offer expert
                                guidance and cutting-edge tools to help you navigate the market with confidence.</p>
                            </div>
                            <div class="triangle1"></div>
                        </div>
                        <div class="col-lg-3 col-md-12 text-end align-self-center">
                            <a class="button mt-2"
                                href="javascript:void(0)">
                                <span class="button-inner-box">
                                    <span class="text-btn" style="font-family: 'Comfortaa SemiBold';">Read More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div id='stars'></div>
                <div id='stars2'></div>
                <div id='stars3'></div>
            </section>


            <section class="overview-block-ptb" id="about-us">
                <div class="container">
                    <div class="row flex-row-reverse ">
                        <div class="col-lg-6 align-self-center">
                            <img src="{{ asset('frontend/images/banner/trade_chart.png') }}" class="img-fluid" alt="" style="padding-top:35px">
                        </div>
                        <div class="col-lg-6 align-self-center mt-5 mt-lg-0">

                            <div class="custom-card-body">
                                <div class="heading-title left">
                                    <h3>About us</h3>
                                    <h6>Do you know CryptoFx Stock Trade</h6>
                                </div>
                                <p class="about-text" style="font-family: 'Comfortaa'; text-align:justify">
                                    CryptoFx Stock Trade is a privately-owned investment management company that was Established in 2013 by Digital
                                    Currency
                                    Group, CryptoFx Stock Tradeis a trusted authority on digital currency investing as a mutual fund company. CryptoFx
                                    Trading
                                    offers a range of services including fund distribution and investment advice, wealth management, life
                                    insurance.<br />

                                    Access and insight for a changing world Digital currencies are poised to radically transform our financial system,
                                    but
                                    it won’t happen overnight. At CryptoFx Tradings, we believe investors deserve an established, trusted, and
                                    accountable
                                    partner that can help them navigate the gray areas of digital currency investing. That’s why we are building
                                    transparent, familiar investment products that facilitate access to this burgeoning asset class, and provide the
                                    springboard to invest in the new digital currency-powered “internet of money.”
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </section>

            <!-- About Us -->
            <!--================================
                        Our Great Features -->
            <section id="services" class="overview-block-pt iq-great-features2 iq-hide">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="heading-title text-center">
                                <h2 class="title iq-tw-6" style="font-family: 'Comfortaa SemiBold';">Why Trade with CryptoFx Stock Trade</h2>
                                <p class="py-2" style="font-family: 'Comfortaa SemiBold';">CryptoFx Stock Trade lets you deposit, withdraw and manage your cryptocurrency
                                    investment portfolio using
                                    a range of simple and easy-to-use features. We’re trusted by customers in more than 145
                                    countries around
                                    the world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row iq-mt-40">
                        <div class="col-lg-4 col-md-6 col-sm-12 right-side">
                            <div class="iq-feature1 iq-pt-60">
                                <div class="left brd"> <i class="fa fa-desktop brd"></i> </div>
                                <div class="right">
                                    <h5 class="iq-tw-6 iq-mb-10">CUSTOMIZABLE INTERFACE</h5>
                                    <p style="font-family: 'Comfortaa SemiBold';">Customize the platform to make it fit better to your needs — from chart type to color
                                        theme.</p>
                                </div>
                            </div>
                            <div class="iq-feature1 iq-pt-60">
                                <div class="left brd"> <i class="fa fa-money brd"></i> </div>
                                <div class="right">
                                    <h5 class="iq-tw-6 iq-mb-10">CONVENIENT WITHDRAWALS</h5>
                                    <p style="font-family: 'Comfortaa SemiBold';">Withdraw your money in an instant using a wide range of available payment systems.
                                    </p>
                                </div>
                            </div>
                            <div class="iq-feature1 iq-pt-60">
                                <div class="left brd"> <i class="fa fa-clock-o brd"></i> </div>
                                <div class="right">
                                    <h5 class="iq-tw-6 iq-mb-10">SUPPORT 24/7</h5>
                                    <p style="font-family: 'Comfortaa SemiBold';">A team of professionals speaking your mother tongue are always here to support you.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 d-none d-md-block">
                            <img alt="" src="{{ asset('frontend/images/blog/06.png') }}">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="iq-feature1 iq-pt-60">


                                  <div class="left brd"> <i class="fa fa-trophy brd"></i> </div>

                                <div class="right">
                                    <h5 class="iq-tw-6 iq-mb-10">AWARD-WINNING PLATFORM</h5>
                                    <p style="font-family: 'Comfortaa SemiBold';">Award-winning software recognized and praised by the most respected experts of the
                                        industry.</p>
                                </div>
                            </div>
                            <div class="iq-feature1 iq-pt-60">
                                    <div class="left brd"> <i class="fa fa-gift brd"></i> </div>
                                <div class="right">
                                    <h5 class="iq-tw-6 iq-mb-10">AFFILATE PROGRAM</h5>
                                    <p style="font-family: 'Comfortaa SemiBold';">Earn bonus points when you refer someone to CryptoFx Trading</p>
                                </div>
                            </div>
                            <div class="iq-feature1 iq-pt-60">
                                <div class="left brd"> <i class="fa fa-lock brd"></i> </div>
                                <div class="right">
                                    <h5 class="iq-tw-6 iq-mb-10">SAFE & SECURED</h5>
                                    <p style="font-family: 'Comfortaa SemiBold';">Your investment are 100% safe and secured.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================================
                        Our Great Features -->
            <!-- About Us -->


            <section id="howitworks" class="iq-product-description overview-block-pt">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="heading-title"> <small class="iq-font-green">How it Works</small>
                                        <h2 class="title iq-tw-6">Three easy way to start</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row iq-mt-100">
                                <div class="col-lg-4">
                                    <div class="iq-fancy-box text-sm-center">
                                        <div class="fancy-icon"> <img class="img-fluid" src="{{ asset('frontend/images/services/icon/08.png') }}" alt=""> </div>
                                        <div class="fancy-content">
                                            <h5 class="iq-tw-7">Create your wallet</h5>
                                            <p class="py-3" style="font-family: 'Comfortaa'; font-size:14px">You can create your personal wallet by registering with us. </p>
                                            {{-- <a class="button iq-mt-20" href="register" role="button">Join us</a> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="iq-fancy-box text-sm-center">

                                        <div class="fancy-icon"> <img class="img-fluid" src="{{ asset('frontend/images/shop/05.jpg') }}" alt=""> </div>
                                        <div class="fancy-content">
                                            <h5 class="iq-tw-7">Fund your Wallet</h5>
                                            <p class="py-3" style="font-family: 'Comfortaa'; font-size:14px">For you to be able to select any of the investment plans you must have funded your
                                                wallet.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="iq-fancy-box text-sm-center">
                                        <div class="fancy-icon"> <img class="img-fluid" src="{{ asset('frontend/images/services/icon/01-1.png') }}" alt=""> </div>
                                        <div class="fancy-content">
                                            <h5 class="iq-tw-7">Start your Investment</h5>
                                            <p style="font-family: 'Comfortaa'; font-size:13px">After funding your wallet, select a suitable investment plan, start investing and
                                                recieve earnings.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


        <div class="container mb-5" id="investment">
            <div class="heading-title">
                <h2 class="title iq-tw-6">Investment Plans</h2>
            </div>
            <p class="text-center" style="font-family: 'Comfortaa SemiBold';">Our payouts are fully Automatic, You can make withdrawal when due, Our system
                automatically sends your profit to your local wallet so it can be easily converted into your
                currency, please always make sure your account has valid information.</p>
            <div class="row">
                <!-- Pricing Tables Starts -->
                <div class="col-md-3 iq-fancy-box fancy-content text-center prec" style="padding: 1.5rem;">


                    <h5>STANDARD PLAN <span>$250 and more </span></h5>
                    <div class="price">

                        <span class="value">0.83%</span><br>
                        <small>PER HOUR</small>
                    </div>

                    <a href="register" class="btn btn-primary sprim">INVEST NOW</a>


                </div>
                <div class="col-md-3 iq-fancy-box fancy-content text-center prec" style="padding: 1.5rem;">


                    <h5>PREMIUM PLAN <span>$6,000.00 and more </span></h5>
                    <div class="price">

                        <span class="value">1.25%</span><br>
                        <small>PER HOUR</small>
                    </div>

                    <a href="register" class="btn btn-primary sprim">INVEST NOW</a>

                </div>
                <div class="col-md-3 iq-fancy-box fancy-content text-center prec" style="padding: 1.5rem;">


                    <h5>ULTIMATE PLAN <span>$15,000.00 and more </span></h5>
                    <div class="price">

                        <span class="value">1.7%</span><br>
                        <small>PER HOUR</small>
                    </div>

                    <a href="register" class="btn btn-primary sprim">INVEST NOW</a>


                </div>
                <div class="col-md-3 iq-fancy-box fancy-content text-center prec" style="padding: 1.5rem;">

                    <h5>RETIREMENT PLAN <span>$20,000.00 and more </span></h5>
                    <div class="price">

                        <span class="value">2.1%</span><br>
                        <small>PER HOUR</small>
                    </div>

                    <a href="register" class="btn btn-primary sprim">INVEST NOW</a>

                </div>

            </div>

        </div>





        <!-- Recent investment and withdrawal -->

        <section id="contact">
            <div class="row text-center">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="">RECENT DEPOSIT AND WITHDRAWAL</h2>
                    </div>
                </div>
            </div>
            <div class="container wow fadeInUp mt-5" style="visibility: visible; animation-name: fadeInUp;">
                <div class="row">
                    <div class="col-md-6">

                        <!-- Tabs with icons on Card -->
                        <div class="card card-nav-tabs">
                            <div class="alert alert-success">
                                <h3><i class="fa fa-plus" aria-hidden="true"></i> Latest Deposits</h3>
                            </div>
                            <div class="card-content">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="deposit">
                                        <div class="table-responsive" style="height:400px; overflow-y:auto; overflow-x:auto;">
                                            <marquee direction="up" height="100%">
                                                <table class="table" style="background-color: #000;">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Amount(USD)</th>
                                                            <th class="text-center">Wallet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$10,000.00</td>
                                                            <td class="text-center">
                                                                3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$24,100.00</td>
                                                            <td class="text-center">
                                                                f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-success btn-sm"><span
                                                                        class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$4,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$500</td>
                                                            <td class="text-center">
                                                                00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$240,000</td>
                                                            <td class="text-center">
                                                                b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$17,000</td>
                                                            <td class="text-center">
                                                                1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$21,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$6,000</td>
                                                            <td class="text-center">
                                                                797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$23,000</td>
                                                            <td class="text-center">
                                                                2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$5,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">5,000</td>
                                                            <td class="text-center">
                                                                15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$18,000</td>
                                                            <td class="text-center">
                                                                66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$2,500</td>
                                                            <td class="text-center">
                                                                ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$43,000</td>
                                                            <td class="text-center">
                                                                aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$10,000.00</td>
                                                            <td class="text-center">
                                                                3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$24,100.00</td>
                                                            <td class="text-center">
                                                                f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-success btn-sm"><span
                                                                        class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$4,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$500</td>
                                                            <td class="text-center">
                                                                00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$240,000</td>
                                                            <td class="text-center">
                                                                b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$17,000</td>
                                                            <td class="text-center">
                                                                1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$21,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$6,000</td>
                                                            <td class="text-center">
                                                                797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$23,000</td>
                                                            <td class="text-center">
                                                                2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$5,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">5,000</td>
                                                            <td class="text-center">
                                                                15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$18,000</td>
                                                            <td class="text-center">
                                                                66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$2,500</td>
                                                            <td class="text-center">
                                                                ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$43,000</td>
                                                            <td class="text-center">
                                                                aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs with icons on Card -->
                    </div>
                    <div class="col-md-6">

                        <!-- Tabs with icons on Card -->
                        <div class="card card-nav-tabs">
                            <div class="alert alert-danger">
                                <h3><i class="fa fa-minus" aria-hidden="true"></i> Latest Withdraws</h3>
                            </div>
                            <div class="card-content">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="deposit">
                                        <div class="table-responsive" style="height:400px; overflow-y:auto; overflow-x:auto;">
                                            <marquee direction="down" height="100%">
                                                <table class="table" style="width: 100%; background-color:#000;">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Amount(USD)</th>
                                                            <th class="text-center">Wallet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$10,000.00</td>
                                                            <td class="text-center">
                                                                3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$24,100.00</td>
                                                            <td class="text-center">
                                                                f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-success btn-sm"><span
                                                                        class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$4,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$500</td>
                                                            <td class="text-center">
                                                                00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$240,000</td>
                                                            <td class="text-center">
                                                                b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$17,000</td>
                                                            <td class="text-center">
                                                                1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$21,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$6,000</td>
                                                            <td class="text-center">
                                                                797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$23,000</td>
                                                            <td class="text-center">
                                                                2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$5,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">5,000</td>
                                                            <td class="text-center">
                                                                15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$18,000</td>
                                                            <td class="text-center">
                                                                66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$2,500</td>
                                                            <td class="text-center">
                                                                ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$43,000</td>
                                                            <td class="text-center">
                                                                aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$10,000.00</td>
                                                            <td class="text-center">
                                                                3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$24,100.00</td>
                                                            <td class="text-center">
                                                                f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-success btn-sm"><span
                                                                        class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$4,000.00</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$500</td>
                                                            <td class="text-center">
                                                                00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$240,000</td>
                                                            <td class="text-center">
                                                                b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$17,000</td>
                                                            <td class="text-center">
                                                                1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$21,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$6,000</td>
                                                            <td class="text-center">
                                                                797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$23,000</td>
                                                            <td class="text-center">
                                                                2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$51,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$5,000</td>
                                                            <td class="text-center">
                                                                8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">5,000</td>
                                                            <td class="text-center">
                                                                15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$18,000</td>
                                                            <td class="text-center">
                                                                66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$2,500</td>
                                                            <td class="text-center">
                                                                ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn
                                            btn-success btn-sm"><span class="btn-label"><i class="fa
                                            fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                            <td class="text-center">$9,000</td>
                                                            <td class="text-center">
                                                                376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><button class="btn btn-warning btn-sm"><span
                                                                        class="btn-label"><i class="fa fa-warning"
                                                                            aria-hidden="true"></i></span>Pending</button>
                                                            </td>
                                                            <td class="text-center">$43,000</td>
                                                            <td class="text-center">
                                                                aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs with icons on Card -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Bitcoin Charts -->
        <!-- Why us -->

        <!-- Why us -->
        <!-- Contact Us -->

        <!-- Contact Us -->
        <!-- Team -->
        <section class="overview-block-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="subtitle d-flex align-items-center  justify-content-center iq-font-yellow">
                            <svg width="10" class="me-2" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="4" height="4" fill="currentColor"></rect>
                                <rect y="6" width="4" height="4" fill="currentColor"></rect>
                                <rect x="6" width="4" height="4" fill="currentColor"></rect>
                                <rect x="6" y="6" width="4" height="4" fill="currentColor"></rect>
                            </svg>

                            <small class="text text-uppercase fw-bold iq-font-yellow">
                                Testimonials</small>
                        </div>
                        <div>
                            <h2 class="title iq-mb-25">Our Investors</h2>
                            <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's
                                standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection


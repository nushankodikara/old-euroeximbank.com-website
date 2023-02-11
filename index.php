<?php include('subscribe-mail.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Euro Exim Bank - The best global trade finance bank, specialized to have the quickest processing in issuance and relay of Letters of Credit, Stand-By Letters of Credit and Bank Guarantees.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Euro Exim Bank - Reliable LC, BG, & SBLC Provider">
    <meta property="og:keywords" content="Euro Exim Bank, SBLC, Letter of Credit, BG">
    <meta property="og:description" content="Expand your business with Euro Exim Bank Trade Finance instruments- Letter of Credits, SBLCs, Bank Guarantee, SBLC and Proof of Funds">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php include('gtag-head.php'); ?>
    <!-- Title -->
    <title>Euro Exim Bank | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="fav-icon/site-icon.png">

    <!-- Stylesheet -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="style.css">

<!-- new -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        #videoModal .modal-dialog {
            width: 100% !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            max-width: none !important;
        }

        #videoModal .modal-content {
            height: auto !important;
            min-height: 100% !important;
            border-radius: 0 !important;
            background-color: white !important
        }

        #videoModal .modal-header {
            border-bottom: 1px solid #9ea2a2 !important;
        }

        #videoModal .modal-footer {
            border-top: 1px solid #9ea2a2 !important;
        }

        .single-service-area .text img {
            width: 35%;
        }

        .single-features-area a img {
            width: 90%;
            height: 350px;
            object-fit: cover;
            text-align: center;
            display: flex;
            justify-content: center;
            margin: auto;
        }

        /* Make the carousel fully responsive - start */
        .carousel-inner img {
            height: auto;
        }

        #carousel-spacer {
            background-color: #06283A;
        }

        #top-carousel-container{
            margin:0;
            padding:0;
            position: absolute;
            top: 165px;
        }

        #top-carousel-container #demo{
            width:100vw;
        }

        #top-carousel-container #demo ul{
            margin-bottom: 0;
        }
        /* Make the carousel fully responsive - end */

        /* 2022-09-28 Bug Fixes */
        .btn {
            background: #fff;

        }

        .btn:hover {
            color: #fff;
            
        }

        .awardName {
            height: 150px;
            display: grid;
            place-items: center;
        }

        .partner-logo {
            width: 15rem;
            border-radius: 50%;
        }
    </style>
    <script>

        // Populate the carousel - start
        window.onload = () => {

            let carousel_template = (image,link="#",active,count, alt="Banner") =>{
                return `
                <div class="carousel-item ${active?'active':''}" >
                        <a href="${link}" target="_blank"> <img style="width:100%;" id="tci${count}" src="${image}" alt="${alt}"></a>
                    <div class="carousel-caption" >
                        <!-- <p style="color:#FEBA38;">This is the sample text. This is the sample text. This is the sample text. This is the sample text. This is the sample text. This is the sample text. This is the sample text. This is the sample text. This is the sample text. </p> -->
                    </div>   
                </div>`;
            }

            let slider_template = (count, active) =>{
                return `<li data-target="#demo" data-slide-to="${count}" class="${active?'active':''}"></li>`;
            }
            
            let desktopBanners = [
                {
                    image:"desktop_banners/4.jpg",
                    link:"https://ceo-insight.com/innovation/africa-a-burgeoning-region-for-tech-growth/",
                    alt:""
                },
                {
                    image:"desktop_banners/6.jpg",
                    link:"https://euroeximbank.com/assets/publications/promise-and-challenge-aI-in-the-trade=finance-industry-the-european-business-review.pdf",
                    alt:""
                },
                {
                    image:"desktop_banners/11.jpg",
                    link:"https://euroeximbank.com/assets/publications/Moving_forward_with_EuroEximBank_The_European_Magazine.pdf",
                    alt:""
                },
                {
                    image:"desktop_banners/5.jpg",
                    link:"https://ceo-insight.com/profiles/global-reliance/",
                    alt:""
                },
                {
                    image:"desktop_banners/1.jpg",
                    link:"https://euroeximbank.com/assets/publications/WORLD%20COMMERCE.pdf",
                    alt:""
                },
            ]

            let mobileBanners = [
                {
                    image:"desktop_banners/7.jpg",
                    link:"https://ceo-insight.com/innovation/africa-a-burgeoning-region-for-tech-growth/",
                    alt:""
                },
                {
                    image:"desktop_banners/16.jpg",
                    link:"https://euroeximbank.com/assets/publications/promise-and-challenge-aI-in-the-trade=finance-industry-the-european-business-review.pdf",
                    alt:""
                },
                {
                    image:"desktop_banners/11.jpg",
                    link:"https://euroeximbank.com/assets/publications/Moving_forward_with_EuroEximBank_The_European_Magazine.pdf",
                    alt:""
                },
                {
                    image:"desktop_banners/13.jpg",
                    link:"https://ceo-insight.com/profiles/global-reliance/",
                    alt:""
                },
                {
                    image:"desktop_banners/4.jpg",
                    link:"https://euroeximbank.com/assets/publications/WORLD%20COMMERCE.pdf",
                    alt:""
                },
            ]

            let bannerHTML = ""
            let sliderHTML = ""

            if( screen.width > 520 ){
                for (i in desktopBanners){
                    bannerHTML += carousel_template(desktopBanners[i].image, desktopBanners[i].link, i==0,i, desktopBanners[i].alt);
                    sliderHTML += slider_template(i, i==0);
                }
            } else {
                for (i in mobileBanners){
                    bannerHTML += carousel_template(mobileBanners[i].image, mobileBanners[i].link, i==0,i, mobileBanners[i].alt);
                    sliderHTML += slider_template(i, i==0);
                }
            }

            // if (screen.width > 728 ){
            //     //update css style of id demo
            //     document.getElementById("demo").style.width = "600px";
            // } else {
            //     document.getElementById("demo").style.width = "350px";
            // }

            document.getElementById("demo-banners").innerHTML = bannerHTML;
            document.getElementById("demo-indicators").innerHTML = sliderHTML;

            // Changing Spacer sizes
            document.getElementById("carousel-spacer").style.height = `${document.getElementById("top-carousel-container").clientHeight}px`;
            
            setInterval(() => {
                document.getElementById("carousel-spacer").style.height = `${document.getElementById("top-carousel-container").clientHeight}px`;
            }, 200);
        }

        // Populate the carousel - end
    </script>
    
</head>

<body >

    <?php include('gtag-body.php'); ?>
    <?php require('header.html') ?>
    <div class="container" id="top-carousel-container" style="display:grid; place-items:center; width:100vw;max-width:100vw;">
        <div id="demo" class="carousel slide" data-ride="carousel" style="">
            <ul id="demo-indicators" class="carousel-indicators">
                
            </ul>
            <div id="demo-banners" class="carousel-inner bg-overlay">
                
            </div>
        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>-->
        </div>
    </div>
<div id="carousel-spacer"></div>
    <!-- ##### Hero Area Start ##### -->





    

<!-- <div id="owl-demo" class="owl-carousel owl-theme">
<div class="col-md-10">       
  <div class="item" >
  <div class="container">
            <div class="row">
            
                    <img src="img/publication/4.png" alt="Trade finance company">
                    
                
                
            </div>
            </div>
  </div>
  </div>
  <div class="col-md-10"> 
  <div class="item">
  <div class="container">
            <div class="row">
            
                    <img src="img/publication/2.png" alt="Trade finance company">
                
                
            </div>
            </div>
  </div>
  </div>
  <div class="col-md-10"> 
  <div class="item">
  <div class="container">
            <div class="row">
            
                    <img src="img/publication/3.png" alt="Trade finance company">
                
                
            </div>
            </div>
  </div>
  </div>
  <div class="col-md-10"> 
  <div class="item">
  <div class="container">
            <div class="row">
            
                    <img src="img/publication/5.png" alt="Trade finance company">
                
                
            </div>
            </div>
  </div>
  </div>
  <div class="col-md-10"> 
  <div class="item">
  <div class="container">
            <div class="row">
            
                    <img src="img/publication/7.png" alt="Trade finance company">
                    <a href="#features" class="btn credit-btn mt-50" data-animation="fadeInUp"
                                    data-delay="700ms">Discover</a>
                
                
            </div>
            </div>
            
        </div>
        </div>
</div> -->
   
    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/homepage/1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInUp" data-delay="300ms"><span>Helping you
                                        stay ahead
                                        of the
                                        GAMES</span></h2>
                                <p data-animation="fadeInUp" data-delay="500ms">We aim to accelerate your import &
                                    export business transactions and connect you to new opportunities.</p>
                                <a href="#features" class="btn credit-btn mt-50" data-animation="fadeInUp"
                                    data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/homepage/letter-of-credit.png);"></div>

                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInDown" data-delay="300ms"><span>Letter of Credit</span></h2>
                                <p data-animation="fadeInDown" data-delay="500ms">In international transactions, LCs are used to ensure that payment is obtained when the buyer and seller are unfamiliar with each other and operate in separate countries.</p>
                                <a href="letter-of-credit.php" class="btn credit-btn mt-50" data-animation="fadeInDown"
                                    data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-du-indicator"></div>
            </div>
            
            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/homepage/5.jpg);"></div>

                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInDown" data-delay="300ms"><span>Standby Letter of Credit</span></h2>
                                <p data-animation="fadeInDown" data-delay="500ms">A standby letter of credit (SBLC) is a payment guarantee issued by a bank on behalf of a client that acts as a "payment of last resort" if the client fails to fulfill a contractual obligation to a third party.</p>
                                <a href="standby-letter-of-credit.php" class="btn credit-btn mt-50" data-animation="fadeInDown"
                                    data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-du-indicator"></div>
            </div>

             <!--Single Slide -->
            <div class="single-slide bg-img">
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/homepage/bank-guarntee.png);"></div>

                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInDown" data-delay="300ms"><span>Bank Guarantee</span></h2>
                                <p data-animation="fadeInDown" data-delay="500ms">A bank guarantee is a commitment made by a lending company to cover a loss if a borrower (their customer) defaults on a third-party loan.</p>
                                <a href="bank-guarantee.php" class="btn credit-btn mt-50" data-animation="fadeInDown"
                                    data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-du-indicator"></div>
            </div>
            
            
            <!-- Single Slide -->
            <!--<div class="single-slide bg-img">-->
            <!--    <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/homepage/5.jpg);"></div>-->

            <!--    <div class="container h-100">-->
            <!--        <div class="row h-100 align-items-center justify-content-center">-->
            <!--            <div class="col-12 col-lg-9">-->
            <!--                <div class="welcome-text text-center">-->
            <!--                    <h2 data-animation="fadeInDown" data-delay="300ms"><span>Proof of Funds</span></h2>-->
            <!--                    <p data-animation="fadeInDown" data-delay="500ms">Euro Exim Bank Ltd in both St. Lucia and London are authorized to issue a Proof of Funds letter, based on availability and legality of the funds to be used in a transaction.</p>-->
            <!--                    <a href="proof-of-funds.php" class="btn credit-btn mt-50" data-animation="fadeInDown"-->
            <!--                        data-delay="700ms">Discover</a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="slide-du-indicator"></div>-->
            <!--</div>-->

            <!-- Single Slide -->
            <!--<div class="single-slide bg-img">-->
                <!-- Background Image-->
            <!--    <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/homepage/1.jpg);"></div>-->
                <!-- Welcome Text -->
            <!--    <div class="container h-100">-->
            <!--        <div class="row h-100 align-items-center justify-content-center">-->
            <!--            <div class="col-12 col-lg-9">-->
            <!--                <div class="welcome-text text-center">-->
            <!--                    <h2 data-animation="fadeInUp" data-delay="300ms"><span>Financial Instrument Form</span>-->
            <!--                    </h2>-->
            <!--                    <p data-animation="fadeInUp" data-delay="500ms">Apply for <br> Letter of Credit <br>-->
            <!--                        Standby Letter of Credit <br> Bank Guarantee <br> Performance Bond</p>-->
            <!--                    <a href="trade-finance-instruments.php" class="btn credit-btn mt-30"-->
            <!--                        data-animation="fadeInUp" data-delay="700ms">Discover</a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
                <!-- Slide Duration Indicator -->
            <!--    <div class="slide-du-indicator"></div>-->
            <!--</div>-->

            <!-- Single Slide -->
            <!-- <div class="single-slide bg-img">
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/homepage/5.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInDown" data-delay="300ms"><span>Prestige Plus</span></h2>
                                <p data-animation="fadeInDown" data-delay="500ms">Open your account in a day <br></p>
                                <a href="smartbankingapp"
                                    class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-du-indicator"></div>
            </div> -->

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Features Area Start ###### -->
    <!-- <section id="features" class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="section-heading">
                            <div class="line"></div>
                            <h2>Our<br>
                                Features</h2>
                        </div>
                        <h6>Euro Exim Bank has the quickest issuance
                            procedures, ensuring that you
                            spend minimum time on
                            process and documentation
                            than through other institutions. </h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="smartbankingapp"><img src="img/homepage/3.jpg" alt="Trade finance company"></a>
                        <a href="smartbankingapp">
                            <h5>Download EEB Smart Banking App</h5>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="https://www.euroeximbank.com/eeb/"><img src="img/homepage/2.jpg"
                                alt="Trade finance company"></a>
                        <a href="https://www.euroeximbank.com/eeb/">
                            <h5>Financial Instrument
                                Application Form</h5>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="smartbankingapp"><img
                                src="img/homepage/4.jpg" alt="Trade finance company"></a>
                        <a href="smartbankingapp">
                            <h5>Apply Now <br> Prestige Plus
                            </h5>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="features" class="features-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-12 text-center">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <div class="line text-center"></div>
                            <h2>Our
                                Features</h2>
                        </div>
                        <h6>Euro Exim Bank has one of the quickest issuance processes due to its streamlined workflow,
                             underpinned by blockchain,
                             AI, and innovative technologies.</h6>
                    </div>
                </div>
                
                <!--<div class="col-12 col-sm-6 col-lg-6">-->
                <!--    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">-->
                <!--        <a href="smartbankingapp"><img src="img/homepage/3.jpg" alt="Trade finance company"></a>-->
                <!--        <a href="smartbankingapp">-->
                <!--            <h5 class="mt-30 mb-30 text-center">Download EEB Smart Banking App</h5>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-12 col-sm-6 col-lg-6 d-none" style='margin: auto;'>
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                        <a href="https://www.euroeximbank.com/eeb/"><img src="img/homepage/2.jpg" alt="Trade finance company"></a>
                        <a href="https://www.euroeximbank.com/eeb/">
                            <h5 class="mt-30 mb-30 text-center">Financial Instrument
                                Application Form</h5>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="smartbankingapp"><img
                                src="img/homepage/4.jpg" alt="Trade finance company"></a>
                        <a href="smartbankingapp">
                            <h5>Apply Now <br> Prestige Plus
                            </h5>

                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ##### Features Area End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/homepage/5.jpg);"></div>

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="section-heading">
                    <div class="line-white"></div>
                <!-- </div>
                <h2>Working With Ripple</h2>
                <p><a href="https://test.euroeximbank.com">Euro Exim Bank</a> has joined Ripple, connecting banks, payment providers and digital asset
                    exchanges
                    via <a href="https://blog.euroeximbank.com/2022/05/19/blockchain-can-restore-trust-in-international-trade/">RippleNet</a> to provide clients one frictionless experience to send money globally.</p>
                <p>Operating collaboratively with Ripple and selected counterparts, we are implementing
                    both <a href="https://blog.euroeximbank.com/2020/08/24/euro-exim-bank-transforming-global-payments-trade-with-ripple/">xCurrent</a>
                    [payments processing solution] and xRapid [on-demand liquidity solution] building on its
                    extensive
                    technology capabilities and blockchain expertise in trading systems.</p> -->

                <h2>xCurrent</h2>
                <p>Institutions are able to instantly settle cross-border payments with end-to-end
                    tracking. Payment
                    details
                    are confirmed prior to initiating the transaction through secure real-time messaging and
                    confirmed
                    with
                    delivery information once it settles.</p>

                <h2>ODL</h2>
                <p>This system will use underlying XRP digital assets to minimize liquidity costs, enabling
                    local
                    recipients to
                    be paid in local currency, assisting not only secure flow of money but also reduce cash
                    flow
                    restrictions.</p>
            </div>
            <!-- <a href="#services" class="btn credit-btn btn-3 box-shadow">Read More</a> -->
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms"
        style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>Euro Exim Bank is Working With Ripple</h4>
                        </div>
                        <div class="cta-btn">
                            <a data-toggle="modal" data-target="#videoModal" href="#"
                                class="btn credit-btn btn-3 box-shadow">Watch <i style="padding-left:10px"
                                    class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ##### video section ###### -->



    <div class="modal fade modal-fullscreen" id="videoModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center box-shadow3">
                            <video id="myVideo" width="770" height="450" poster="img/videos/video-cover.png" controls>
                                <source src="img/videos/euro_exim_bank_is_working_with_ripple.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <ul class="list list-unstyled">
                                <li><a href="https://www.tradefinanceglobal.com/posts/euro-exim-graham-bright-xcurrent-xrapid-ripple-interview/"
                                        target="_blank">The Nirvana of Borderless Trade? An Interview with Euro Exim
                                        Bank</a>
                                </li>

                                <li><a href="https://coindoo.com/euro-exim-bank-integrates-ripples-xrapid-solution/"
                                        target="_blank">Euro
                                        Exim Bank Integrates Ripple’s xRapid Solution</a></li>
                                <li><a href="https://dailyhodl.com/2019/02/03/ripple-partner-euro-exim-bank-successfully-integrates-xrp-powered-xrapid/"
                                        target="_blank">Ripple Partner Euro Exim Bank Successfully Integrates
                                        XRP-Powered
                                        xRapid</a>
                                </li>
                                <li><a href="https://cryptodaily.co.uk/2019/01/ripple-euro-exim-bank-where-to-next"
                                        target="_blank">Ripple &amp;
                                        Euro Exim Bank: Where To Next?</a></li>
                                <li><a href="https://zycrypto.com/euro-exim-bank-proposes-use-of-ripples-xcurrent-for-its-new-trade-finance-system/"
                                        target="_blank">Euro Exim Bank Proposes use of Ripple’s xCurrent for its new
                                        Trade
                                        Finance
                                        System</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div onclick="pauseVid()" class="modal-footer mx-auto"
                    style=" border-top: 1px solid transparent !important;">
                    <button type="button" class="btn credit-btn" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- ##### video section ends ###### -->

    <!-- ##### Services Area Start ###### -->
    <section id="services" class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-50">
                        <div class="line"></div>
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>

            <div class="row">

 <div class="col-md-6">
                    <img src="img/service/trade_finance_instruments/lc.jpg" alt="Trade finance company">
                </div>

                <div class="col-md-6">
                    <h5 class="mb-20" style="
    padding: 0px 15px;margin-top:20px;
">Trade FInance Instruments</h5>
                    <!-- ##### Tabs ##### -->
                    <div class="col-12 col-lg-12">
                        <div class="credit-tabs-content">
                            

                            <div class="tab-content mb-100" id="myTabContent">

                                <div class="tab-pane fade  show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="credit-tab-content">
                                        <!-- Tab Text -->
                                        <div class="credit-tab-text">
                                            <p>Trade finance services are primary products of Euro Exim Bank’s business model. With our
                                experience and knowledge in trade finance industry we are ready to provide a reliable
                                and effective service for our clients international business transactions. Euro Exim
                                Bank is specialized and have the quickest issuance procedures, ensuring that you spend
                                minimum time on process and documentation than through other institutions.</p> <br>
<a href="trade-finance-instruments.php" class="btn credit-btn btn-2 box-shadow">Discover
                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                    <div class="credit-tab-content">
                                        <!-- Tab Text -->
                                        <div class="credit-tab-text">
                                            <p>Also known as Deferred Payment LC or Time LC or Term LC is a letter
                                                of
                                                credit payable at a predetermined time / future
                                                date after the conforming documents are presented.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                    <div class="credit-tab-content">
                                        <!-- Tab Text -->
                                        <div class="credit-tab-text">
                                            <p>Bank UPAS means Usance Payable at sight. Under this letter of credit,
                                                the
                                                exporter will get the payment at sight if the
                                                documents are credit compliant. The importer will be charged
                                                interest,
                                                acceptance commission and other charges as per
                                                the terms of LC for using this letter of credit.
                                                A UPAS LC is used when the exporter/beneficiary want immediate
                                                payment
                                                for his goods where the applicant may not have
                                                the facility with his bank to issue sight LC's.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12 col-md-6 col-lg-12 text-center">
                    <div class="single-service-area d-flex mb-100">
                        <div class="text">

                            <img src="img/service/corporate_banking/pre-paid-master-cards-cover.jpg"
                                alt="Trade finance company">
                            <h5 class="mt-30 mb-30">Trade FInance Instruments</h5>
                            <p class="mt-30" style="
                    width: 50%;
                    margin: auto;
                ">Trade finance services are primary products of Euro Exim Bank’s business model. With our
                                experience and knowledge in trade finance industry we are ready to provide a reliable
                                and effective service for our clients international business transactions. Euro Exim
                                Bank is specialized and have the quickest issuance procedures, ensuring that you spend
                                minimum time on process and documentation than through other institutions.</p><br>
                            <a href="trade-finance-instruments.php" class="btn credit-btn btn-2 box-shadow">Discover
                                More</a>
                        </div>
                    </div>
                </div> -->
                <!-- Single Service Area -->
                <!-- <div class="col-12 col-md-6 col-lg-12">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                            <i class="icon-profits"></i>
                        </div>
                        <div class="text">
                            <h5>Trade Finance Instruments</h5>
                            <p>Trade finance services are primary products of Euro Exim Bank’s business model. With our
                                experience and knowledge in trade finance industry we are ready to provide a reliable
                                and effective service for our clients international business transactions. Euro Exim
                                Bank is specialized and have the quickest issuance procedures, ensuring that you spend
                                minimum time on process and documentation than through other institutions.</p><br>
                            <a href="trade-finance-instruments.php" class="btn credit-btn btn-2 box-shadow">Discover
                                More</a>
                        </div>
                    </div>
                </div> -->

                <!-- Single Service Area -->
                <!-- <div class="col-12 col-md-6 col-lg-6">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon" style="font-size:45px;">
                            <i class="icon-money-1"></i>
                        </div>
                        <div class="text">
                            <h5>Corporate Banking</h5>
                            <p>Euro Exim Bank unveils its newest product, Prestige Plus savings accounts. This is
                                designed to provide flexible and
                                integrated savings solutions with ease of opening accounts from anywhere in the world.
                                These can be operated as
                                corporate savings accounts as well as personal savings accounts and access is available
                                online 24/7. We provide banking
                                with tight and appropriate due diligence and security.</p>
                            <br>
                            <a href="corporate-banking.php" class="btn credit-btn btn-2 box-shadow">Discover More</a>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
        </div>
    </section>
    <!-- ##### Services Area End ###### -->


    <section class="cta-area d-flex flex-wrap mb-100">
        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white mt-30">
            <h3 class="text-white">Mission</h3>
                <div class="line"></div>
            </div>
            <h6 class="mb-0">“We” members of Euro Exim Bank, aim at providing our clients quality financial solutions and flexibility.
                 We are a one-stop solution for corporates. We provide them solutions through innovative value-added products and services,
                  to help them to achieve sustainability. We also ensure they are aware of the strong CSR policy, regulatory compliance,
                   and environmental awareness. Our due diligence, KYC, AML, PEP, CFT and sanctions checks ensure deal integrity and guarantee 
                   of financial transaction settlement.
            </h6>

            <div class="section-heading white mt-30">
            <h3 class="text-white">Vision</h3>
                <div class="line"></div>
            </div>
            <h6 class="mb-0">We tend to provide our clients 
                highly secured and uninterrupted access through 
                our cutting-edge digital platform. We are leaders
                 in future proofed technology that embraces blockchain,
                  payment, and liquidity solutions thus benefiting our 
                  clients worldwide. We aim to provide our clients premier 
                  financial services with our top-notch technology and our 
                  professionally qualified team. 
                We have a competent team of diverse professionals with combined experience in international relations.
            </h6>

            <div class="section-heading white mt-30">
                <h3 class="text-white">Values</h3>
                <div class="line"></div>
            </div>
            <h6 class="mb-0">We believe teamwork empowers a workplace. We are really dedicated in providing our clients with prompt responses.
                 We are cost effective and time efficient. We have a synergetic network of global associates, contacts, and correspondents. 
            </h6>
        </div>
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/about-us/aboutus-parallax.jpg);">
        </div>
    </section>

    <!-- <section class="gtr homeBlock  mb-100">
        <div class="container-fluid cfi-contents" style="margin-top:30px;">
            <div class="row cfi-wrapper">

                <div class="col-md-2 ">
                    <a class="d-flex justify-content-center" href="http://cfi.co/awards/" target="_blank"><img
                            style="margin-top:-6px;" src="img/cfi.png"
                            class="img-responsive float-left cfi " alt="Trade finance company"></a>
                </div>

                <div class="col-md-10">
                    <p class="text-white ">The latest addition to Euro Exim’s financial arsenal comes from a strategic
                        partnership with
                        the XRP cryptocurrency
                        developer Ripple. As the first regulated bank to join the Ripple network, Euro Exim can
                        offer friction-free trade
                        solutions to make money move as information does in the 21st century – instantly. The
                        partnership strengthens Euro
                        Exim’s strong compliance process with enhanced authentication capabilities, as well as
                        ramping-up speed efficiency. The
                        CFI.co judging panel has recognized the bank in the past for its trade–tailored solutions
                        and strong diligence. This
                        year the judges praise the bank’s bold and savvy partnership move, enabling swift
                        transactions, reduced liquidity and
                        credit risks and minimized fund transactions. For 2019, and the second year running, the
                        judges name Euro Exim Bank as
                        the winner of the award for the Best Global Trade Services Bank"</p>
                    <p class="text-white">- Judge’s Report 2019, Capital Finance International | <a
                            href="assets/reports/eeb-report-19.pdf" class="btn link " target="_blank">Access the full
                            report here &gt;&gt;</a></p>
                </div>
            </div>
        </div>
    </section> -->



    <section id="awardSection" class="services-area section-padding-50-0" style="padding-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-50">
                        <div class="line"></div>
                        <h2>AWARDS AND
                            RECOGNITION</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-100">
                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#CFI">
                    <div class="awardName">
                        <p>CFI.CO AWARDS</p>
                    </div>
                </div>


                <!-- CFI Modal -->
                <div class="modal fade" id="CFI" tabindex="-1" role="dialog" aria-labelledby="CFIlLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="CFILabel">CFI.CO AWARDS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Winner of the highly coveted CFI.co’s
                                    Best Global Trade Services Bank award
                                    in 2018 & 2019.</p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://cfi.co/awards/banking/2019/euro-exim-bank-best-global-trade-services-bank-2019/"
                                        target="_blank">2019 - www.cfi.co</a></p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://cfi.co/awards/europe/2018/euro-exim-bank-best-global-trade-services-bank-2018/"
                                        target="_blank">2018 - www.cfi.co</a></p>
                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#IFA">
                    <div class="awardName">
                        <p>INTERNATIONAL
                            FINANCE AWARDS</p>
                    </div>
                </div>

                <!-- INTERNATIONAL
FINANCE AWARDS Modal -->
                <div class="modal fade" id="IFA" tabindex="-1" role="dialog" aria-labelledby="IFALabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="IFALabel">INTERNATIONAL
                                    FINANCE AWARDS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Awarded for the Best Trade Services
                                    Bank in Caribbean for 2019.</p>
                                    <p><a style="color:#FEBA38;font-size:14px;" href="https://awards.internationalfinance.com/award-winners/winners-of-banking-awards-2019/" target="_blank">www.awards.internationalfinance.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#MRV">
                    <div class="awardName">
                        <p>MIRROR REVIEW
                            AWARDS</p>
                    </div>
                </div>

                <!-- MIRROR REVIEW
AWARDS -->
                <div class="modal fade" id="MRV" tabindex="-1" role="dialog" aria-labelledby="MRVlLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="MRVLabel">MIRROR REVIEW
                                    AWARDS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Recognised as one of The 10 Best
                                    Financial Solution Providers to look for
                                    in 2019.</p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://www.mirrorreview.com/euro-exim-bank-providing-novel-financial-services/"
                                        target="_blank">www.mirrorreview.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#FBI">
                    <div class="awardName">
                        <p>FINANCE, BANKING &
                            INVESTOR</p>
                    </div>
                </div>

                <!-- FINANCE, BANKING &
INVESTOR -->
                <div class="modal fade" id="FBI" tabindex="-1" role="dialog" aria-labelledby="FBIlLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="FBILabel">FINANCE, BANKING &
                                    INVESTOR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Winner of the Best Global Trade
                                    Services Bank of the Year Award for
                                    2019 from FBI Magazine by Asian Voice.</p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://www.asian-voice.com/News/UK/London/Celebrating-the-new-game-changer-in-UK%E2%80%99s-economy"
                                        target="_blank">www.asian-voice.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#CVA">
                    <div class="awardName">
                        <p>THE CEO VIEWS
                            AWARDS</p>
                    </div>
                </div>

                <!-- THE CEO VIEWS
AWARDS -->
                <div class="modal fade" id="CVA" tabindex="-1" role="dialog" aria-labelledby="CVAlLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="CVALabel">THE CEO VIEWS
                                    AWARDS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Recognised as Top 50 Most Innovative
                                    Companies To Watch in 2020</p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://theceoviews.com/top-50-most-innovative-companies-to-watch-2020/" target="_blank">www.theceoviews.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#CXO">
                    <div class="awardName">
                        <p>THE CXO FORTUNE
                            AWARDS</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#GCEA">
                    <div class="awardName">
                        <p>GLOBAL CORPORATE EXCELLENCE AWARDS</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 awardDiv" data-toggle="modal" data-target="#BF">
                    <div class="awardName" >
                        <p style="padding: 39px;">THE BUSINESS FAME
                    </p>
                    </div>
                </div>
               

                <!-- THE CXO FORTUNE
AWARDS Modal -->
                <div class="modal fade" id="CXO" tabindex="-1" role="dialog" aria-labelledby="CXOlLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="CXOLabel">CFI.CO AWARDS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Recognised as 10 Most Influential
                                    Companies of the Year 2020</p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://www.thecxofortune.us/euro-exim-bank/"
                                        target="_blank">www.thecxofortune.us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="GCEA" tabindex="-1" role="dialog" aria-labelledby="CXOlLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="CXOLabel">GLOBAL CORPORATE EXCELLENCE AWARDS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Global Corporate Excellence Awards Winners 2019.</p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://www.bwmonline.com/2019-corporate-excellence-awards-winners/ "
                                        target="_blank">www.bwmonline.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="BF" tabindex="-1" role="dialog" aria-labelledby="CXOlLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:50%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="CXOLabel">THE BUSINESS FAME</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>2020's Leading Fintech Companies to Watch.</p>
                                <p><a style="color:#FEBA38;font-size:14px;" href="https://thebusinessfame.com/2020s-leading-fintech-companies-to-watch/"
                                        target="_blank">www.thebusinessfame.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Event section starts
    <section class="mb-100">
        <div class="container" id="events">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <h2>Event Participation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <img class="img-thumb" src="img/events-home/events-home1.jpg" alt="Trade finance company">
                </div>
                <div class="col-md-3">
                    <div class="card-text">
                        <p>Our first participation of trade events of the year is GTR’s annual conference
                            taking place
                            in
                            Mumbai, India on February
                            4, 2019. GTR India brings India’s trade community together for discussion,
                            debate and
                            networking
                            opportunities. We are
                            the sponsor of morning registration of the event.</p>
                    </div>
                </div>
                <div class="col-md-1">
                    <img class="img-thumb" src="img/events-home/events-home2.jpg" alt="Trade finance company">
                </div>
                <div class="col-md-3">
                    <div class="card-text">
                        <p>We attending GTR MENA 2019 from February 18-21. This event is widely recognised
                            as the most
                            comprehensive and
                            long-established trade finance gathering for the Middle East, offering an
                            unrivalled
                            platform
                            for growing awareness of
                            market challenges. We are the sponsor of morning registration of the event.</p>
                    </div>
                </div>
                <div class="col-md-1">
                    <img class="img-thumb" src="img/events-home/events-home3.jpg" alt="Trade finance company"> </div>
                <div class="col-md-3">
                    <div class="card-text">
                        <p>Euro Exim Bank is an associate sponsor of Indian Idol UK Tour 2019. Indian Idol
                            is the hugely
                            popular Indian version of
                            the Pop Idol format programme aired on Sony TV.
                            <br>
                            The first show will take place in Leicester on 22nd February with additional
                            shows at The
                            Drum,
                            Wembley Stadium in
                            London on 23rd and 24th February 2019.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Event Section ends-->

    <!-- Partnership starts-->
    <section class="partners">
        <div class="container mt-50">
            <div class="row">
                <div class="col-md-12 mt-50">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <!-- <p>Take look at</p> -->
                        <h2>what our partners say about us</h2>
                    </div>
                </div>
                <!-- Comments slider start-->
                <div class="container mb-30">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active text-center p-4">
                                <!-- <div class="section-heading text-center">
                                    <p>GTR - Global TRade Review</p>
                                </div> -->
                                <img class="partner-logo mx-auto" src="img/partner/001.png"
                                    alt="Trade finance company">
                                <p>“GTR has a long-standing relationship with Euro Exim Bank, who
                                    frequently
                                    exhibit at and
                                    contribute meaningfully to
                                    GTR’s global events. We are proud to be a partner of Euro Exim Bank and of our
                                    ongoing
                                    collaboration with them.”</p>
                                <!-- BElow P tag is used for anchor dont remove this -->
                                <p id="Subscribe"></p>
                                <p class="orange">- Jeff Ando, Director Conference Production, | Global Trade Review</p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <!-- <div class="section-heading text-center">
                                    <p>Lowtax</p>
                                </div> -->
                                <img class="partner-logo mx-auto" src="img/partner/002.png"
                                    alt="Trade finance company">
                                <p>"At Lowtax, we are excited to work with Euro Exim Bank. As one of
                                    the
                                    world's most
                                    innovative
                                    financial institutions,
                                    Euro Exim Bank uses the very best of cutting edge technology in the financial
                                    industry
                                    to
                                    make
                                    international banking and
                                    cross-border transactions as efficient as possible for its clients".</p>
                                <p class="orange">- Ewan Pettman, Sales Director | Lowtax.net</p>
                            </div>

                            <div class="carousel-item text-center p-4">
                                <!-- <div class="section-heading text-center">
                                    <p>Ripple</p>
                                </div> -->
                                <img class="partner-logo mx-auto" src="img/partner/003.png"
                                    alt="Trade finance company">
                                <p>"Euro Exim Bank is an innovative company that is incredibly focused
                                    on
                                    providing
                                    their customers with
                                    a quicker, cheaper
                                    payment experience. By using XRP for on-demand liquidity - as well as xCurrent -
                                    they
                                    are
                                    delivering
                                    on that promise.
                                    We're excited to have them on RippleNet ."</p>
                                <p class="orange">- Marcus Treacher, SVP of Customer Success, | Ripple</p>
                            </div>
                            <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- comment slider ends-->
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
 
 $("#owl-demo").owlCarousel({
   navigation : true
 });

});
    </script>
    <!-- Partenership ends-->




<!--

    <div id="modelDisclaimer" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
        <div class="modal-dialog">
            
            <div class="modal-content">
                <section class="main-content">
                    <div class="container ">
                        <div class="main-block">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 style="padding-top:20px;">Disclaimer</h2>
                                    <hr class="textseperator" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 Divtxt">

                                    <p>Euro Exim Bank Limited Group of Companies consists of its Registered
                                        Office
                                        in
                                        Saint Lucia and its
                                        Representative Office in the United Kingdom.</p>
                                    <p>EURO EXIM BANK LTD (REGISTERED OFFICE) is a Class A International
                                        Banking
                                        Financial institution
                                        incorporated under the revised laws of St. Lucia. The license
                                        provides
                                        authorisation to conduct
                                        business with third parties across industries and geographies
                                        worldwide.
                                        This
                                        office does not
                                        provide any services to any natural person or legal entity in St.
                                        Lucia and
                                        is
                                        regulated by the
                                        Financial Services Regulatory Authority in St. Lucia.</p>
                                    <p>EURO EXIM BANK LIMITED (REPRESENTATIVE OFFICE) is a company
                                        incorporated
                                        under
                                        the laws of England
                                        and Wales with company registration number 07520196. This entity is
                                        a
                                        non-banking financial
                                        institution that facilitates international business transactions
                                        through
                                        issuance and relay of
                                        various trade finance instruments. The London-based Representative
                                        Office
                                        offers
                                        Letters of Credit
                                        and Standby Letters of Credit to corporate clients only. This office
                                        does
                                        not
                                        provide regulated or
                                        controlled services or activities.</p>
                                    <p>We have recently become aware of a number of entities with different
                                        names
                                        misrepresenting
                                        themselves as associates, partners or agents of Euro Exim Bank.</p>
                                    <p>Please be informed that Euro Exim Bank Ltd are not associated with
                                        nor do we
                                        have
                                        any business
                                        connections or dealings with such institutions.</p>
                                    <p>Euro Exim Bank takes all information regarding suspicious fraudulent
                                        activity
                                        very seriously.
                                        Please immediately inform us at compliance@euroeximbank.com if you
                                        suspect
                                        or
                                        are approached by
                                        persons misrepresenting or impersonating Euro Exim Bank and/or its
                                        officials.
                                        We will make investigations and will take legal action where
                                        necessary. </p>


                                    <button class="btn credit-btn m-2 mb-4 close-dc"
                                        style="background-color: #06283a; color:#fff;">Accept &
                                        Continue</button>

                                </div>
                               
                            </div>
                        
                        </div>
                </section>
                
            </div>
        </div>
    </div> 

-->

    <?php include('news-letter.php'); ?>
    <?php require('footer-1.html') ?>
    <?php require('footer-scripts.php') ?>

    <!-- <script type="text/javascript">
        $(document).ready(function () {
            if (localStorage.getItem('eeb_dc') != 'visited') {
                $("#modelDisclaimer").modal('show');
                localStorage.setItem('eeb_dc', 'visited');
            }
        });
    </script>
    <script type="text/javascript">
        jQuery('.close-dc').click(function () {
            jQuery("#modelDisclaimer").modal('hide');
        });
    </script> -->



    <script>
        $('#videoLink')
            .magnificPopup({
                type: 'inline',
                midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
            })
    </script>

    <script>
        $("#exampleModal").on('hidden.bs.modal', function (e) {
            $("#exampleModal video").attr("src", $("#exampleModal video").attr("src"));
        });
    </script>

    <script>
        var vid = document.getElementById("myVideo");

        function pauseVid() {
            vid.pause();
        }  
    </script>


<script> (function(ss,ex){ window.ldfdr=window.ldfdr||function(){(ldfdr._q=ldfdr._q||[]).push([].slice.call(arguments));}; (function(d,s){ fs=d.getElementsByTagName(s)[0]; function ce(src){ var cs=d.createElement(s); cs.src=src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)},1); }; ce('https://sc.lfeeder.com/lftracker_v1_'+ss+(ex?'_'+ex:'')+'.js'); })(document,'script'); })('3P1w24dbYEP8mY5n'); </script>


</body>

</html>
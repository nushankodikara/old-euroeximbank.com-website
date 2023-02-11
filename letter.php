<?php include('subscribe-mail.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Newsletter | Euro Exim Bank Ltd is an innovative financial institution, recognized for responsible banking and dedicated customer service. Join us, we help you stay ahead of the game.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<?php include('gtag-head.php'); ?>
    <!-- Title -->
    <title>Newsletters | Euro Exim Bank</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://www.euroeximbank.com/img/fvicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <style>
        .card {
            margin-bottom: 30px !important;
            border: none;
        }
         @media only screen and (min-width: 40em) {
            .modal-letter-overlay {
                display: -webkit-box;
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 5;
                background-color: rgba(0, 0, 0, 0.6);
                opacity: 0;
                visibility: hidden;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
                transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            }

            .modal-letter-overlay.active {
                opacity: 1;
                visibility: visible;
            }
        }

        /**
 * modal-letter
 */
        .modal-letter {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            position: relative;
            margin: 0 auto;
            background-color: #fff;
            width: 600px;
            max-width: 75rem;
            min-height: 600px;
            padding: 1rem;
            border-radius: 3px;
            opacity: 0;
            overflow-y: auto;
            visibility: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            -webkit-transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        }

        .modal-letter .close-modal-letter {
            position: absolute;
            cursor: pointer;
            top: 5px;
            right: 15px;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .modal-letter .close-modal-letter svg {
            width: 1.75em;
            height: 1.75em;
        }

        .modal-letter .modal-letter-content {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .modal-letter.active {
            visibility: visible;
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .modal-letter.active .modal-letter-content {
            opacity: 1;
        }

        .modal-letter.active .close-modal-letter {
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
            opacity: 1;
        }

        /**
 * Mobile styling
 */
        @media only screen and (max-width: 39.9375em) {
            h1 {
                font-size: 1.5rem;
            }

            .modal-letter {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                -webkit-overflow-scrolling: touch;
                border-radius: 0;
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
                padding: 0 !important;
            }

            .close-modal-letter {
                right: 20px !important;
            }
        }
    </style>

</head>

<body>

<?php include('gtag-body.php'); ?>
    <?php require('header.html')?>

 <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/homepage/5.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">

                        <h2>Newsletters</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="media-centre">Media</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Newsletters</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <div class="container">
        <div class="credit-tabs-content padding-top-50">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
                        aria-selected="true">2020</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1"
                        aria-selected="true">2019</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                        aria-selected="false">2018</a>
                </li>
            </ul>

            <div class="tab-content mb-100" id="myTabContent">
                 <div class="tab-pane fade active show" id="tab3" role="tabpanel" aria-labelledby="tab--3" >
                    <div class="credit-tab-content ">
                        <!-- Tab Text -->
                        <div class="credit-tab-text">
                            <div class="row">

                             <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/trailblazer-h2-2020.png" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">The Trailblazer H2<br> 2020</h5>
                                        <p class="text-center"><a  href="img/media/newsletter_pdf/2020/the-trailblazer-h2-2020.pdf" target="_blank"
                                                class="btn btn-dark testClick">View</a></p>
                                    </div>
                                    <!--end card -->
                                </div>

                             <div class="col-md-4">
                                   
                                   
                                </div>
                                <div class="col-md-4">
                                    
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1" >
                    <div class="credit-tab-content ">
                        <!-- Tab Text -->
                        <div class="credit-tab-text">
                            <div class="row">

                             <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/eeb-newsletter-q3-q4-2019.png" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">EEB Newsletter Q3 | Q4<br> 2019</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2019/q3_q4.pdf" target="_blank"
                                                class="btn btn-dark">View</a></p>
                                    </div>
                                    <!--end card -->
                                </div>

                             <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-11.png" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 11 | Q2 <br> 2019</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2019/q2.pdf" target="_blank"
                                                class="btn btn-dark">View</a></p>
                                    </div>
                                    <!--end card -->
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-10.png" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 10 | Q1 <br> 2019</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2019/q1.pdf" target="_blank"
                                                class="btn btn-dark">View</a></p>
                                    </div>
                                    <!--end card -->
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                    <div class="credit-tab-content">
                        <!-- Tab Text -->
                        <div class="credit-tab-text">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-8-9.jpg"
                                            class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 08 / 09 | November / December 2018</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2018/issue_8_and_9.pdf" target="_blank"
                                                class="btn btn-dark">View</a></p>
                                    </div>
                                    <!--end card -->
                                </div>



                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-6-7.jpg"
                                            class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 06 / 07 | September / October 2018</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2018/issue_6_and_7.pdf" target="_blank"
                                                class="btn btn-dark">View</a></p>
                                    </div>
                                    <!--end card -->
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-5.jpg" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 05 | August 2018</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2018/issue_5.pdf" target="_blank"
                                                class="btn btn-dark">View</a></p>
                                    </div>
                                    <!--end card -->
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-4.jpg" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 04 | July 2018</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2018/issue_4.pdf" target="_blank"
                                                class="btn btn-dark">View</a>
                                        </p>
                                    </div>
                                    <!--end card -->
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-3.jpg" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 03 | June 2018</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2018/issue_3.pdf" target="_blank"
                                                class="btn btn-dark">View</a>
                                        </p>
                                    </div>
                                    <!--end card -->
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-2.jpg" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 02 | May 2018</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2018/issue_2.pdf" target="_blank"
                                                class="btn btn-dark">View</a>
                                        </p>
                                    </div>
                                    <!--end card -->
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="img/media/newsletter/issue-no-1.jpg" class="img-fluid img-thumbnail" alt="Trade finance company">
                                        <h5 class="text-center">Issue No. 01 | April 2018</h5>
                                        <p class="text-center"><a href="img/media/newsletter_pdf/2018/issue_1.pdf" target="_blank"
                                                class="btn btn-dark">View</a>
                                        </p>
                                    </div>
                                    <!--end card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    

 <!-- modal-letter -->
    <div class="modal-letter-overlay">
        <div class="modal-letter">

            <a class="close-modal-letter">
                <svg viewBox="0 0 20 20">
                    <path fill="#000000"
                        d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                    </path>
                </svg>
            </a><!-- close modal-letter -->

            <div class="modal-letter-content">
                <h3>Some content here</h3>
                <iframe id="pdfSrc" width="600px" height="600px" src="" frameborder="0"></iframe>
            </div><!-- content -->

        </div><!-- modal-letter -->
    </div><!-- overlay -->



    <?php include('news-letter.php'); ?>
    <?php require('footer-1.html') ?>
     <?php require('footer-scripts.php') ?>

     <script>
        var elements = $('.modal-letter-overlay, .modal-letter');

        $('.testClick').click(function () {
            elements.addClass('active');
            var anchorValue = $(this).attr("href");
            alert(anchorValue);
            document.getElementById('pdfSrc').src = anchorValue;
            return false;
        });

        $('.close-modal-letter').click(function () {
            elements.removeClass('active');
            document.getElementById('pdfSrc').src = "";
        });

        
    </script>


     
</body>

</html>
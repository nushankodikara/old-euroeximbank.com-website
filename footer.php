<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>




<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">About Us</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                        <li><a href="about.php">About EEB</a></li>
                            <li><a href="licence-and-certification.php">Licence and Certification</a></li>
                            <li><a href="media-centre.php">Media Centre</a></li>
                            <li><a href="euro-exim-foundation.php">Euro Exim Foundation</a></li>
                            <li><a href="careers.php">Careers</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Trade Finance Services</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                        <li><a href="letter-of-credit.php">Letter of Credit</a></li>
                            <li><a href="standby-letter-of-credit.php">Standby Letter of Credit</a></li>
                            <li><a href="bank-guarantee.php">Bank Guarantee</a></li>
                            <li><a href="proof-of-funds.php">Proof of Funds</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Corporate Banking</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="#">Corporate Banking</a></li>
                            <li><a href="#">Pre-paid Master Cards </a></li>
                            <li><a href="#">International Wire Transfers</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Latest News</h5>

                    <!-- Single News Area -->
                    <div class="single-latest-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                            <img src="img/bg-img/7.jpg" alt="">
                        </div>
                        <div class="news-content">
                            <a href="#">How to get the best loan?</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane
                                    Smith</a>
                                <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April
                                    26</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-latest-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                            <img src="img/bg-img/8.jpg" alt="">
                        </div>
                        <div class="news-content">
                            <a href="#">A new way to get a loan</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane
                                    Smith</a>
                                <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April
                                    26</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-latest-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                            <img src="img/bg-img/9.jpg" alt="">
                        </div>
                        <div class="news-content">
                            <a href="#">Finance you home</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane
                                    Smith</a>
                                <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April
                                    26</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                        <!-- Footer Logo -->
                        <a href="index.php" class="footer-logo"><img src="img/logo/logo.png" alt=""></a>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#!">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                Euro Exim Bank
                            </a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Ends ##### -->
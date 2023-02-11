<?php include('subscribe-mail.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   <meta name="description" content="Events in Euro Exim bank. The comprehensive repository of upcoming conferences, and events relating to trade finance. Click to view upcoming events.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<?php include('gtag-head.php'); ?>
    <!-- Title -->
    <title>Events | Euro Exim Bank</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://www.euroeximbank.com/img/fvicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">


    <style>
        .event-list {
            list-style: none;
            font-family: 'Lato', sans-serif;
            margin: 0px;
            padding: 0px;
        }

        .event-list>li {
            background-color: rgb(255, 255, 255);
            padding: 0px;
            margin: 0px 0px 20px;
        }


        .event-list>li>img {
            width: 100%;
        }

        .event-list>li>.info {
            padding-top: 5px;
            text-align: center;
        }

        .event-list>li>.info>.title {
           font-size: 14px;
            font-weight: 700;
            margin: 0px;
        }


        .event-list>li>.info>.title h2 {
         
        }

        .event-list>li>.info>.desc {
            font-size: 10pt;
            font-weight: 300;
            margin: 0px;
        }

        .event-list>li>.info>ul {
            display: table;
            list-style: none;
            margin: 10px 0px 0px;
            padding: 0px;
            width: 100%;
            text-align: center;
        }


        .event-list>li>.info>ul>li {
            display: table-cell;
            cursor: pointer;
            color: rgb(30, 30, 30);
            font-size: 11pt;
            font-weight: 300;
            padding: 3px 0px;
        }

        .event-list>li>.info>ul>li>a {
            display: block;
            width: 100%;
            color: rgb(30, 30, 30);
            text-decoration: none;
        }




        .event-list>li>.info>ul>li:hover {
            color: rgb(30, 30, 30);
            background-color: rgb(200, 200, 200);
        }




        @media (min-width: 768px) {
            .event-list>li {
                position: relative;
                display: block;
                width: 100%;
                height: 120px;
                padding: 0px;
            }


            .event-list>li>img {
                display: inline-block;
            }


            .event-list>li>img {
                width: 120px;
                float: left;
            }

            .event-list>li>.info {
                background-color: rgb(245, 245, 245);
                overflow: hidden;
            }


            .event-list>li>img {
                width: 120px;
                height: 120px;
                padding: 0px;
                margin: 0px;
                
            }

            .event-list>li>.info {
                position: relative;
                height: 120px;
                text-align: left;
                padding-right: 40px;
            }

            .event-list>li>.info>.title,
            .event-list>li>.info>.desc {
                padding: 0px 10px;
            }

            .event-list>li>.info>ul {
                position: absolute;
                left: 0px;
                bottom: 0px;
            }
        }
    </style>
</head>

<body>

<?php include('gtag-body.php'); ?>
    <?php require('header.html') ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/homepage/5.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="media-centre.php">Media</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->





    <!-- ##### Services Area Start ###### -->
    <section class="services-area section-padding-100-0 mb-100">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <ul class="event-list">
                        <h5>Past Events</h5>
                        <hr class="mb-20">
                        <li>
                            <img alt="Independence Day" src="img/event/event_1.jpg" alt="Trade finance company">
                            <div class="info">
                                <h2 class="title">GTR MENA Trade and Export Finance week 2018</h2>
                                <p class="desc">Feb 19, 2018</p>
                            </div>
                        </li>

                        <li>
                            <img alt="Independence Day" src="img/event/event_2.jpg" alt="Trade finance company">
                            <div class="info">
                                <h2 class="title">Turkey Trade and Export Finance Conference 2018</h2>
                                <p class="desc">Mar 21, 2018</p>
                            </div>
                        </li>

                        <li>
                            <img alt="Independence Day" src="img/event/event_3.jpg" alt="Trade finance company">
                            <div class="info">
                                <h2 class="title">UK Trade and Export Finance Conference</h2>
                                <p class="desc">Jun 07, 2018</p>
                            </div>
                        </li>

                        <li>
                            <img alt="Independence Day" src="img/event/event_4.jpg" alt="Trade finance company">
                            <div class="info">
                                <h2 class="title">SIBOS Torronto</h2>
                                <p class="desc"> 16 - 19 Oct 2017</p>
                            </div>
                        </li>

                    </ul>
                </div>

                 <div class="col-md-6">
                    <h5>Upcoming Events</h5>
                    <hr class="mb-20">
                     <ul class="event-list">
<li>
                           
                            <div class="info">
                                <h2 class="title">No events in this month...</h2>
                            </div>
                        </li>
                    </ul>
                   
                </div>

            </div>
        </div>

    </section>
    <!-- ##### Services Area End ###### -->


    <?php include('news-letter.php'); ?>

    <?php require('footer.html') ?>

    <?php require('footer-scripts.php') ?>
</body>

</html>
<?php include('subscribe-mail.php'); ?>
<?php
if(isset($_POST['submitJobRequest'])){
require 'PHPMailer/PHPMailerAutoload.php';
$name=$_POST['name'];
$jobtype=$_POST['jobtype'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "ssl";
  $mail->Port     = 465;
  $mail->Username = "no-reply@euroeximbank.com";
  $mail->Password = "N0Password";
  $mail->Host     = "smtp.gmail.com";
  $mail->Mailer   = "smtp";
  $mail->setFrom('no-reply@euroeximbank.com', 'Euro Exim Bank Careers');
//   $mail->addAddress('saavan.t@euroeximbank.com', 'Saavan');
//   $mail->addAddress('ranjith@eebcs.com', 'Ranjithkumar');
  $mail->addAddress('hr@euroeximbank.com', 'Human Resource Euro Exim Bank');
  $mail->Subject = "Euro Exim Bank Careers -  $name apply for $jobtype";
  $mail->isHTML(true);
$mail->Body     = "<h3><u>Euro Exim Bank Careers: </u> <br />
Name: $name<br />
Job Title: $jobtype<br />
Mobile Number: $mobile<br />
Email: $email<br /></h3>";
  foreach ($_FILES["attachment"]["name"] as $k => $v) {
      $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
  }


  if(!$mail->Send()) {
  	$msg= "<p class='error'>Problem in Sending Mail.</p>";
  } else {
  	$msg= "<p class='success-message'>Your job details are successfully sent.</p>";
  }
}
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <meta name="description" content="Looking for a career in banking? Euro Exim Bank is looking for professionals and established agencies to promote our trade finance instrument to international markets.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content=" Make your career in trade finance with Euro Exim Bank">
    <meta property="og:description" content="We are looking for professionals to promote our trade finance instruments to international markets. Join us and start your trade finance adventure.">
    <meta property="og:keywords" content="Euro Exim Bank, Trade Finance">
     <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<?php include('gtag-head.php'); ?>
    <!-- Title -->
    <title>Careers | Euro Exim Bank</title>

    <!-- Favicon -->
    <link rel="icon" href="img/fav-icon/site-icon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        input[type="file"] {
            z-index: -1;
            position: absolute;
            opacity: 0;
        }

        input:focus+label {
            outline: 2px solid;
        }

        .success-message {
            font-weight: 900 !important;
    color: white;
    background-color: green;
    padding: 10px;
        }


        .btn-career {
            background-color: white;
            color: #06283A;
            border: 1px solid #06283A;
        }


        .btn-career:hover {
            background-color: #06283A;
            color: white;
            border: 1px solid #06283A;
        }
        .mailLink{
color:black;
font-weight:400;
        }
        .mailLink:hover{
            color: black;
            font-weight:normal;
            text-decoration: underline;
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
                        <h2>Careers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Careers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-contact-area mb-100">
                        <!-- Logo -->
                        <div class="section-heading mb-100">
                            <h2>Job Opportunities</h2>
                            <div class="line"></div>
                            <p>We are looking for professionals and established agencies
                                to promote our trade finance instrument
                                to international markets.</p>
                            <p>If you have any queries please ping us here: <a class="mailLink" href="mailto:hr@euroeximbank.com">hr@euroeximbank.com</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact-advisor">
                            <h5>Job Application Form</h5>
                            <div class="formDiv">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="careerform"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Job Title" name="jobtype"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mobile"
                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                            minlength="8" title="Please enter exactly 8 digits" name="mobile" required>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label class="btn btn-career">
                                                Attach CV <input type="file" id="file-upload" style="display: none;"
                                                    accept=".doc, .docx, .pdf" name="attachment[]" required>
                                            </label>
                                            <div id="file-upload-filename"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <button id="submitbtn" type="submit" class="btn  btn-career float-right"
                                                name="submitJobRequest" disabled>Submit</button>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="required_message" style="color:red;">*Must Attach your CV</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <?php
                   if(isset($msg)){
                     echo "<h4 class='success-msg'>$msg</h4>";
                   }
                    ?>
                                    </div>
                                </form>
                            </div>
                            <!--end Divleft-->
                        </div>
                        <!--end Form Div -->
                        </form>
                    </div>
                </div>
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-8 mt-50 mb-50 justify-content center">
                    <a title="VIEW BROUCHURE" href="assets/careers/careers.pdf" target="_blank"><img
                            src="img/career/career.jpg" class="img-fluid" alt="career image"></a>

                </div>
            </div>




        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
    <?php include('news-letter.php'); ?>
    <?php require('footer.html') ?>
     <?php require('footer-scripts.php') ?>

    <script>
        var input = document.getElementById('file-upload');
        var infoArea = document.getElementById('file-upload-filename');

        input.addEventListener('change', showFileName);

        function showFileName(event) {

            // the change event gives us the input it occurred in 
            var input = event.srcElement;

            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
            var fileName = input.files[0].name;

            // use fileName however fits your app best, i.e. add it into a div
            infoArea.textContent = 'File name: ' + fileName;
        }

    </script>


    <script>

        document.addEventListener("DOMContentLoaded", function () {
            var elements = document.getElementsByName("attachment");
            for (var i = 0; i < elements.length; i++) {
                elements[i].oninvalid = function (e) {
                    e.target.setCustomValidity("");
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity("Agree to our terms and conditions");
                    }
                };
                elements[i].oninput = function (e) {
                    e.target.setCustomValidity("");
                };
            }
        })

    </script>

    <script>
        $(document).ready(
            function () {
                $('input:file').change(
                    function () {
                        if ($(this).val()) {
                            $('#submitbtn').attr('disabled', false);
                            $('#required_message').hide();

                            // or, as has been pointed out elsewhere:
                            // $('input:submit').removeAttr('disabled'); 
                        }
                    }
                );
            });
    </script>
</body>

</html>
<?php include('subscribe-mail.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Reassure your Suppliers with Euro Exim Bank’s Letter of Credit (LC). We are ready to provide a reliable and effective Trade Finance services for our clients internationally.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="No. 1 Trade Finance Bank - Simpler - Faster - Friendlier">
    <meta property="og:description" content="Headquartered in St. Lucia, Euro Exim Bank serves global demand for trade finance instruments such as LC, SBLC, BG, and Proof of funds.">
   
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<?php include('gtag-head.php'); ?>
    <!-- Title -->
    <title>Euro Exim Bank | Documentary Letter of Credit</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://www.euroeximbank.com/img/fvicon.png">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
<style>
.pdfBox{
    box-shadow: 0px 0px 10px #ccc;
    margin:100px 0px;
}

.pdfView{
    width:100%;
    height: 650px;
}
</style>
</head>

<body>
   
<?php include('gtag-body.php'); ?>
  <?php include('header.html'); ?>

<div class="container">

<div class="row d-flex justify-content-center">
<div class="col-md-6 col-12 ">
<div class="pdfBox">




<iframe src="./img/media/corporateProfile.pdf#toolbar=0&scrollbar=0&navpanes=1"  class="pdfView" id="pdf"></iframe>

</div>
</div>
</div>

</div>



 



    <?php include('news-letter.php'); ?>
    <?php require('footer-1.html') ?>
     <?php require('footer-scripts.php') ?>





<script type="text/javascript">
document.onmousedown = disableRightclick;
var message = "Right click not allowed !!";
function disableRightclick(evt){
    if(evt.button == 2){
        alert(message);
        return false;    
    }
}
</script>












</body>

</html>
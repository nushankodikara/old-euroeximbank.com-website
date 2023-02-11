<?php include('subscribe-mail.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Media Centre - Euro Exim Bank Ltd is an innovative financial institution, recognized for responsible banking and dedicated customer service. Join us, we help you stay ahead of the game.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php include('gtag-head.php'); ?>
    <!-- Title -->
    <title>Sales Team | Euro Exim Bank</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://www.euroeximbank.com/img/fvicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <style>
        ul.pagination li {
            border: 1px solid;
            margin: 0px 10px;
            padding: 10px;
        }

        ul.pagination li.active {
            border: 1px solid;
            margin: 0px 10px;
            padding: 10px;
            background: #06283A;
        }

        ul.pagination li:hover {
            border: 1px solid;
            margin: 0px 10px;
            padding: 10px;
            background: #06283A;
            cursor: pointer;
        }


        ul.pagination li:hover a {
            color: white !important;
        }

        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 5em !important;
            display: inline-block;
            width: auto;
            height: 28px !important;
        }




        #data-table_length>label>select {
            height: 28px;
            margin: auto 15px;
            padding: 0px !important;
        }




        table.dataTable thead .sorting_asc:after {
            content: "\f0dc" !important;
        }


        table.dataTable thead .sorting_desc:after {
            content: "\f0dc" !important;
        }


        table.dataTable thead .sorting:after {
            content: "\f0dc" !important;
        }


        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:after {
            font-family: 'FontAwesome' !important;
        }


        .box {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            ;
        }

        #data-table {
            width: 100% !important;
            border: none;
        }

        #data-table_wrapper .row {
            margin-bottom: 50px;
        }

        #data-table_wrapper {
            display: block !important;
        }

        td {
            padding: 20px !important;
        }


        thead tr>th {
            padding: 20px !important;
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_asc:after {
            content: "\e155";
            padding: 20px !important;
            vertical-align: middle;
            top: 0px;
        }

        thead {
            background: #06283A;
            color: white;
        }


        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #06283A;
            border-color: #06283A;
        }


        .pagination>li>a,
        .pagination>li>span {
            color: #06283A;
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
                        <h2>Sales Team</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sales Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- world map start -->

    <section class="services-area section-padding-100-0" style="padding-bottom: 50px;">
        <div class="container">
        <?php include 'sales-map.php'?>
        </div>
    </section>

    <!-- world map end -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="single-footer-widget mb-4" style="color: #838383;">
                    <h2 class="widget-title" style="text-align:center;">Search for registered sales team members of Euro Exim Bank</h2> <br>
                    <p style="letter-spacing: 0.5px;
    text-align: center;font-size:15px;">Use the search fields to enter information about the registered sales team member you would like to find. Then select 'Search'.</p>
   

                </div>

            </div>
        </div>
    </div>


    <!-- ##### Services Area Start ###### -->

    <section class="services-area " style="padding-bottom: 50px;">
        <div class="container">


            <!-- <div class="table-responsive">
                <table class="table table-striped table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Empanelment Number</th>
                        </tr>
                    </thead>
                </table>
            </div> -->

          <!-- Dynamic Sales Team Start -->


          <!-- <h3>Our Sales Team</h3>
          <div class="row">
<form action="sales-team.php" method="post" >
    <div class="col-lg-6">
<input type="text" class="form-control" name="check" placeholder="Name / Phone Number / Empanelment Number"></div>
<div class="col-lg-6">
<input type="submit " class="btn credit-btn" style="border-radius:10px;position: relative;float:right;" value="verify" ></div>
</form>  
    </div> -->

<form action="" method="post">
    <div class="row align-items-center">
        <div class="col-sm-2 col-xl-2 col-lg-2 col-md-2"></div>
                                    <div class="col-6 col-sm-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input style="height:50px;" type="text" class="form-control" id="check" name="check" placeholder="Email / Phone / Empanelment Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-2 col-xl-2 col-lg-2 col-md-2">
                                        <div class="form-group">
                                            <button id="submitbtn" type="submit" class="btn credit-btn" style="border-radius:5px;">Search</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-xl-2 col-lg-2 col-md-2" id="wait"></div>
    </div>

    </form>
    <!-- <script>
        document.getElementById('submitbtn').onclick = function() {
            alert("dai");
            if(document.getElementById('check').value == ""){
               $('#wait').show();
              
            }
            else{
                
            }
        }
        
    </script> -->
<?php 
error_reporting(0);
$servername = "localhost";

// $username = "root";
// $password = "";
// $dbname = "salesdemo";

$username = "euroe8ca_salesteam";
$password = "EEB@2023]";
$dbname = "euroe8ca_salesteam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<style>
    
    table{
        
        font-family: "Open Sans", sans-serif;
        margin:auto;
        font-weight:700;
        margin-top:50px;
    }
    th,td   {
        text-align: center;
    padding: 10px;
    }
    th{
        background-color:#06283A;
        color:white;
    }
</style>
<script>
    document.getElementById('submitbtn').onclick = function() {
 //   $(document).ready(function(){

    $(this).scrollTop(0);
});
</script>
<?php 



$checking=$_REQUEST['check'];

$sql = "SELECT * FROM demo WHERE email='$checking' OR empnumber='$checking' OR mobile='$checking'";
$result = $conn->query($sql);

// $sql1 = "SELECT designation from demo";
  
// if ($result1 = mysqli_query($conn, $sql1)) {

// // Return the number of rows in result set
// $rowcount = mysqli_num_rows( $result1);
// $tt = mysqli_fetch_array($result1);

// echo $tt[0];
  
// // Display result
// printf("Total rows in this table : %d\n", $rowcount);
// }




if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
echo"<div style='overflow-x:auto'>
<table border=2px;>
    <tr>
        <th>Name</th>
        <th>Empanelment Number</th>
        <th>Country</th>
        <th>Designation</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Since</th>
    </tr>
    <tr>
        <td>".$row["name"]."</td>
        <td>".$row["empnumber"]."</td>
        <td>".$row["country"]."</td>
        <td>".$row["designation"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["mobile"]."</td>
        <td>".$row["since"]."</td>
    </tr>
</table></div>";

}}
// } else {
//   echo "<span style='color:red;' class='col-6 col-sm-6 col-xl-6 col-lg-6 col-md-6'>No Records Found. Please contact your Head</span>";
// //   echo "<p style='color:red;'>arun</p>";
// }

$conn->close();

?>

          <!-- Dynamic Sales Team End -->
            

        </div>
    </section>
    <!-- ##### Services Area End ###### -->

    <!-- disclaimer start -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12" style="margin-bottom: 30px !important;">
                <div class="single-footer-widget mb-4" style="color: #838383;">
                    <h5 class="widget-title" style="letter-spacing: 1px;font-size:15px !important;">DISCLAIMER</h5> <br>
                    <p style="letter-spacing: 0.5px;
    text-align: justify;font-size:13px;">The Empanelment Number herein contained confirms that the named
                        individual is a sales consultant of the Bank as defined in the <u>Bank's Agent Onboarding Terms and
                        Conditions.</u>
    </p><p style="letter-spacing: 0.5px;font-size:13px;
    text-align: justify;">

                        The individual is not an agent, broker or legal representative of Euro Exim Bank Ltd and
                        accordingly makes no guarantees, representations, or warranties regarding the products and
                        services of Euro Exim Bank Ltd., its processes, and/or the consequent issuance of the requested
                        trade instrument or provision of the requested service.
    </p><p style="letter-spacing: 0.5px;
    text-align: justify;margin-bottom:30px;font-size:13px;">

Provision of trade instruments and/or services are subject to Euro Exim Bank Ltd.'s independent review of
the relevant information/documents presented. Euro Exim Bank may refuse to issue a requested facility or to render a service at its sole discretion.

                    </p>

                </div>

            </div>
        </div>
    </div>



    <!-- disclaimer end -->



    <?php include('news-letter.php'); ?>
    <?php require('footer.html') ?>

    <?php require('footer-scripts.php') ?>



    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- <script>



        $(document).ready(function () {
            var data = "";
            $.ajax({
                url: "import-salesteam.php",
                method: "POST",
                data: data,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (jsonData) {
                    $('#csv_file').val('');
                    $('#data-table').DataTable({
                        data: jsonData,
                        columns: [
                            { data: "s_no" },
                            { data: "name" },
                            { data: "empanelment_number" }
                        ],
                    });
                }
            });

        });

    </script> -->
</body>

</html>
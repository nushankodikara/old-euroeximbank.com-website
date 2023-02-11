

<!DOCTYPE html>
<html>
 <head>
  <title>Sales Details </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .box
  {
   max-width:600px;
   width:100%;
   margin: 0 auto;;
  }
  </style>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Upload Sales Sheet with the following Details S.No, Name, Empanelment Number</h3>
   
   <div class="table-responsive">
    <table class="table table-striped table-bordered" id="data-table">
     <thead>
      <tr>
      <th>S.No</th>
       <th>Name</th>
       <th>Empanelment Number</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script>



$(document).ready(function(){
var data = "";
  $.ajax({
   url:"import-salesteam.php",
   method:"POST",
   data: data,
   dataType:'json',
   contentType:false,
   cache:false,
   processData:false,
   success:function(jsonData)
   {
    $('#csv_file').val('');
    $('#data-table').DataTable({
     data  :  jsonData,
     columns :  [
        { data : "s_no" },
      { data : "name" },
      { data : "empanelment_number" }
     ]
    });
   }
  });
 
});

</script>

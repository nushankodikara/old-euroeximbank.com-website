<!DOCTYPE html>
<html>

<head>
    <title>Upload your files</title>

    <style>
        body {
            margin: 100px;
        }

        form {
            text-align: center;
        }

        h1 {
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 10px;
        }

        input#file {display: inline-block;
    width: 30%;
    padding: 75px 0 0 0;
    height: 46px;
    overflow: hidden;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background: url('img/icon-upload.webp') center center no-repeat #e4e4e4;
    border-radius: 20px;
    background-size: 60px 60px;
    cursor: pointer;
}

input#file:focus{
  outline:none;
}


.upload_btn{
  background-color: green;
    border: none;
    padding: 18px;
    font-size: 12px;
    border-radius: 11px;
    color: white;
    text-transform: uppercase;
    width: 15%;
    cursor: pointer;
}
    </style>
</head>

<body>
    <form enctype="multipart/form-data" action="index.php" method="POST">
        <h1>Upload your file</h1>
        <input id="file" type="file" name="uploaded_file"></input><br />
        <input type="submit" class="upload_btn" value="Upload"></input>
    </form>
</body>

</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "img/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "<p style='margin:30px 0px;text-align:center;color:green'>The file has been uploaded Successfully, Use the below link to display images or files in your template.</p> <br> <p style='text-align:center;color:white;background-color:black;padding:10px;border-radius:10px;font-size:16px;font-weight:bold;width:50%;display:flex;margin:auto;'>www.euroeximbank.com/emailTemplates/img/".  basename( $_FILES['uploaded_file']['name']). 
      "</p>";
    } else{
        echo "<p style='text-align:center;color:red;'>There was an error uploading the file, please try again!</p>";
    }
  }
?>
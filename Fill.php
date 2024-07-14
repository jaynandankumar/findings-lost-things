<?php
$insert=false;
if(isset($_POST['Submit']))
{
$servername = "localhost";
$username = "root";
$password ="";
$db="signin_data";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
  
  if(!$con)
  {
   die("connection to this database failed due to".mysqli_connect_error());
  }
  //echo "success connect ot the db";
        $Fullname   =$_POST['fName'];
        $address    =$_POST['Address'];
        
      $filename  =$_FILES['Equipment1']['name'];
      // $filepath  =$_FILES['Equipment1']['tmp_name'];
      // $fileerror =$_FILES['Equipment1']['error'];
      // $destfile  ='upload/'.$filename;
      // $destfile  ='upload/'.$filename;
      // move_uploaded_file($filepath,$destfile);
        
        $Contact    =$_POST['Phone'];
        
$sql="INSERT INTO daata(FullName,Address,Equipment,ContactNo) VALUES ('$FullName','$address','$filename','$Contact')";
 if($con->query($sql)==true){
  // echo "Successfully inserted";
  $insert=true;
}
else{
   echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1{
      text-align:center;
      padding:120px;
    }
  </style>
</head>
<body>
  <H1>Your Data is successfully Uploaded</H1>
</body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Equipment Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="">
    <style>
        div{
            display: flex;
        }
    </style>
</head>
<body>
   <div class="container">
    <fieldset>
        <h3>Basic Equipment Form</h3>
        <p class="paragraph">------------------------------------------------------------</p>
        <form action="#" method="p" enctype="multipart/form-data">
            
            <div>
                <label for="FullName">Full Name :</label><br>
                <input class="input1" type="text" name="Name" id="FullName" placeholder="Enter your full name" required>
            </div><br>
            <div>
                <label for="Address">Address :</label><br>
                <input class="input2" type="text" name="address" id="Address" placeholder="Enter your address" required>
            </div><br>
            <div>
                <label for="image">Upload Image :</label><br>
                <input class="photo" type="file" name="Equipment" id="image" placeholder="Select photo of Equipment" required>
            </div><br>
            <div>
                <label for="contact">Contact :</label><br>
                <input class="input3" type="text" name="PhoneNo" id="contact" placeholder="Enter contact no" required>
            </div><br>
            <div>
                <button type="submit" value="submit">Submit Details</button>
            </div>
            <p class="paragraph">------------------------------------------------------------</p>
        </form>
    </fieldset>
   </div>
</body>
</html> -->
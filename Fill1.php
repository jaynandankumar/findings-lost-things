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
        <form action="Fill.php" method="post" enctype="multipart/form-data">
            
            <div>
                <label for="FullName">Full Name :</label><br>
                <input class="input1" type="text" name="fName" id="FullName" placeholder="Enter your full name" required>
            </div><br>
            <div>
                <label for="Address">Address :</label><br>
                <input class="input2" type="text" name="Address" id="Address" placeholder="Enter your address" required>
            </div><br>
            <div>
                <label for="image">Upload Image :</label><br>
                <input class="photo" type="file" name="Equipment1" id="image" placeholder="Select photo of Equipment" required>
            </div><br>
            <div>
                <label for="contact">Contact :</label><br>
                <input class="input3" type="text" name="Phone" id="contact" placeholder="Enter contact no" required>
            </div><br>
            <div>
                <input type="submit" name="Submit" value="Submit"></input>
            </div>
            <p class="paragraph">------------------------------------------------------------</p>
        </form>
    </fieldset>
   </div>
</body>
</html>
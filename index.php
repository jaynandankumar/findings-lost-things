<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome Page</title>
    <style>
        .divbox .box a{
            color: #ff1818;
           
        }
        input {
            width: 60%;
            height: 8%;
            padding: 3%;
            background: #ffffff;
            color: black;
            border: 0.1px solid rgb(29, 29, 13);
            border-radius: 20px;
        }

        button {
            width: 25%;
            height: 8%;
            padding: 3%;
            border: 0.1px solid rgb(29, 29, 13);
            border-radius: 20px;
            background: #09ffda;
        }
        button:hover {
            background: #008d0a;
        }
        div a img{
            width: 150px;
            height: 80px;
            border-radius: 10px;
        }
        .divbox p{
            font-size: 20px;
        } 
        </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo"><a href="#">FINDING <br><p style="font-size: 20px; font-weight: 900;">LOST THINGS</p></a></div>
            <ul class="links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="steps.php">STEP</a></li>
                <li><a href="Guidlines.php">GUIDLINES</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="Fill1.php">FILL FORM</a></li>
            </ul>
            <div class="btn">
                <form action="#" role="search" method="post" enctype="multipart/form-data">
                    <input type="search" placeholder="Search" aria-label="Search">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <ul class="links">
                <li><a href="#">HOME</a></li>
                <li><a href="steps.php">STEP</a></li>
                <li><a href="Guidlines.php">GUIDLINES</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="Fill1.php">FILL FORM</a></li>
            </ul>
            <div class="btn">
                <form action="#" role="search" method="post" enctype="multipart/form-data">
                    <input type="search" placeholder="Search" aria-label="Search">
                    <button class="button1"type="submit">Search</button>
                </form>
            </div>
        </div>
    </header>
   <marquee behavior="" direction="left" scrollamount="10"> यदि आपको किसी भी प्रकार का उत्पाद/छोटा बच्चा मिलता है तो उसे स्थानीय पुलिस स्टेशन में जमा करें/अपने पास रखें। केवल खोई हुई वस्तुएँ ही अपलोड करें। सभी से अनुरोध है कि दिशानिर्देशों का पालन करें|  </marquee>
   <script>
    const ToggleBtn=document.querySelector('.toggle_btn')
const ToggleBtnIcon=document.querySelector('.toggle_btn i')
const ToggleDropDown=document.querySelector('.dropdown_menu')

ToggleBtn.onclick=function()
{
    ToggleDropDown.classList.toggle('open')
    const isOpen=ToggleDropDown.classList.contains('open')

    ToggleBtnIcon.classList=isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}
   </script>




<div class="divbox">
   <div class="box"><p>New Update</p><a href="april.php"><img src="items5.jpeg" alt="img"></a><p>January</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items5.jpeg" alt="img"></a><p>February</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items5.jpeg" alt="img"></a><p>March</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items5.jpeg" alt="img"></a><p>April</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items1.jpeg" alt="img"></a><p>May</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items1.jpeg" alt="img"></a><p>June</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items1.jpeg" alt="img"></a><p>July</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items1.jpeg" alt="img"></a><p>August</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items7.jpeg" alt="img"></a><p>September</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items7.jpeg" alt="img"></a><p>October</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items6.jpeg" alt="img"></a><p>November</p></div>
   <div class="box"><p>New Update</p><a href="april.php"><img src="items6.jpeg" alt="img"></a><p>December</p></div>
</div>



<footer>
    <p id="my">Connect with us these platform</p>
    <div class="social-links">
      <a href="https://www.facebook.com/MMDUMullana/"><i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</a>
      <a aria-label="twitter" href="https://twitter.com/MMDUmullana/"> <i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter </a> 
      <a aria-label="Instagram" href="https://www.instagram.com/MMDUmullana/"> <i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
      <a aria-label="LinkedIn" href="https://www.linkedin.com/school/maharishi-markandeshwar-university-mullana/"><i class="fa fa-linkedin-square" aria-hidden="true"></i>Linkdin</a> 
    </div>
    <br>
      <h3 style="margin-left: 5%;">Location :</h3>
      <i style="margin-left: 5%;" class="fa-solid fa-location-dot"></i><a>M.M University,Ambala</a> 
    </footer>
</body>
</html>
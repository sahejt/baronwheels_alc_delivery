<?php 
include("header.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
    <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>BarOnWheels - About</title>
</head>
<body>
            <br><br><br><br><br>

        </div>
        <div class="banner-about">
            <h1>About</h1>
  <br>
   </div></div>
<div class="hero-about">
    <div class="btn-box">
        <button id="btn1" onclick="openSTORY()"><i class="fas fa-book-open"></i>Our Story</button>
        <button id="btn2" onclick="openTEAM()"><i class="fas fa-users"></i>The Team</button>
        <button id="btn3" onclick="openCONTACT()"><i class="fas fa-id-badge"></i>Contact Us</button>
        <button id="btn4" onclick="openLOCATION()"><i class="fas fa-compass"></i>Office Location</button>
    </div>
    
    <!-- OUR STORY -->
    <div class="content-about" id="content1">
        <div class="content-about-left">
            <h1> Our Story </h1>
            <p> Hello, Welcome to BarOnWheels. We're glad and grateful you're here.
                Ten years ago, BarOnWheels started as a simple door to door delivery to local friends.
                When we realized and determined that in fact, we begin to establish a giant compliant technology company that would change the way we shop for beer, wine, and spirits.
                Today, BarOnWheels is the largest online marketplace for alcohol in North America.
                Our purpose is to be there when it matters - committed to life's moments and the people who create them.
                We partner with thousands of retailers in more than 1,500 cities to empower them to grow their businesses and make our customer's good times better.
                BarOnWheels is available to 150 million plus customers and counting across the U.S.
                and Canada, offering a rich e-commerce shopping experience with personalized content, competitive and transparent pricing, and an unrivaled selection.</p>
       <div class="btn">
           <a href="store.php">
           <button> Start Shopping<i class="fas fa-arrow-right"></i> </button>
        </a>
        </div>
            </div>
<div class="content-about-right">
    <img src="images/about1.png">
    </div>
    </div>

<!-- THE TEAM -->
<div class="content-about" id="content2">
    <div class="content-about-left">
        <h1> &nbsp; The Team </h1>
        <img src="images/team.png">
        </div>
<div class="content-about-right">
<img src="images/about3.png">
</div>
</div>

<!-- CONTACT INFORMATION -->
<div class="content-about" id="content3">
    <div class="content-about-left" id="content3">
        <h1> Contact Information </h1>
        <h4> 
            The following is our Contact Information, you may contact us using one of the listed Methods below:
        </h4>
        <p> 
            E-Mail Address: contact@baronwheels.sfsu.edu <br>
            Phone Number: +1 (415)-233-532 <br>
            Fax: +1 (408)-532-2993 <br>
            Skype: @baronwheels_support
        </p>
   <div class="btn"><button> Connect Live Chat </button></div>
        </div>
<div class="content-about-right">
<img src="images/about2.png">
</div>
</div>

<!-- OFFICE LOCATION -->
<div class="content-about" id="content4">
    <div class="content-about-left" id="content4">
        <h1> Office Location </h1><br>
        <h4>429 Thornton Hall, 1600 Holloway Ave, San Francisco, CA 94132 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </h4>
        <br><br><br><br>
   <div class="btn"><button> Open On Google Maps </button></div>
        </div>
<div class="content-about-right">
<img src="images/maphq.png">
</div>
</div>
    
</div>
<br><br><br><br>

<!-- FOOTER --> 
<?php 
include("footer.php");
 ?>



<script>
    var content1 = document.getElementById("content1");
    var content2 = document.getElementById("content2");
    var content3 = document.getElementById("content3");
    var content4 = document.getElementById("content4");

    var btn1 = document.getElementById("btn1");
    var btn2 = document.getElementById("btn2");
    var btn3 = document.getElementById("btn3");
    var btn4 = document.getElementById("btn4");

    function openSTORY(){
        content1.style.transform = "translateX(0)"
        content2.style.transform = "translateX(120%)"
        content3.style.transform = "translateX(120%)"
        content4.style.transform = "translateX(120%)"
        btn1.style.color = "#FA9B2C";

        btn2.style.color = "#000000";
        btn3.style.color = "#000000";
        btn4.style.color = "#000000";

        content1.style.transitionDelay = "0.3s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
    }

        function openTEAM(){
        content2.style.transform = "translateX(0)"
        content1.style.transform = "translateX(120%)"
        content3.style.transform = "translateX(120%)"
        content4.style.transform = "translateX(120%)"
        btn2.style.color = "#FA9B2C";
        
        btn1.style.color = "#000000";
        btn3.style.color = "#000000";
        btn4.style.color = "#000000";

        content2.style.transitionDelay = "0.3s";
        content3.style.transitionDelay = "0s";
        content1.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
    }

    function openCONTACT(){
        content3.style.transform = "translateX(0)"
        content2.style.transform = "translateX(120%)"
        content1.style.transform = "translateX(120%)"
        content4.style.transform = "translateX(120%)"
        btn3.style.color = "#FA9B2C";
        
        btn2.style.color = "#000000";
        btn1.style.color = "#000000";
        btn4.style.color = "#000000";

        content3.style.transitionDelay = "0.3s";
        content2.style.transitionDelay = "0s";
        content1.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
    }

    function openLOCATION(){
        content4.style.transform = "translateX(0)"
        content2.style.transform = "translateX(120%)"
        content3.style.transform = "translateX(120%)"
        content1.style.transform = "translateX(120%)"
        btn4.style.color = "#FA9B2C";
        
        btn2.style.color = "#000000";
        btn3.style.color = "#000000";
        btn1.style.color = "#000000";

        content4.style.transitionDelay = "0.3s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content1.style.transitionDelay = "0s";

    }

</script>
</body>
</html>
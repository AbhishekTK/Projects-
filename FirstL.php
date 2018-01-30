<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>

<title>SNAPIT</title>

<style>

#logo{float:center;}  


.MainHeading1{
			margin-left: 370px;
			margin-top: -100px;
	        font-family:"Times New Roman", Times, serif;
            color:#000000;
            font-size:40px;
            line-height: 0.8;
        	}
.blue{
	color: #1565c0
	}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: grey;
    float: right;
    width: 100%;    
	}

li {
    float: left;
     border-right:1px solid #bbb;
	}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: underline;
	}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #456789;
	}

li.dropdown {
    display: inline-block;
	}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: center;
	}
  

.dropdown-content a:hover {
	background-color: #111;
	color: blue
	}

.dropdown:hover .dropdown-content {
    display: block;
}



footer { text-align: center;
  font-size: 10px;
  background-color: #d3d3d3;
    display: block;
}

</style>

</head>

<body>

<a href="First.html">
<img id ="logo" src="logo_snapit.png" width="350" height="200">
</a>
<div class="MainHeading1">Photo Studio | Gift Shop<br><br></div>

   


<ul>
    
 <li class="dropdown">
     <!--<a href="javascript:void(0)" class="dropbtn">Patients</a><li>-->
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Photography</a>
    <div class="dropdown-content">
    <a href="Wildlife.html">Wildlife</a>
    <a href="Sports.html">Sports</a>
    <a href="Events.html">Functions</a>
    
 
      
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Printing</a>
    <div class="dropdown-content">
    <a href="Albums.html">Albums</a>
    <a href="Tees.html">T-Shirts</a>
    
    
    
    <li><a href="WeCare.html">We Care </a></li>
    
    <li><a href="FAQ.html">FAQ </a></li>
    <li><a href="ContactUs.html">Contact Us</a></li>
    <li><a href="AboutUs.html">About Us</a></li>
      <li style="margin-left:389px; text-decoration:none;"><a style="text-decoration:none;">Hello, <?php echo $_SESSION['email']?> </a> </li>     
        <li ><a href="Login.php">Log In</a></li>
        <li ><a href="Signup.php">Sign Up</a></li>
   
  
    </div>
  </li>
        </li>
</ul>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">


<div class="w3-content w3-section" style="max-width:100%">
  
    <div class="container"><img class="mySlides w3-animate-fading" src="img1.jpg" style="width:100%;height:830px;"></div>
  <!--<img class="mySlides w3-animate-fading" src="img2.jpg" style="width:100%;height:830px">-->
  <img class="mySlides w3-animate-fading" src="img3.jpg" style="width:100%;height:830px">

  <img class="mySlides w3-animate-fading" src="img4.jpg" style="width:100%;height:830px">
  
  <img class="mySlides w3-animate-fading" src="img5.jpg" style="width:100%;height:830px">
  
  <img class="mySlides w3-animate-fading" src="img6.jpg" style="width:100%;height:830px">
  
  <img class="mySlides w3-animate-fading" src="img7.jpg" style="width:100%;height:830px">
  
  <img class="mySlides w3-animate-fading" src="imG8.jpg" style="width:100%;height:830px">
  
  <img class="mySlides w3-animate-fading" src="img9.jpg" style="width:100%;height:830px">
</div>







<script >

var Index = 0;
myslider();

function myslider() {
    var i;
    var x = document.getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }

    Index++;
    if (Index > x.length) {Index = 1}    
    x[Index-1].style.display = "block";  
    setTimeout(myslider, 4000);    
}

</script>


 
 <footer>
  <p><u>Posted by:</u> <br>Sunny & Abhishek</p>
  <p><u>Call Us On:</u> <br>+91-9869311815</p>
  <p><u>Mail Us: </u><br><a href="mailto:snapit@gmail.com">
  snapit@gmail.com</a></p>
</footer>

 
</body>
</html>


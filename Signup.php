<?php
 require 'dbconfig/config.php';

?>

<?php
    if(isset($_POST['submit_btn']))
    {
        // echo '<script type="text/javascript">alert("Submit button clicked")</script>';
        $email=$_POST['email'];
        $password=$_POST['password'];
               
        if($password!='')
        {
            $query="select * from users WHERE email='$email'";
            $query_run=mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                echo '<script type="text/javascript">alert("User already Exist.try anothe email id")</script>';
            }
            else
            {
               $query="insert into users values ('','$email','$password')";
               $query_run=mysqli_query($con,$query);
                if($query_run)
                     echo '<script type="text/javascript">alert("Registeration successful....Go to login page to log in.")</script>';
                else
                     echo '<script type="text/javascript">alert("Failed to Register")</script>';
            }
        }
        else
             echo '<script type="text/javascript">alert("Enter correct matching password.")</script>';
        
    }
    
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
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}

</style>
<script type="text/javascript">
    function validate()                                              //validation
    {
     //alert("Inside validate");
     var email=document.SignIn.email.value;
     var password=document.SignIn.password.value;
     var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
     var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
     var error=[];
     if(!ck_email.test(email))
     {error[error.length]="Enter Your Valid Email Id";}
     if(!ck_password.test(password))
     {error[error.length]="Enter valid Password";}
     if (error.length > 0) 
     { reportErrors(error);
        return false; 
     } 
     else
     return true; 
      
     function reportErrors(error)
     { 
     var msg = "Please Enter Valide Data...\n";
     for (var i = 0; i<error.length;i++) 
     { var numError = i + 1; msg += "\n" +numError + ". " + error[i]; }
     alert(msg); }
     
    }
 
 </script> 

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
   
  
    </div>
  </li>
        </li>
</ul>
<div id="login">
<h1><strong>Welcome.</strong> Please Signup.</h1>
<form action="Signup.php" method="post" name="SignIn" onsubmit="return validate();">
<fieldset>
<p><input type="text" required value="Email ID" name="email" onBlur="if(this.value=='')this.value='Email ID'" onFocus="if(this.value=='Email IDl')this.value='' "></p>
<p><input type="password" required value="Password" name="password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
<input type="checkbox" name="RememberMe">Remember Me</input>
<p><input type="submit" name="submit_btn" value="SignUp" onclick="AboutUs.html"></p>
</fieldset>
</form>

</div>    


 <footer>
  <p><u>Posted by:</u> <br>Sunny & Abhishek</p>
  <p><u>Call Us On:</u> <br>+91-9869311815</p>
  <p><u>Mail Us: </u><br><a href="mailto:snapit@gmail.com">
  snapit@gmail.com</a></p>
</footer>

 
</body>
</html>


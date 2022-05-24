<?
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
         <link rel="stylesheet" href="css/font-awesome.min.css">
		<title>Electro - HTML Ecommerce Template</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->
       <style>
    /* body
{
  background:url('https://s-media-cache-ak0.pinimg.com/736x/f4/ac/6a/f4ac6aac3afb587f6cae04155656fca3.jpg');
} */

.containers
{
  width:550px;
  height:100%;
  margin-left:10px;
}

.pic
{
  box-shadow: 6px 6px 7px #888888;
  width:300px;
  height:300px;
  position: relative;
  overflow: hidden;
  margin-top:100px;
  margin-left:135px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.pic:before
{
  content: '';
  margin-top:-63px;
  margin-left:-80px;
  position: absolute;
  width: 450px;
  height: 450px;
  background: url('image/puppy.jpg') left center;
  background-size: cover;
  background-repeat: no-repeat;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.pic:hover , .box1:hover , .box2:hover , .social1:hover , .social2:hover , .social3:hover 
{
  box-shadow: 3px 3px 7px #888888;
  cursor:pointer;
}

.box1
{
  box-shadow: 6px 6px 7px #888888;
  width:100px;
  height:100px;
  position: relative;
  overflow: hidden;
  margin-top:-124px;
  margin-left:16px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.box1:before
{
  content: '';
  margin-top:-25px;
  margin-left:-31px;
  position: absolute;
  width: 200px;
  height: 200px;
  background: url('http://creek.themebucket.net/wp-content/uploads/2015/09/8.jpg') center center;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.box2
{
  box-shadow: 6px 6px 7px #888888;
  position: relative;
  overflow: hidden;
  width:194px;
  height:99px;
  margin-top:14px;
  margin-left:78px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
h1, h2, h3, h4, h5, h6 {
    color: #2B2D42;
    font-weight: 400;
    margin: 0 0 10px;
}
.box2:before
{
  
  content: '';
  margin-top:-74px;
  margin-left:-31px;
  position: absolute;
  width: 300px;
  height: 300px;
  background: url('http://i-cdn.phonearena.com/images/articles/220901-image/Here-is-how-the-start-screen-of-Google-Maps-looks-like.jpg') center center;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.social1
{
  box-shadow: 6px 6px 7px #888888;
  width:80px;
  height:80px;
  background-color:#3b5998;
  margin-top:-57px;
  margin-left:305px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.social1 > i
{
  font-size:40px;
  margin-top:13px;
  margin-left:20px;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  color:#ffffff;
}

.social2
{
  box-shadow: 6px 6px 7px #888888;
  width:80px;
  height:80px;
  background-color:#C73B6F;
  margin-top:-142px;
  margin-left:370px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.social2 > i
{
  font-size:0px;
  margin-top:8px;
  margin-left:13px;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  color:#ffffff;
}

.social3
{
  box-shadow: 6px 6px 7px #888888;
  width:80px;
  height:80px;
  background-color:#000000;
  margin-top:-143px;
  margin-left:435px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.social3 > i
{
  font-size:40px;
  margin-top:9px;
  margin-left:9px;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  color:#ffffff;
}

.content
{
  height:100%;
  width:500px;
}

p
{
  font-family: "Times New Roman", Times, serif;
}

h2
{
  font-family: "Times New Roman", Times, serif;
}

.contentHead
{
  font-family: "Times New Roman", Times, serif;
  font-size:30px;
  font-weight:300;
  text-decoration:underline;
}

sup
{
  font-family: "Times New Roman", Times, serif;
  font-style: normal;
  font-size:smaller;
}

span
{
  color:pink;
}


       </style>
    </head>
	<body>
		

			

	
<!-- about us -->

<div class="row">
<div class="containers col-lg-6 col-md-6">
  
  <div class="pic"></div>
  
  <div class="box1"></div>
  <div class="box2"></div>
  
  <div class="social1">
    <i class="fa fa-facebook" aria-hidden="true"></i> 
  </div>
  <div class="social2">
  <i class="fa-brands fa-instagram" aria-hidden="true"></i>

  </div>
  <div class="social3">
    <i class="fa fa-codepen" aria-hidden="true"></i>
  </div>
</div>

<div class="content col-md-offset-6 col-lg-offset-6">
  <center><h1 class="contentHead">ABOUT US</h1></center>
  
  <h2>Animall group <br/><br/>
  Being a pet owner is one of the best things in the world. And we understand because we're pet parents too. In fact, PetsJo.com was founded by people who love helping pets.
 
 
 We wanted to make the process of finding food, treats and all that good stuff easy to find--and deliver it straight to your doorstep.
 ...
 Headquartered in Amman, Jordan dedicated staff are committed to providing the kind of service that makes you go "wow." dedicated staff can ship the freshest, highest quality products--and fast. Our guys in customer service are here day and night to help. Bottom line is, we're here to make pet happiness happen.
    <br/><br/>
    Show your L<span>&hearts;</span>VE if you like my pen.
    <br/><br/>
    <p></p>
    <p><span style="text-align:right; color:#000000; font-size:12px;">* No matter what u say, that gal is sorta cute.</span></p>
  </h2>
</div>
</div>   






	

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
    <script>

    </script>
</html>

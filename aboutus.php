<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo111.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
  
   
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">
<div class="s_bg">
<div class="wrap">
<div class="cont_main">
	<div class="content">
		<img src="Images/ab.png" height="70px"  />
			<h4><span class="bold">News Letter from the Founders</span></h4>
			<p><img src="Images/12345.jpg" height="200px" style="margin-bottom:40px" /></a>'RajaRajeswari Medical College & Hospital Blood Bank in Bangalore run by Moogambigai Charitable trust was established in October 2004, bearing license No: KTK 28C/173/2004. Started off with whole Blood service & license and was renewed in 2011.Processing of Blood Components commenced in Dec 2011..</p>
			<p class="top">All activities related to the transfusion of Blood / Blood components is in accordance to the Drugs and Cosmetics Act 1945 issued by Government of India, NACO guide lines. Blood Bank has an area as per Drug Controller requirement..
The Blood Bank is responsible for creating awareness amongst the patients as well as the common public by organizing various blood camps in and around the campus on various occasions.</p>
			<p class="top">We also take this opportunity to thank our whole team for all your ideas, commitment and hard-ship in making this dream a reality. We would also like to thank our friends and well-wishers for all your support and encouragement throughout this project. It is now reasonably safe to say that together we have made this society a slightly better and safer place to live.</p>
		<p class="top">Thank you and Happy Blood donating!</p>	
        <p class="top"> About rrmch</p>
<p></p>
<p></p>
        <p class="top">Promoters,</p>
<p>Blood Bank RRMCH.</p>
       
	</div>
	<div class="sidebar">
			<div>  
<br /><br /><br /><br /><br />
			       <div>
                       <img src="Images/doc22.jpg" width="250px" height="200px" class="tableborder" />
						<br /><br />
                            <img src="Images/camp111.jpg" width="250px" height="500px" class="tableborder" />
                            
				  </div>
				 
					 <div class="clear"></div>	
				</div>	
	</div>
	
</div>
</div>
		
</form>
</div>

       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
		
	
</div>


<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>
<?php
include('../config.php');
session_start();

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>My Movie Tickets</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="../css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='../js/jquery.color-RGBa-patch.js'></script>
<script src='../js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			<h1><span class="highlight"><font font color="#e51048">My</font><font color="#eddadf"> Movie Tickets</font></span></h1>
		</div>
			  <div class="nav-wrap">
					
                    &nbsp;&nbsp;&nbsp;
                    <ul class="group" id="example-one">
            <li class="active"><a href="chngpwd.php">Change Password</a></li>   
            <li><a href="updateprofile.php">Update Profile</a></li>            
            
            <li><a href="../index.php">Home</a></li>
            <li><?php if(isset($_SESSION['user'])){
                       $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="../profile.php"><?php echo $user['name'];?></a><a href="../logout.php">Logout</a><li><a href="../donor">Manage Account</a></li><?php }else{?><a href="../login.php">Login</a><?php }?></li>
           
            </ul>
			  </div>
 			<div class="clear"></div>
   		</div>
    </div>
     			<div class="clear"></div>
   	
<div class="block">
	<div class="wrap">
		
        <form action="../process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                                <input type="text" placeholder="Search Movies Here..." style="height:27px;width:500px"  required id="search111" name="search">
                                
                                <input type="submit" value="Search" style="height:28px;padding-top:4px" id="button111">
    </div>       	

		       </fieldset>
            </form>
            <div class="clear"></div>
   </div>
</div>
<script>
function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter movie name...");
            return false;
        }
    else{
        return true;
    }
    </script>
}
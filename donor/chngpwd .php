<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
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



<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Blood</span> Donation</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.php" >Home</a></li>
                        <li><a href="../about.html">About</a></li>
                         <li><a href="../requests.php">Request Blood</a></li>
                        <li><a href="../search.php">Search</a></li>
                    </ul>
                </nav>
            </div>
        </header>

<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			<li class="active"><a href="chngpwd.php">Change Password</a></li>	
			<li><a href="updateprofile.php">Update Profile</a></li>            
			<li><a href="viewrequest.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</div>
<div style="height:400px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
<form method="post">
     <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center"><h1>Change Password</h1></td></tr>
   
        <tr><td class="lefttd"  style="vertical-align:middle"> Old Password </td><td><input type="password" name=Password  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> New Password:</td><td><input type="password" name="password"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for new password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        

		<tr><td>&nbsp;</td><td><input type="submit" value="Change" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></td></tr></table>	
        </form>
	</div>
	

      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
		<div class="copy">
			<p class="title">© All Rights Reserved | Blood Donation</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
<?php include('function.php'); ?>
<?php
    if (isset($_POST["sbmt"])) {
      $conn=makeconnection();
          $q="select * from tbl_login where username='" .$_SESSION['email'] ."' and password='" .$_POST['Password']. "'";
      $s=mysqli_query($conn,$q);
      $r=mysqli_num_rows($s); 

      if ($r>0) {
          # code...
        $q1="update tbl_login set password='" .$_POST['password']. "' where username='" .$_SESSION['Email']. "'";
        mysqli_query($conn,$s1);
        mysqli_close($conn);
        echo "<script>alert('Record updated');</script>";


        }  
      # code...
        else{
          echo "<script>alert('Record not Updated');</script>";
        }
    }



    ?>
</body>
</html>
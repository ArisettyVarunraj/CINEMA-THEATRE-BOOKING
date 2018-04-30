<?php include('header.php');?>
</div>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>

  
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


<div class="nav_bg">

<div style="height:400px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
<form method="post">
     <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center"><h1>Change Password</h1></td></tr>

   
        <tr><td class="lefttd"  style="vertical-align:middle"> Old Password </td><td><input type="password" name=Password1  required="required"  title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> New Password:</td><td><input type="password" name="password1"  required="required"  title="please enter only character or numbers between 2 to 10 for new password" size="16" minlength ="7" /></td></tr>
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
			<p class="title">© All Rights Reserved | Movie Tickets website</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>


<?php


    if (isset($_POST["sbmt"])) {
        if(isset($_SESSION['user'])){
      
         
      $us=mysqli_query($con,"select * from tbl_login where user_id='".$_SESSION['user']."' and password='" .$_POST['Password1']. "'");
      $r=mysqli_num_rows($us); 

      if ($r>0) {
          # code...
        $q1="update tbl_login set password='" .$_POST["password1"]. "' where user_id='".$_SESSION['user']. "'";
        mysqli_query($con,$q1);
        mysqli_close($con);
        echo "<script>alert('Record updated');</script>";


        }  
      # code...
        else{
          echo "<script>alert('Record not Updated');</script>";
        }
    }
    }



    ?>
</body>
</html>
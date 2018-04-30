<?php include('header.php');?>
</div>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Profile</title>

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

<?php if(isset($_SESSION['user'])){
                       $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?>
<?php if(isset($_SESSION['user'])){
                       $us1=mysqli_query($con,"select * from tbl_details where user_id='".$_SESSION['user']."'");
        $user1=mysqli_fetch_array($us1);?>        



<div class="nav_bg">

<div style="height:700px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;" >
<form method="post">
     <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center"><h1>Update Profile</h1></td></tr>
   
        <tr><td class="lefttd"  style="vertical-align:middle"> User name </td><td><input type="text" name="username1"  required="required" value="<?php echo $user['name']; ?>" place holder="" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         
         <tr><td class="lefttd"  style="vertical-align:middle"> Phone number </td><td><input type="numbers" name="username3"  required="required" value="<?php echo $user['phone']; ?>" place holder="" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> Age </td><td><input type="numbers" name="username4"  required="required" value="<?php echo $user['age']; ?>" place holder="" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> Gender </td><td><input type="text" name="username5"  required="required" value="<?php echo $user['gender']; ?>" place holder="" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> Date of Birth </td><td><input type="date" name="username6"  required="required" value="<?php echo $user1['dob']; ?>" place holder=""  /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> Address </td><td><input type="text" name="username7"  required="required" value="<?php echo $user1['address']; ?>" place holder=""  /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> Id Proof</td><td><input type="file" name="username8"  required="required" value="<?php echo $user1['id_proof']; ?>" place holder=""  /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> Aadhaar Verification </td><td><input type="text" name="usernamex"  placeholder ="KYC approval field" place holder=""  /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> FingerPrint </td><td><input type="text" name="usernamey"  placeholder ="FingerPrint" place holder=""  /></td></tr>
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
            <p class="title">© All Rights Reserved | My Movie Tickets website</p>
        </div>
    <div class="clear"></div>
</div>
</div>
</div>
<?php } ?>
<?php } ?>

<?php


    if (isset($_POST["sbmt"])) {
        if(isset($_SESSION['user'])){
      
         
      $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
      $r=mysqli_num_rows($us); 
      $us1=mysqli_query($con,"select * from tbl_details where user_id='".$_SESSION['user']."'");
      $r2=mysqli_num_rows($us1);

      if ($r>0 && $r2>0) {
          # code...
        $q1="update tbl_registration set name='".$_POST["username1"]."',phone='".$_POST["username3"]."',age='".$_POST["username4"]."',gender ='".$_POST["username5"]."' where user_id='".$_SESSION['user']. "'";
        mysqli_query($con,$q1);
        $q2="update tbl_details set dob='".$_POST['username6']."', address='".$_POST['username7']."', id_proof='".$_POST['username8']."'where user_id='".$_SESSION['user']."'";
        mysqli_query($con,$q2);
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
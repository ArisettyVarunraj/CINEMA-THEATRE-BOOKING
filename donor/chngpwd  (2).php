<!DOCTYPE html>
<html>
<head>
  <title>Edit Password</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
  <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Libraria</a>
                </div>        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                       <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#gallery">Categories</a></li>
                        <li><a href="#contact">Contact</a></li>  
                        <li><a href="profile.php">My profile</a></li>  
                        <li><a href="login.php">Log Out</a></li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->   
    </header><!--/header--> 
    <div class="row height">
      
    </div>
    <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-5">
      <h2>Change Password</h2>
      <div class="row">
          <div class="col-xs-6 col-md-10">
            <div class="thumbnail">
              <div class="row">
                <div class="col-md-12 font">
                  Use the form below to change the password for your Libraria account
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-md-6"><b>New Password:</b></div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pass" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6"><b>Re-enter Password:</b></div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pass1" required>
                </div>
              </div>
            </div>
            <input type="submit" value="Change" name="submit" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
          </div>
          
      </div>
    </div>
  </div>
  <?php include("function.php") ?>
  <?php
    if (isset($_POST["submit"])) {
      $conn=makeconnection();
          $q="select * from tbl_login where username='" .$_SESSION['email'] ."' and password='" .$_SESSION['pass']. "'";
      $s=mysqli_query($conn,$q);
      $r=mysqli_num_rows($s); 

      if ($r>0) {
          # code...
        $q1="update tbl_login set password='" .$_POST['pass1']. "' whefre username='" .$_SESSION['email']. "'";
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
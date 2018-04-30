
<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
  <?php
    include('form.php');
    $frm=new formBuilder;      
  ?> 
</div>
<div class="content">
    <div class="wrap">
        <div class="content-top">

<h3>Payment Methods</h3>

<ul class="group" id="example-one">
              
            <li><a href="process_booking.php">Credit Card</a></li> 
            <li><a href="process_booking11.php">Saved Cards</a></li>            
            <li><a href="wallet.php">My Wallet</a></li> 
            </ul>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>

<?php include('footer.php');?>
<?php
    
    extract($_POST);
    include('config.php');
    $_SESSION['screen'];
    $_SESSION['seats'];
    $_SESSION['amount'];
    $_SESSION['date'];
    
    
?>

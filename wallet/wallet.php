
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
            <h3>Payment</h3>
            <form action="bank_wallet.php" method="post" id="form1">
            <div class="col-md-4 col-md-offset-4" style="margin-bottom:50px">
            <table class="table table-bordered">
                        <h3>Wallet</h3>
                        <tbody>
                            <tr>
                                <td>Wallet Amount</td>
                                <td><?php
             
             $qry2=mysqli_query($con,"select * from  tbl_wallet ");
        
              while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    
                                <h4 class="h-text"><?php echo $m['wallet_bal']?></h4>
                                
                                
                            </td>

                            </tr>
                            <tr>
                                <td>Total Amount</td>
                                <td><?php echo $_SESSION['amount']; ?></td>
                                
                            </tr>

                        </tbody>
                    </table>


<?php
if ($_SESSION['amount']<$_SESSION['wallet_bal']) {
    # code...
$_SESSION['wallet_bal']=$m['wallet_bal']-$_SESSION['amount'];
 }
else{
    $_SESSION['error']="Payment Failed";
    echo "no enough balance";
}
            
            ?> 
            <?php }?>                       
<div class="form-group">
   <label class="control-label">Promo Code</label>
    <input type="text" class="form-control" name="cvv">
</div>
<div class="form-group">
    <button class="btn btn-success">Make Payment</button>
    </form>
</div>
</div>
            </div>
            
        <div class="clear"></div>   
        
    </div>
<?php include('footer.php');?>
</div>
<?php
    
    extract($_POST);
    include('config.php');
    $_SESSION['screen'];
    $_SESSION['seats'];
    $_SESSION['amount'];
    $_SESSION['date'];
    
?>
<?php


 ?>

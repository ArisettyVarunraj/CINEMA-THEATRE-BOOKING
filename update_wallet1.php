
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
<ul class="group" id="example-one">
              
            <li><a href="update_wallet1.php">Saved Cards</a></li>            
            <li><a href="update_wallet.php">Credit Card</a></li> 
            </ul>
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
                            

                        </tbody>
                    </table>
                     <?php }?> 
<div class="content">
    <div class="wrap">
        <div class="content-top">
            <h3>Payment</h3>
            <form action="bank3.php" method="post" id="form1">
            <div class="col-md-4 col-md-offset-4" style="margin-bottom:50px">
            <div class="form-group">
   <label class="control-label">Name on Card</label>
    <input type="text" class="form-control" name="name" value="vini">
</div>
<div class="form-group">
   <label class="control-label">Card Number</label>
    <input type="text" class="form-control" name="number" value="1234567891234567" required title="Enter 16 digit card number">
  
</div>      
<div class="form-group">
   <label class="control-label">Expiration date</label>
    <input type="text" class="form-control" name="number" value="01-01-2020">
</div>
<div class="form-group">
   <label class="control-label">CVV</label>
    <input type="text" class="form-control" name="cvv" value="185">
</div>

<div class="form-group">
   <label class="control-label">Amount</label>
    <input type="text" class="form-control" name="wallet_bal">
  
</div>     
<div class="form-group">
    <button class="btn btn-success" name="sbmtt">Make Payment</button>
    </form>
</div>
</div>
            </div>
            
        <div class="clear"></div>   
        
    </div>
<?php include('footer.php');?>
</div>


<script>
        $(document).ready(function() {
            $('#form1').bootstrapValidator({
            fields: { 
            name: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The Name is required and can\'t be empty'
                    },regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'The Name can only consist of alphabets'
                    } } },
            number: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The Card Number is required and can\'t be empty'
                    },stringLength: {
                    min: 16,
                    max: 16,
                    message: 'The Card Number must 16 characters long'
                },regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid Card Number'
                    } } },
            date: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The Expire Date is required and can\'t be empty'
                    } } },
            cvv: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The cvv is required and can\'t be empty'
                    },stringLength: {
                    min: 3,
                    max: 3,
                    message: 'The cvv must 3 characters long'
                },regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid cvv'
                    } } }
                    }
            });
            });

</script>

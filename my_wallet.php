<?php include('header.php');?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<h3>My Wallet</h3>
			
			<ul class="group" id="example-one">
              
            <li><a href="add_wallet.php">Add Money</a></li>            
            <li><a href="update_wallet.php">Update Wallet</a></li> 
            </ul>
			<?php
          	 
          	 $qry2=mysqli_query($con,"select * from  tbl_wallet where user_id='".$_SESSION['user']."' ");
		
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<h3>Wallet Balance</h3>
						  	<div class="movie-text">
						  		<h4 class="h-text"><?php echo $m['wallet_bal']?></h4>
						  		
						  		
						  	</div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}
  	    	?>
			
			</div>
				<div class="clear"></div>		
			</div>
			<?php include('footer.php');?>
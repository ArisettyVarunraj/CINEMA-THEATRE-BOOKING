<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_SESSION['user']."'")or die("No Booked movies");
	$movie=mysqli_fetch_array($qry2);
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3>Enter Ticket Id</h3>
						<form method="post">
						<select name="s2" required><option value="">Select</option>

						<?php
										$bk=mysqli_query($con,"select * from tbl_bookings where user_id='".$_SESSION['user']."'");
						$r=mysqli_num_rows($bk);
	//echo $r;
	while($data=mysqli_fetch_array($bk))
	{
		if(isset($_POST["user"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
						 ?></select>
	<input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">					
					</form>	
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');?>
<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>

<?php
if (isset($_POST['sbmt'])) {
		echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";

	# code...
}

?>

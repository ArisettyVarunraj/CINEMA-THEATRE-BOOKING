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
						<h3>BOOKINGS</h3>
						<?php include('msgbox.php');?>
						<?php
				$bk=mysqli_query($con,"select * from tbl_bookings where user_id='".$_SESSION['user']."' and book_id='".$_REQUEST['bg']."'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table class="table table-bordered">
						<thead>
						<th>User Name</th>	
						<th>Booking Id</th>
						<th>Movie</th>
						<th>Release Date</th>
						<th>Theatre</th>
						<th>Screen</th>
						<th>Show</th>
						<th>Seats</th>
						<th>Amount</th>
						
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($con,"select * from tbl_movie where movie_id=(select movie_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$mov=mysqli_fetch_array($m);
							$s=mysqli_query($con,"select * from tbl_screens where screen_id='".$bkg['screen_id']."'");
							$srn=mysqli_fetch_array($s);
							$tt=mysqli_query($con,"select * from tbl_theatre where id='".$bkg['t_id']."'");
							$thr=mysqli_fetch_array($tt);
							$st=mysqli_query($con,"select * from tbl_show_time where st_id=(select st_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$stm=mysqli_fetch_array($st);
							$use=mysqli_query($con,"select name from tbl_registration where user_id='".$_SESSION['user']."'");
							$uss=mysqli_fetch_array($use)
							?>
							<tr>
								<td>
									<?php echo $uss['name'];?>
								</td>
								<td>
									<?php echo $bkg['ticket_id'];?>
								</td>
								<td>
									<?php echo $mov['movie_name'];?>
								</td>
								<td>
									<?php echo $mov['release_date'];?>
								</td>
								<td>
									<?php echo $thr['name'];?>
								</td>
								<td>
									<?php echo $srn['screen_name'];?>
								</td>
								<td>
									<?php echo $stm['name'];?>
								</td>
								<td>
									<?php echo $bkg['no_seats'];?>
								</td>
								<td>
									Rs <?php echo $bkg['amount'];?>
								</td>
								
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3>No Previous Bookings</h3>
					<?php
				}
				?>
					</div>			
				<?php include('movie_sidebar.php');?>
				
			</div>
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
<?php  session_start();
//Connect the Dbase
include 'mysqlconnect.php';

?>

<!-- Header -->
<?php include 'header.php'; ?>   
<!-- Header -->

<?php

// echo " Ride id = ".$booking_ride_id;
$booking_slno=rand(786,786788886)."|".date('dmhsi');

$booking_passengernum=$_SESSION['booking_passengernum'] ;
$booking_pickuptime =$_SESSION['booking_pickuptime'];
$booking_pickupdate=$_SESSION['booking_pickupdate'];
$booking_pickupaddress=$_SESSION['booking_pickupaddress'] ;
$booking_dropoffaddress =$_SESSION['booking_dropoffaddress'];
$booking_ride_id =$_SESSION['booking_ride_id'];
$booking_numofcars=$_SESSION['booking_numofcars'] ;
$available_cars=$_SESSION['available_cars'];
$ride_cost = $_SESSION['ride_cost'];
$booking_cost = $_SESSION['booking_cost'];
	$booking_days=$_SESSION['booking_days'];

// echo $_SESSION['username'];



?>
 <!-- <script type="text/javascript">alert('NOT inserted! ! ! Error!!')</script> -->



			<div class="row m-1">
				<div class="col-md-10 offset-md-1 border border-dark p-2" style="border-width: 20px !important;">
					<div class="border border-dark m-1 p-4">

						<h2 class="text-dark align-middle mb-4 p-2 align-middle border border-dark">
							Booking Form
						</h2>

							  <div class="row">
							  		<!-- ------------- -->
							  		<?php 
							  			include 'mysqlconnect.php';
							            $query= "SELECT*FROM rides WHERE ride_id='$booking_ride_id'";
							            //ride_type,ride_name,ride_image,ride_passengercap,ride_baggagecap
							            $result= mysqli_query($con, $query);
							            $num_rows=mysqli_num_rows($result);
							            if ($num_rows > 0){
							              while ($row = mysqli_fetch_assoc($result)){
									?>

<div class="col-md-10 offset-md-2 col-sm-10 border border-dark" style="border-width: 6px !important;margin-left: 24px !important;
                                                margin-bottom: 12px !important;">
						                        <div class="row " >
						                          <div class="col-md-2 align-middle">
						                            <img src="<?php echo $row['ride_image']; ?>" class="img-fluid" alt="" style="height: 100px !important; ">
						                          </div>

						                            <div class="col-md-10 text-left">
						                                <div class="">
						                                  <h4 class="text-info bg-dark p-1">Car Type : <?php echo $row['ride_type']; ?></h4>
						                                  <h5 class="card-title">Car Name: <?php echo $row['ride_name']; ?></h5>
						                                  <h6 class="">Passengers : <?php echo $row['ride_passengercap']; ?> max </h6>
						                                  <h6  class="card-title ">Baggage : <?php  echo $row['ride_baggagecap']; ?> Kgs</h6>
						                                  <h6  class="card-title ">No of Cars : <?php  echo $row['ride_count']; ?></h6>
						                                  <?php 
														  	//$_SESSION['available_cars']=$row['ride_count_status']; 
														  	//$_SESSION['ride_cost']=$row['ride_cost']; 
														  ?>
						                                  <h6  class="card-title ">Available Cars : <?php echo $row['ride_count_status']; ?></h6>
						                                  <h6  class="card-title ">Cost Cars : <?php echo $row['ride_cost']; ?></h6>
						                                </div>
						                            </div>
						                         </div>
						                     </div>
									<?php 
											}
										} 
									?>

							  		<!-- ------------- -->
							  </div>
<!-- //INSERT INTO `booking`(`booking_id`, `booking_slno`, `booking_time`, `booking_date`, `booking_name`, `booking_mobile`, `booking_email`, `booking_passengernum`, `booking_pickuptime`, `booking_pickupdate`, `booking_pickupaddress`, `booking_dropoffaddress`, `booking_ride_id`, `booking_numofcars`, `booking_bkashno`, `booking_bkashtxid`, `username`, `booking_cost`, `booking_days`)  -->

						<form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
							<?php 
								$booking_slno=rand(786,786786)."".date('dmhsi');
							 ?>
							<h4>Booking ID : <?php echo $booking_slno; ?> </h4>
							<input type="hidden" name="booking_slno" value="<?php echo $booking_slno; ?>">
							<div class="form-row">
								<label><h6>Date: <?php echo $date; ?></h6></label>
							    <input type="hidden" name="booking_date" class="form-control" id="validationCustom01" value="<?php echo $date; ?>"  required>

							
								<label><h6>Time: <?php echo $time; ?></h6></label>
							    <input type="hidden" name="booking_time" class="form-control" id="validationCustom01"  value="<?php echo $time; ?>"  required>
							    <hr>
							</div>
							  
							  <h4>Travel Details : </h4>
							  <hr>
							  <div class="form-row">
							  	<div class="col-md-4 mb-3">
							  		<h5>
							  			Cost:<?php //$booking_cost=$booking_days.$booking_passengernum.$ride_cost;
							  			echo $booking_cost; ?> TK
							  			<input type="hidden" name="booking_cost" value="<?php echo $booking_cost; ?>">
							  		</h5>
							  	</div>
							  </div>
							  
							   <div class="form-row">
							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Number of Passengers</label>
							      <input type="number" name="booking_passengernum" class="form-control" id="validationCustom01" placeholder="<?php echo $booking_passengernum; ?>" value="<?php echo $booking_passengernum; ?>" >
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>

							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Pick up Time</label>
							      <input type="text" name="booking_pickuptime" class="form-control" id="validationCustom01" placeholder="<?php echo $booking_pickuptime; ?>" value="<?php echo $booking_pickuptime; ?>" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Pick up Date</label>
							      <input type="text" name="booking_pickupdate" value="<?php echo $booking_pickupdate; ?>" class="form-control" placeholder="<?php echo $booking_pickupdate; ?>" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>

							  </div>

							  <div class="form-row">
							    <div class="col-md-12 mb-3">
							      <label for="validationCustom01">Pickup Address</label>
							      <input type="textbox" name="booking_pickupaddress" value="<?php echo $booking_pickupaddress; ?>" class="form-control" id="validationCustom01" placeholder="<?php echo $booking_pickupaddress; ?>" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							  </div>
							  <div class="form-row">
							    <div class="col-md-12 mb-3">
							      <label for="validationCustom01">Drop off Address</label>
							      <input type="text" name="booking_dropoffaddress" class="form-control" id="validationCustom01" placeholder="<?php echo $booking_dropoffaddress; ?>" value="<?php echo $booking_dropoffaddress; ?>">
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							  </div>

							  <div class="form-row">
							    <div class="col-md-3 mb-3">
							      <input type="hidden" name="booking_ride_id" class="form-control" value="<?php echo $booking_ride_id ?>" required>
							      <label for="validationCustom01">Number of Cars</label>
							      <input type="text" name="booking_numofcars" class="form-control" value="<?php echo $booking_numofcars; ?>"  placeholder="<?php echo $booking_numofcars; ?>" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-3 mb-3">
							      
							      <label for="validationCustom01">Number of days</label>
							      <input type="text" name="booking_days" value="<?php echo $booking_days; ?>" class="form-control" id="validationCustom01" placeholder="<?php echo $booking_days; ?>"required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							</div>
								<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" placeholder="<?php echo $_SESSION['username']; ?>" >
								<h4>Payment Details : </h4>
								<h3 class="text-danger">Please Pay your Booking Charge by Bkash on the below number: 01700123456</h3>
							  <div class="form-row">
							    <div class="col-md-4 mb-3">
							      
							      <label for="validationCustom01">Bkash sender number </label>
							      <input type="text" name="booking_bkashno" class="form-control" id="validationCustom01" placeholder="019xxxxxxxx" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    
							    <div class="col-md-6 mb-3">
							      
							      <label for="validationCustom01">Bkash Transaction ID </label>
							      <input type="text" name="booking_bkashtxid" class="form-control" id="validationCustom01" placeholder="Transaction ID" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    
							</div>
							<h4>Personal Details : </h4>
							<div class="form-row">
							    <div class="col-md-7 mb-3">
							      <label for="validationCustom01">Name</label>
							      <input type="text" name="booking_name" class="form-control" id="validationCustom01" placeholder="Enter Name or Type <?php echo $_SESSION['username']; ?>"  required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Mobile no</label>
							      <input type="text" name="booking_mobile" class="form-control" id="validationCustom01" placeholder="Mobile " required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-6 mb-3">
							      <label for="validationCustom01">Email </label>
							      <input type="email" name="booking_email" class="form-control" id="validationCustom01" placeholder="email@mail.com " required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							  </div>

							<input type="submit" value="Confirm" class="text-info btn btn-dark" name="submit">
						</form>
					</div>
					
				</div>
			</div>

<!-- Form Item Input -->


<?php 

if(isset($_POST['submit']))
{	
	$booking_slno=$_POST['booking_slno'];
	$booking_time=$_POST['booking_time'];
	$booking_date=$_POST['booking_date'];
	$booking_name=$_POST['booking_name'];
	$booking_mobile=$_POST['booking_mobile'];
	$booking_email=$_POST['booking_email'];
	$booking_passengernum=$_POST['booking_passengernum'];
	$booking_pickuptime=$_POST['booking_pickuptime'];
	$booking_pickupdate=$_POST['booking_pickupdate'];
	$booking_pickupaddress=$_POST['booking_pickupaddress'];
	$booking_dropoffaddress=$_POST['booking_dropoffaddress'];
	$booking_ride_id=$_POST['booking_ride_id'];
	$booking_numofcars=$_POST['booking_numofcars'];
	$booking_bkashno=$_POST['booking_bkashno'];
	$booking_bkashtxid=$_POST['booking_bkashtxid'];
	$username=$_SESSION['username'];
	$booking_cost=$_POST['booking_cost'];
	$booking_days=$_POST['booking_days'];


	$in="INSERT INTO booking(booking_slno, booking_datetime, booking_time, booking_date, booking_name, booking_mobile, booking_email, booking_passengernum, booking_pickuptime, booking_pickupdate, booking_pickupaddress, booking_dropoffaddress, booking_ride_id, booking_numofcars, booking_cost, booking_days, booking_status, username, booking_bkashno, booking_bkashtxid) VALUES ('$booking_slno', '$booking_datetime', '$booking_time', '$booking_date', '$booking_name', '$booking_mobile', '$booking_email', '$booking_passengernum', '$booking_pickuptime', '$booking_pickupdate', '$booking_pickupaddress', '$booking_dropoffaddress', '$booking_ride_id', '$booking_numofcars', '$booking_cost', '$booking_days', '$booking_status', '$username', '$booking_bkashno', '$booking_bkashtxid')";
	if(mysqli_query($con,$in))
	{
	echo "Your booking is successfully submitted. Now please wait for our agent to call back to confirm the booking. Thankyou";
	// echo "<script>window.location.assign('thanksbooking.php')</script>";
	}
	else {

		echo "!NOT Submitted NOT!!! ERROR!! Please submit again. Thankyou...";
		// echo "<script type='text/javascript'>alert('!!NOT Submitted NOT!!! ERROR!! Please submit again. Thankyou...')</script>";
	}

	//CAr available
	$available_cars=$available_cars-$booking_numofcars;
	$in="UPDATE rides SET ride_count_status='$available_cars' WHERE ride_id='$booking_ride_id'";
	if(mysqli_query($con,$in))
	{
	// echo "<script type='text/javascript'>alert('Your booking is successfully submitted. Now please wait for our agent to call back to confirm the booking. Thankyou!')</script>";
	echo "Your booking is successfully submitted. Now please wait for our agent to call back to confirm the booking. Thankyou";
	echo "<script>window.location.assign('thanksbooking.php')</script>";
	}
	else {
		echo "<script type='text/javascript'>alert('!!NOT Submitted NOT!!! ERROR!! Please submit again.')</script>";
	}

}	

?>



 <!-- Footer -->
 <?php include 'footer.php'; ?>
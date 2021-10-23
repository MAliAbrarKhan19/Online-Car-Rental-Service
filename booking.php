<?php  session_start();
//Connect the Dbase
include 'mysqlconnect.php';

?>

<!-- Header -->
<?php include 'header.php'; ?>   
<!-- Header -->

<?php

//
if (isset($_GET['action'])) {
	if ($_GET['action']== 'booking') {
		$booking_ride_id=$_GET['id'];
	}
}
// echo " Ride id = ".$booking_ride_id;

include 'mysqlconnect.php';



if(isset($_POST['submit'])){
	


	$booking_time= mysqli_real_escape_string($con,$_POST['booking_time']);
	$booking_date= mysqli_real_escape_string($con,$_POST['booking_date']);
	$booking_name= mysqli_real_escape_string($con,$_POST['booking_name']);
	$booking_mobile= mysqli_real_escape_string($con,$_POST['booking_mobile']);
	$booking_email= mysqli_real_escape_string($con,$_POST['booking_email']);
	$booking_passengernum= mysqli_real_escape_string($con,$_POST['booking_passengernum']);
	$booking_pickuptime= mysqli_real_escape_string($con,$_POST['booking_pickuptime']);
	$booking_pickupdate= mysqli_real_escape_string($con,$_POST['booking_pickupdate']);
	$booking_pickupaddress= mysqli_real_escape_string($con,$_POST['booking_pickupaddress']);
	$booking_dropoffaddress= mysqli_real_escape_string($con,$_POST['booking_dropoffaddress']);
	$booking_ride_id= mysqli_real_escape_string($con,$_POST['booking_ride_id']);
	$booking_numofcars= $_POST['booking_numofcars'];
	$available_cars=$_SESSION['available_cars'];
	
	echo "available_cars ".$available_cars." \  booking_numofcars ".$booking_numofcars."booking_ride_id ".$booking_ride_id;

	if ($booking_numofcars>$available_cars) {
		echo "<script>alert('Cars not avaiable!!');</script>";
		//echo "<script>window.location.assign('index.php')</script>";
	} else {

		include 'mysqlconnect.php';

		$available_cars= $available_cars-$booking_numofcars;
		include 'mysqlconnect.php';
		$i="UPDATE rides SET ride_status='$available_cars'WHERE ride_id='$booking_ride_id' ";
		if(mysqli_query($con,$i))
		{
		echo "<script type='text/javascript'>alert('Ride Updated!Car avaiable!!')</script>";
		}
		else {
			echo "<script type='text/javascript'>alert('!!NOT Submitted  Successfully.! ! ! ERROR!!CAR NOT Updated.')</script>";
		}

		// $in="INSERT INTO booking(booking_time,booking_date,booking_name,booking_mobile,booking_passengernum,booking_pickuptime,booking_pickupdate,booking_pickupaddress,booking_dropoffaddress,booking_ride_id,booking_numofcars) VALUES ('$booking_time','$booking_date','$booking_name','$booking_mobile','$booking_passengernum','$booking_pickuptime','$booking_pickupdate','$booking_pickupaddress','$booking_dropoffaddress','$booking_ride_id','$booking_numofcars')";

		// if(mysqli_query($con, $in))
		// {
		// echo "<script type='text/javascript'>alert('Your booking is successfully submitted. Now please wait for our agent to call back to confirm the booking. Thankyou!')</script>";
		// echo "<script>window.location.assign('thanksbooking.php')</script>";
		// }
		// else {
		// 	echo "<script type='text/javascript'>alert('!!NOT Submitted  Successfully.! ! ! ERROR!!Please submit again. Thankyou...')</script>";
		// }

		
	}
	
		
}



?>

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
						                                  <?php $_SESSION['available_cars']=$row['ride_count_status']; ?>
						                                  <h6  class="card-title ">Available Cars : <?php echo $row['ride_count_status']; ?></h6>
						                                  <h6  class="card-title ">Cost Cars : <?php echo $row['ride_cost']; ?></h6>
						                                </div>
						                                </div>
						                         </div>
						                     </div>
						                 </div>
									<?php 
											}
										} 
									?>
							  </div>
						<form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
							<div class="form-row">
								<label><h6>Date: <?php echo $date; ?></h6></label>
							    <input type="hidden" name="booking_date" class="form-control" id="validationCustom01" value="<?php echo $date; ?>"  required>

							</div>
							<div class="form-row">
								<label><h6>Time: <?php echo $time; ?></h6></label>
							    <input type="hidden" name="booking_time" class="form-control" id="validationCustom01"  value="<?php echo $time; ?>"  required>

							</div>
							  <div class="form-row">
							    <div class="col-md-7 mb-3">
							      <label for="validationCustom01">Name</label>
							      <input type="text" name="booking_name" class="form-control" id="validationCustom01" placeholder="Name"  required>
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
							  </div>
							  <div class="form-row">
							    <div class="col-md-7 mb-3">
							      <label for="validationCustom01">Email </label>
							      <input type="email" name="booking_email" class="form-control" id="validationCustom01" placeholder="email"  required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    
							  </div>
							  <h4>Travel Details : </h4>
							  <div class="form-row">

							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Number of Passengers</label>
							      <input type="text" name="booking_passengernum" class="form-control" id="validationCustom01" placeholder="Number of people to travel" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Pick up Time</label>
							      <input type="time" name="booking_pickuptime" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Pick up Date</label>
							      <input type="date" name="booking_pickupdate" class="form-control" id="validationCustom01" placeholder="Date" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>

							  </div>

							  <div class="form-row">
							    <div class="col-md-6 mb-3">
							      <label for="validationCustom01">Pickup Address</label>
							      <input type="textbox" name="booking_pickupaddress" class="form-control" id="validationCustom01" placeholder="Rd#0 House#00 Street name..,City.." required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-6 mb-3">
							      <label for="validationCustom01">Drop off Address</label>
							      <input type="text" name="booking_dropoffaddress" class="form-control" id="validationCustom01" placeholder="Rd#0 House#00 Street name.." required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							  </div>

							  <div class="form-row">
							    <div class="col-md-6 mb-3">
							      <input type="hidden" name="booking_ride_id" class="form-control" value="<?php echo $booking_ride_id ?>" required>
							      <label for="validationCustom01">Number of Cars</label>
							      <input type="text" name="booking_numofcars" class="form-control" id="validationCustom01" placeholder="1" required>
							      <?php $available_cars=$_SESSION['available_cars']; ?>
							      <input type="hidden" name="available_cars=" value="<?php echo $available_cars;?>">
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							</div>

							<input type="submit" value="Submit" class="text-info btn btn-dark" name="submit">
						</form>
					</div>
					
				</div>
			</div>

<!-- Form Item Input -->






 <!-- Footer -->
 <?php include 'footer.php'; ?>
<?php  session_start();
//Connect the Dbase
include 'mysqlconnect.php';
error_reporting(E_ALL);
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
$available_cars=0;


if(isset($_POST['submit']))
{	

	
	$booking_passengernum= $_POST['booking_passengernum'];
	$booking_pickuptime=  $_POST['booking_pickuptime'];
	$booking_pickupdate=  $_POST['booking_pickupdate'];
	$booking_pickupaddress=  $_POST['booking_pickupaddress'];
	$booking_dropoffaddress=$_POST['booking_dropoffaddress'];
	$booking_ride_id=  $_POST['booking_ride_id'];
	$booking_numofcars=  $_POST['booking_numofcars'];
	$available_cars=$_POST['available_cars'];
	$ride_cost=$_POST['ride_cost'];
	$booking_days=$_POST['booking_days'];

	$booking_cost=$ride_cost*$booking_numofcars*$booking_days;

	//echo "booking_cost:".$booking_cost." available_cars :".$available_cars."booking_numofcars :".$booking_numofcars."ride_cost ".$ride_cost."booking_days".$booking_days;

	
	
	//check car avilable
	if($booking_numofcars> $available_cars){
		
		echo "<script type='text/javascript'>alert('Too many CArs. Please order less cars NO ! ! ! Error!!');
		window.location.replace('home.php#cars');</script>";
		
	}else if($booking_numofcars < $available_cars){
		//assign to session
		$_SESSION['booking_passengernum']=$booking_passengernum ;
		$_SESSION['booking_pickuptime']=$booking_pickuptime ;
		$_SESSION['booking_pickupdate']=$booking_pickupdate ;
		$_SESSION['booking_pickupaddress']=$booking_pickupaddress ;
		$_SESSION['booking_dropoffaddress']=$booking_dropoffaddress ;
		$_SESSION['booking_ride_id']=$booking_ride_id ;
		$_SESSION['booking_days']=$booking_days ;
		$_SESSION['booking_numofcars']=$booking_numofcars ;
		$_SESSION['available_cars']=$available_cars ;
		$_SESSION['ride_cost']=$ride_cost ;
		$_SESSION['booking_cost']=$booking_cost;

		echo "<script type='text/javascript'>alert('Done!');
		window.location.replace('bookingok.php');</script>";
	}
	
 		
}

?>
 <!-- <script type='text/javascript'>alert('NOT inserted! ! ! Error!!')</script> -->



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
														  	$_SESSION['available_cars']=$row['ride_count_status']; 
														  	// $available_cars=$row['ride_count_status']; 
														  	$_SESSION['ride_cost']=$row['ride_cost']; 
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
						<form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
						

							  <h4>Travel Details : </h4>
							  <div class="form-row">

							    <div class="col-md-4 mb-3">
							      <label for="validationCustom01">Number of Passengers</label>
							      <input type="number" name="booking_passengernum" class="form-control" id="validationCustom01" placeholder="Number of people to travel" required>
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
							    <div class="col-md-3 mb-3">
							      <input type="hidden" name="booking_ride_id" class="form-control" value="<?php echo $booking_ride_id ?>" required>
							      <label for="booking_numofcars">Number of Cars</label>
							      <input type="number" name="booking_numofcars" class="form-control" placeholder="0" required>
							      <?php  $available_c=$_SESSION['available_cars'];?>

							      <?php echo "Available Number of Cars ".$available_c;?>
							      <input type="hidden" name="available_cars" class="form-control" value="<?php echo $available_c; ?>" required>
							      <input type="hidden" name="ride_cost" class="form-control" value="<?php echo $_SESSION['ride_cost']; ?>" required>
								  <div class="valid-feedback">
							        Looks good!
								 </div>
								</div>
								<div class="col-md-6 mb-3">
							      <label for="validationCustom01">Rent for days</label>
							      <input type="number" name="booking_days" class="form-control" id="validationCustom01" placeholder="booking_days" required>
							      <div class="valid-feedback">
							        Looks good!
							      </div>
							    </div>
							  </div>
								<?php 

								?>
								

							<input type="submit" value="Check for cost" class="text-info btn btn-dark" name="submit">
						</form>
					</div>
					
				</div>
			</div>

<!-- Form Item Input -->






 <!-- Footer -->
 <?php include 'footer.php'; ?>
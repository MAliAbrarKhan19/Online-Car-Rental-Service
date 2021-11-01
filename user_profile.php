<?php  session_start();
//Connect the Dbase
include 'mysqlconnect.php';

?>

<!-- Header -->
<?php include 'header.php'; ?>   
<!-- Header -->
<div class="row bg-dark">
	<div class="col">
		
			<h1 class="text-info m-4" id="dashboard">Customer Dashboard</h1>
			<hr class="border border-light">
		
	</div>
</div>
<div class="row bg-dark">
	<div class="col-md-10 offset-md-1">
		<h3>Your bookings</h3>



<!-- ======================================================== -->

<?php 

include 'mysqlconnect.php';
$u=$_SESSION['username'];
$query= "select * from booking where username='$u'";
$result= mysqli_query($con, $query);
$num_rows=mysqli_num_rows($result);
if ($num_rows > 0){
  while ($row = mysqli_fetch_assoc($result)){

?>
<div class="row  m-3">
	<div class="col shadow-lg bg-secondary border border-4 border-secondary rounded-3">
<!-- =========================================== -->
      <div class="row">
         <div class="col">
           <h3>Booking serial ID:</h3><h4> <?php echo $row['booking_slno']; ?></h4>
           <h6>Date/Time : <?php echo $row['booking_date']; ?></h6>

           <hr>
           <hr>

           <h6>Name : <?php echo $row['booking_name']; ?></h6>
           <h6>Mobile : <?php echo $row['booking_mobile']; ?></h6>
           <h6>Email : <?php echo $row['booking_email']; ?></h6>
           
           <h5>Rent : <?php echo $row['booking_cost']; ?> TK </h5>

         </div>
         <div class="col">
            <br>
            <h6>Ride ID : <?php echo $row['booking_ride_id']; ?></h6>
           <h6>Number of Cars : <?php echo $row['booking_numofcars']; ?></h6>
           <h6>Booked for Days : <?php echo $row['booking_days']; ?></h6>
           <h6>Pickup Time : <?php echo $row['booking_pickuptime']; ?></h6>
           <h6>Pickup Date : <?php echo $row['booking_pickupdate']; ?></h6>
           <h6>Pickup Address : <?php echo $row['booking_pickupaddress']; ?></h6>
           <h6>Dropoff Address : <?php echo $row['booking_dropoffaddress']; ?></h6>
           <h6>Paid from Mobile : <?php echo $row['booking_bkashno']; ?></h6>
           <form action="" method="POST">
             <!-- <input class="btn btn-info" type="submit" name="booking_status" value="Update Status to Done"  > -->
             <!-- <input class="btn btn-danger" type="submit" name="booking_status" value="Update Status to Cancelled"  > -->
           </form>
         </div>
      </div>
<!-- =========================================== -->
	</div>
</div>


<?php 
};
}; ?>
<!-- ======================================================== -->

  </div>
</div>

<div class="row"></div>



 <!-- Footer -->
 <?php include 'footer.php'; ?>
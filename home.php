<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}
?>
<!-- Header          ========= -->
<?php include 'header.php'; ?>
<!--   Header Ends     -->
<!--=============================================Body=============================================  -->



<!-- 
====================================================================================================================
                                              Display
====================================================================================================================
-->
  <!--=======================================About Us=============================================  -->
  <div class="row " >
    <!-- --------------------------------------------------------------------------------------- -->
      <div class="col-md-10 offset-md-1 bg-dark" id="about">
                <h2 class="text-white">
                  About Us
                </h2>
              </div>
      <div class="row">
        <!-- ------------------------------------ -->
          
          <div class="col-md-10 offset-md-1">
              <div>
                <p class="lead text-secondary">
                  The Car Rental System is a very demanding system for today’s day-to-day life. People are now using online car rental services. But it is not possible for every small Rent-a-car business man to afford a site like this. The system presented here is meant to be affordable for all.
                </p>
                <p class="lead">Garikoi.com</p>
                <h6 class="lead text-secondary">Objectives</h6>

                <p class="lead text-secondary">                 
                The site is designed as simple but efficient system to maintain rental services for cars. The main objectives based on which the project is developed are listed below:
                 
                </p class="lead text-secondary">
                <ul class="lead text-secondary">
                  <li>Simple design for users</li>
                  <li>Display available cars in a scroll </li>
                  <li>One click booking</li>
                  <li>Booking confirmation form</li>
                  <li>Contact sharing</li>
                  <li>Easy to maintain admin dashboard</li>
                  <li>Easy input new car and details</li>
                </ul>
              </div>

          </div>
        <!-- ------------------------------------ -->
      </div>
    <!-- --------------------------------------------------------------------------------------- -->
  </div>
  <br><br>
  <!--=======================================About Us=============================================  -->
<div class="row">

<!-- ====================================================================================================================================
                                            Main row
============================================================================================================================== -->


<!-- 
====================================================================================================================
                                              Display
====================================================================================================================
-->
<div class="col-md-10 offset-md-1 p-1 border " id="cars">
  <div class="row bg-dark m-1" >
        <h2 class="text-white text-center">
          Our Cars
        </h2>
    </div>
  <div class="row ">
    
           <?php 

            include 'mysqlconnect.php';
            $query= "SELECT*FROM rides ORDER BY 'ride_type' ASC";
            //ride_type,ride_name,ride_image,ride_passengercap,ride_baggagecap
            $result= mysqli_query($con, $query);
            $num_rows=mysqli_num_rows($result);
            if ($num_rows > 0){
              while ($row = mysqli_fetch_assoc($result)){
           
          ?>


            <div class="col-md-10 offset-md-1 border border-dark mb-2"  style=" overflow:hidden; ">
                <!--      cars        -->
                      
                        <div class="row" >
                          <div class="col-md-5">
                            <img src="<?php echo $row['ride_image']; ?>" class="image-fluid" alt="" style="height: 200px !important; width: 100% !important;">
                          </div>

                            <div class="col-md-7 text-left">
                                <div class="">
                                  <h3 class="text-info bg-dark p-1">Car Type : <?php echo $row['ride_type']; ?></h3>
                                  <h4 class="card-title">Car Name: <?php echo $row['ride_name']; ?></h4>
                                  <h6 class="">Passengers : <?php echo $row['ride_passengercap']; ?> max </h6>
                                  <h6  class="card-title ">Baggage : <?php  echo $row['ride_baggagecap']; ?></h6>
                                </div>
                                <h6  class="card-title ">No of Cars : <?php  echo $row['ride_count']; ?></h6>
                                <h6  class="card-title ">Available Cars : <?php  echo $row['ride_count_status']; ?></h6>
                                <h6  class="card-title ">Cost Cars : <?php echo $row['ride_cost']; ?></h6>
                                
                                <a href ="booking.php?action=booking&id=<?php echo $row['ride_id']; ?>" class="btn btn-dark btn-lg btn-block text-white">BOOK NOW / এখনই বুক করুন</a>

                            </div>
                        </div>
                           <!--  <div class="col-md-3 text-left">
                                  
                            </div> -->
                          
            </div>
                      
                    <!--      cars      -->
          <?php
                
                };
              };

          ?>
  </div> 

</div> 



<!-- 
====================================================================================================================
                                              Display
====================================================================================================================
-->
</div>

<!-- 
====================================================================================================================
                                              Display
====================================================================================================================
-->
    

<!--     body   -->
<!--    Footer Starts   -->
<?php include 'footer.php'; ?>
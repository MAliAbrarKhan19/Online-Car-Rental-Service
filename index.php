<?php session_start();
error_reporting();


 ?>
<!-- Header          ========= -->
<?php include 'header.php'; ?>
<!--   Header Ends     -->

<?php 
// connect to database
	

	// REGISTER USER
	if (isset($_POST['reg_user'])){
		// receive all input values from the form
		$username =$_POST['username'];
		$email = $_POST['email'];
		$password1 =$_POST['password1'];
		$password2 =$_POST['password2'];
		
		// if ($password_1!=$password_2) {
		// 	echo "The two passwords do not match";

		// }
    include 'mysqlconnect.php';
			$password = $password1;//encrypt the password before saving in the database
      echo " pa ".$password." !!!!!!us ".$username;
		
			// $query = "INSERT INTO 'user' ('username', 'email', 'upass') VALUES ('$username','$email','$password')";
			$i="insert into user (username,email,upass)values('$username','$email','$password')";
      if(mysqli_query($con, $i))
      {
      echo "";
      $_SESSION['username'] = $username;
      echo "<script>alert('inserted successfully..!!')</script>";  

      header('home.php');
      }
      else {
        echo "<script>alert('NOT inserted ..!!')</script>";  

      }
		
		}


include 'mysqlconnect.php';
 
 if(isset($_POST['login_user']))  
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
    
    $check_user="SELECT*FROM user WHERE username='$username' AND upass='$password'";  
    $run=mysqli_query($con,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('home.php','_self')</script>";  
  
         $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  

<!--=============================================Body=============================================  -->

<!-- ====================================================================================================================================
                                            Main row
============================================================================================================================== -->

<!-- 
====================================================================================================================
                                              login register
====================================================================================================================
-->
<div class="row">
  <!-- register  -->
      <div class="col-md-6">
      <div class="row bg-dark m-1 text-center">
                <h2 class="text-white text-center">Login</h2>
              </div>
        <div class="row">
          <div class="col-md-12">
          <form method="post" action="index.php">
              <?php //include('errors.php'); ?>
              
              
                
                  <label>User Name  </label>
                  <input type="text" class="form-control m-1" name="username" >
 
                
                  <label>Password  </label>
                  <input type="password" class="form-control m-1" name="password">
 
                <div class="input-group m-1">
                  <input type="submit" class="btn btn-dark text-white" name="login_user" value="Login">
                </div>

              </form>
          </div>
        </div>
      </div>
      <!-- login -->
      <div class="col-md-6 p-1">
        <div class="row bg-dark m-1 text-center">
           <h2 class="text-white text-center" id="reg">Register</h2>
        </div>

          <form method="POST" enctype="multipart/form-data"  class=" p-2 m-1">


              
                <label>User Name </label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
 
              
                <label>Email </label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
 
              
                <label>Password </label>
                <input type="password" class="form-control" name="password1">
 
              
                <label>Confirm password </label>
                <input type="password" class="form-control" name="password2">
 
              
                <input type="submit" class="btn btn-dark" name="reg_user" value="Register">
               
 
          </form>


      </div>

</div>


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


<!--     body   -->
<!--    Footer Starts   -->
<?php include 'footer.php'; ?>
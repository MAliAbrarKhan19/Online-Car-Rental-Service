<?php session_start();

 ?>
<!-- Header          ========= -->
<?php include 'header.php'; ?>
<!--   Header Ends     -->

<?php 
// connect to database
include 'mysqlconnect.php';
	

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

		
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			if(mysqli_query($con, $query))
      {
      echo "<script type='text/javascript'>alert('inserted successfully..!')</script>";
      }
      else {
        echo "<script type='text/javascript'>alert('NOT inserted! ! ! Error!!')</script>";
      }

			// $_SESSION['username'] = $username;
			// $_SESSION['success'] = "You are now logged in";
			//header('location: admin.php');
		}

	}


  
// connect to database
include './mysqlconnect.php';
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $results = mysqli_query($con, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location:admin.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
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
              
              
                <div class="input-group p-1">
                  <label>User Name  </label>
                  <input type="text" class="form-control m-1" name="username" >
                </div>
                <div class="input-group p-1">
                  <label>Password  </label>
                  <input type="password" class="form-control m-1" name="password">
                </div>
                <div class="input-group m-1">
                  <button type="submit" class="btn btn-dark text-white" name="login_user">Login</button>
                </div>

              </form>
          </div>
        </div>
      </div>
      <!-- login -->
      <div class="col-md-6 p-1">
        <div class="row bg-dark m-1 text-center">
           <h2 class="text-white text-center">Register</h2>
        </div>

          <form method="post" action="index.php" class=" p-2 m-1">

              <?php //include('errors.php'); ?>

              <div class="input-group">
                <label>User Name </label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
              </div>
              <div class="input-group">
                <label>Email </label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
              </div>
              <div class="input-group">
                <label>Password </label>
                <input type="password" class="form-control" name="password_1">
              </div>
              <div class="input-group">
                <label>Confirm password </label>
                <input type="password" class="form-control" name="password_2">
              </div>
              <div class="input-group">
                <button type="submit" class="btn btn-dark" name="reg_user"> Register </button>
              </div>
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
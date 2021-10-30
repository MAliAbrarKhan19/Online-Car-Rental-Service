<?php   date_default_timezone_set("ASIA/DHAKA");
  $date = date("D, d-M-Y  ");
  $time= date("h:i a");



  if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }


   ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
   

    <title>GariKoi.com</title>
    <link rel="shortcut icon" href="./img/garikoilogo(black).png" type="image/x-icon" />

<!-- Style -->
<style type="text/css">


</style>
<!-- Style -->



  </head>
  <body class="container-fluid" >
  <div class="container-fluid">
      
<!--  NAV Menu Bar -->

   <div class="row bg-dark">
      <div class="col-md-12">
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">
                  <h2>
                    <img src="img/garikoilogo2(White).png" class="img-fluid " width="130px" height="56px">
                    <!-- <em class="text-light">GariKoi.com</em> -->
                  </h2>
              </a>
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="home.php#about">About us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="home.php#cars">Our cars</a>
                      </li>
                      <?php if (!empty($_SESSION['username'])) {
                                echo "
                                <li class='nav-item'>
                                <a class='nav-link' href='user_profile.php'>Dashboard</a>".
                                "</i></li>".
                                "<li class='nav-item'>
                                  <i class='nav-link text-info'> User:".$_SESSION['username'].
                                "</i></li>".
                                "<li class='nav-item'>
                                  <form method='POST'> <input type='submit' name='logout' value='Log out' class='btn btn-outline-info'></form>
                                </li>";
                              }else {
                                echo "<li class='nav-item'>
                                      <a class='nav-link' href='index.php'>Log in</a>
                                       </li> ";
                              } 
                      ?>
                      
                      
                      <li class="nav-item">
                        
                      </li>
                    </ul>
                    
                    <span class="navbar-text " >
                      Get Your Ride Online! <a class="navbar-text" href="tel:01700 888888">Call:01700 888888</a>
                      
                    </span>
                  </div>
            </nav>
      </div>
   </div>

<!--  NAV Menu Bar -->



    <div class="row" style="margin-bottom: 30px !important;">
      
      <div class="col-md-12"  style="
                    
                    background-image: url(img/mercedesy.png) !important;
                    background-repeat: no-repeat  !important;
                    background-size: contain !important;
                    position: static;
                   
          ">

        <div class="jumbotron container-fluid " style="
                    position: relative;
                    background-color: black;
                    opacity: 60%;
                    width: 100%;
                    height: cover;
          " >
          <h1 class="text-info">Welcome to </h1>
                        <p><img src="img/garikoilogo2(White).png" class="image image-responsive" width="30%" height="20%"></p> 
          <h1 class="display-2 text-white">GariKoi.com!</h1>
          <hr class="my-4 text-light bg-light">
          <h4 class=" text-light">খুলনাতে নিয়ে এলো অনলাইনে গাড়ি বুকিং ব্যবস্থা</h4>
              

           
        </div>
       
      </div>

    </div>  


<div class="row" ><br></div>


<!--   Header Ends     -->
   
 


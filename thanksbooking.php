<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}
?>
<?php  
//Connect the Dbase
include 'mysqlconnect.php';

?>

<!-- Header -->
<?php include 'header.php'; ?>   
<!-- Header -->

<?php



?>



			<div class="row m-1">
				<div class="col-md-10 offset-md-1 border border-dark p-2" style="border-width: 20px !important;">
					<div class="border border-dark m-1 p-4 align-middle">

						<h2 class="text-info m-4 p-6 align-middle">
							Thanks For Your time. Please keep patience we will be just on time. 
						</h2>
						
						<h2 class="text-info m-4 p-6 align-middle">
							ধন্যবাদ আপনার সময়ের জন্য। !!!!
						</h2>

							  
					</div>
					
				</div>
			</div>

<!-- Form Item Input -->






 <!-- Footer -->
 <?php include 'footer.php'; ?>
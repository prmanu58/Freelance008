<?php
session_start();
require_once('connector.php');


//$customerId = 1234569999;
$customerId = $_SESSION['CID1'];
$sql = "SELECT * FROM child WHERE carer_tpn='" . $customerId . "'";
$db = Database::getInstance();
$customerDetails = $db->getConnection()->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>RP Alliance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <script src="js/rashmiJavaScript.js"></script>
  <link href="css/rashmiStyles1.css" rel="stylesheet">
  <link href="css/rashmiStyles.css" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
 
 
 
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">


<style>
  body {
    background-image: url("images/cars.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #16668d;
  }
</style>
 
</head>
<body onload="lastModified()">

  <!-- ======= Header ======= -->

	<header class="navbar navbar-inverse">

		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button> 
		  <a href="index.php">
		  <img src="images/logo.jpg" align="left" height="100" width="100" alt="Logo">
		  </a>
		<a class="navbar-brand" href="#" ><h1>RP Alliance</h1></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="sponsers.html">SPONSERS</a></li>
		  </ul>
		</div>
	</header>
	
   <!-- End Header -->   
<?php
echo '<div class="limiter">
 		<div class="container-table100">
 			<div class="wrap-table100">
 				<div class="table100">
					<table>
						<tbody>';
						if(mysqli_num_rows($customerDetails) > 0){
							while($row_customers = mysqli_fetch_array($customerDetails)){
								if($row_customers['carer_tpn'] = $customerId){
									echo '
									<tr><th>First Name</th>
									<td><h4>'.$row_customers['ch_givname'].'</td></tr>
									<tr><th>Last Name</th>
									<td><h4>'.$row_customers['ch_famname'].'</td></tr>
									<tr><th>Date of Birth</th>
									<td><h4>'.$row_customers['DOB'].'</td></tr>
									<tr><th>Gender</th>
									<td><h4>'.$row_customers['Gender'].'</td></tr>
									<tr><th>Telephone (Carer)</th>
									<td><h4>'.$row_customers['carer_tpn'].'</td></tr>
									<tr><th>Daily Messege</th>
									<td><h1 style="color:red"><B>'.$row_customers['daily_msg'].'</b></h1></td></tr>
								</tr>';
								}
							}
						}else{

						}
				echo '</tbody>
					</table>
				</div>	
 			</div>
 		</div>
 		</div>'

?>

	
        <div class="p-3 row justify-content-md-center header"> </div>

  <!-- ======= Footer ======= -->

  <footer id="footer">
    <div class="footer-top" style="padding: 25px 0 0 0">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
			  <a href="index.php">
			  <img src="images/logo.jpg" height="100" width="100" alt="Logo">
			  </a>
              <p><strong>RP Alliance</strong>
                <br><br>
                <strong>Phone:</strong> +1 5589 8954 55<br>
                <strong>Email:</strong> info@rpalliance.com<br><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
             <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="sponsers.html">Support Me</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a> © 2020 RP Alliance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Webmaster : Rashmi Piyadigama</a></li>
              <li><i class="bx bx-chevron-right"></i> <a id="sudo"> </a> </li> 
             </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our monthly newsletter and stay updated on the latest news on world of supercars!</p>
            <form>
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

  
 
   </footer>
   
   <!-- End Footer -->   

</body>
</html>
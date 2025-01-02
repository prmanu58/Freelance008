<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'process.php';?>
	<?php include 'header.php';?>

	<script> 
		
		function validation() { 
            if($("#PIN").val()==""){
              alert("Customer ID or PIN cannot be empty")
              return false;
			  
            }
            var field = $("#CID").val(); 
	          var unlen = 10;
		        if(field.length!=unlen)
			        { 
			      alert("Customer ID cannot be empty and must contain exactly 10 characters!");
				return false;
			}
        }
   </script>
 
 <style>
 
  body {
    background-image: url("images/cars.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }


  </style>
</head>
<body onload="lastModified();">

  <!-- ======= Header ======= -->
 
   <!-- End Header -->   
	


		<div class="login-page" style="padding: 100px 0 10px 0";>
		  <div class="form" >
			<form name="form1" class="login-form" method="POST" action="index.php" onSubmit="return validation()">
			  <input type="text" id="CID" name="CID" placeholder="Customer ID"/>
			  <input type="PIN" id="PIN" name="PIN" placeholder="PIN"/>
			  <button type="submit">login</button>
			  <p class="message">Not registered? <a href="register.php">Create an account</a></p>
			</form>
		  </div>
		</div>


  <!-- ======= Footer ======= -->

	<?php include 'footer.php';?>


   <!-- End Footer -->   

</body>
</html>
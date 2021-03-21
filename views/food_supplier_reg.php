<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resource/css/register.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<title>Registration Form</title>
</head>
<body>
<div class="background-img1"><img src="../resource/img/food_suppier.png" alt=""></div>
<div class="logo"><img src="../resource/img/logo1.png" alt=""></div>
<div class="container">
	<div class="para">
			<h1><b>U</b>ser <b>R</b>egistration</h1>
			<h2 style="text-align: center">Food Supplier</h2>
			<p style="text-align: center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim libero numquam officiis veritatis omnis? Magni veniam neque voluptates. Corporis totam consectetur magni quod corrupti expedita eligendi animi odit tempora autem.</p>
	</div>
	<div class="register">
		   <form action="../controller/registerCon.php" method="post">
				<p>Address <span class="error" id="addError"></p>
				<input type="text" id="address" name="address" placeholder="Enter Address ">

				<p>Merchant ID <span class="error" id="merError"></p>
				<input type="text" id="link"  name="link" placeholder="Enter Payhere Merchant ID">
				
				<p>Password <span class="error" id="passError"></p>
				<input type="password" id="password" name="password" placeholder="Enter Password">

				<p>Confirm Password </p>
				<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">

				<div class="agreement">
						<div class="term"><b>Term and condition</b></div> 
						<textarea name="aggrement" id="1" cols="30" rows="5">
1. This is a Web platform for finding boarding places.We do not assure you about your sensitive information(ex: creadit card details). Please create a payhere account before you making online payments.
2. We will use your location information to provide you better experience. We do not store any searching information or location information in our platform.     
						</textarea>
				</div>
				<div class="check">
					<input id="check" type="checkbox" name="check">
					<div class="agree"> I am agree with term and condition</div> 
				</div>
				<input type="hidden" name="email" value="<?php echo $_GET['email'];?>">
				<input type="hidden" name="first_name" value="<?php echo $_GET['first_name'];?>">
				<input type="hidden" name="last_name" value="<?php echo $_GET['last_name'];?>">
				<input type="hidden" name="nic" value="<?php echo $_GET['nic'];?>">
				<input type="hidden" name="level" value="<?php echo "food_supplier";?>">
				<input id="register" type="submit" name="register" value="Register">
		   </form>
	</div>
</div>
</body>
<script src="../resource/js/jquery.js"></script>
<script src="../resource/js/food_supplier.js"></script>
<script src="../resource/js/checkAgree.js"></script>
</html>
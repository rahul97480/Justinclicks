<?php
	session_start();
	require_once('dbconfig/config.php');

			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$mobile=$_POST['mobile'];
				$plan=$_POST['plan'];

					$check_user_email=mysqli_num_rows(mysqli_query($con,"select * from form where email='$email'"));
					if($check_user>0){
						echo "email already registered";
					}
						$check_user_number=mysqli_num_rows(mysqli_query($con,"select * from form where mobile='$mobile'"));
						if($check_user>0){
							echo "Mobile number already registered";
					}else{
						mysqli_query($con,"insert into form(name,email,mobile,plan) values('$name','$email','$mobile','$plan')");
							echo "insert";
						}
					
			}
		?>

<!DOCTYPE html>
<html>
<head>
<title>Form Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Form</h2></center>
		<form action="dashboard.php" method="post">
		
			<div class="inner_container">
				<label><b>Full Name</b></label>
				<input type="text" placeholder="Name" name="name" required>
				<label><b>Email</b></label>
				<input type="email" placeholder="email" name="email" required>
				<label><b>Mobile number</b></label>
				<input type="number" placeholder="Mobile no" name="mobile" required>
				<label><b>Plan</b></label>
				<br>
                      <select id="plan" class="plan" style="width: 448px;margin: 0 auto;padding: 10px;border: 1px solid #ccc;">
                       <option value="Standard" class="plan">Standard</option>
                        <option value="Advance" class="plan">Advance</option>
                        <option value="Pro" class="plan">Pro</option>
                      </select>
                </br>
				<button class="login_button" name="submit" type="submit">Submit</button>
			</div>
		</form>
		</div>
	</body>
	</html>

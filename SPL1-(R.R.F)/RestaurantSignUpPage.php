<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Restaurant Sign Up</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		</head>

    <style>

* {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
}
body {
  	background-color: #96b3db;
  	margin: 0;
}
.RestUserSignUp {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 20px rgba(88, 88, 102, 0.3);
  	margin: 100px auto;
	border-radius: 50px;
	border: 10px;
}
.RestUserSignUp h1 {
  	text-align: center;
  	color: #3060a8;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.RestUserSignUp form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
	border-radius: 60px;
}
.RestUserSignUp form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: #4c6ea0;
  	color: #ffffff;
	position: absolute;
	
}
.RestUserSignUp form input[type="password"], .RestUserSignUp form input[type="text"], .RestUserSignUp form input[type="email"] {
  	width: 310px;
  	height: 50px;
  	border: 3px solid #8193b8;
  	margin-bottom: 20px;
  	padding: 0 15px;
	border-radius: 60px;
}
.RestUserSignUp form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
  	margin-top: 20px;
  	background-color: #4671b3;
 	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.RestUserSignUp form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}

.RestUserSignUp  {
	font-size: 10px;
}

.eye-btn {
    position: relative;
	right:40px;
	top: 10px;
 }

    </style>
	
    <body>
		<div class="RestUserSignUp">
			<h1>Restaurant Sign Up</h1>
			<form action="" method="post" autocomplete="off">
				
				<input type="text" name="restusername" placeholder="Restaurant's Name" id="restusername" required>

                
				<input type="text" name="location" placeholder="Location" id="location" required>
                
				<input type="email" name="email" placeholder="Restaurant's Email" id="email" required>

            
				<input type="password" name="password" placeholder="Password" id="password" required>
				<span class="eye-btn"><i class="bi bi-eye-slash" 
                    id="togglePassword"></i></span>
				
				
				<input type="password" name="ConfirmPassword" placeholder="Confirm Password" id="ConfirmPassword" required>
				<span class="eye-btn"><i class="bi bi-eye-slash" 
                    id="togglePassword"></i></span>

					<input type="file" name="restaurantimage" id="restaurantimage"/><br>
				
                
				<input type="submit" name="signup" value="Sign Up"/>

            
			</form>
		</div>

		<script>
			const togglePassword = document
				.querySelector('#togglePassword');
	  
			const password = document.querySelector('#password');
	  
			togglePassword.addEventListener('click', () => {
	  
				// Toggle the type attribute using
				// getAttribure() method
				const type = password
					.getAttribute('type') === 'password' ?
					'text' : 'password';
					  
				password.setAttribute('type', type);
	  
				// Toggle the eye and bi-eye icon
				this.classList.toggle('bi-eye');
			});
		</script>

		
	</body>
</html>

<?php

$conn = mysqli_connect("localhoast", "root", "");
$db = mysqli_select_db($conn, 'restaurant');

if(isset($_POST['signup']))
{
	$file = addslashes(file_get_contents($FILES["restaurantimage"]["tmp_name"]));
	$restaurantname = $_POST['restaurantname'];
	$location = $_POST['location'];
	$mail = $_POST['restaurantmail'];
	
	$query = "INSERT INTO 'restaurant' ('restaurantimage', 'restaurantname', 'location', 'mail') VALUES ('$file', '$restaurantname', '$location', '$mail') ";
	$query_run = mysqli_query($conn, $query);

}

?>


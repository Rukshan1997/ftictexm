<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>


	<script type="text/javascript">
		
		function valid(){
			var name = document.forms["myform"]["name"].value;
			var pw = document.forms["myform"]["pw"].value;
			var cpw = document.forms["myform"]["cpw"].value;
			var email = document.forms["myform"]["email"].value;

			//null
			if (name == "" || pw == "" || cpw == "" || email == "") {
				document.getElementById("error_msg").innerHTML="enter all fields";
				return false;
			}

			//password
			if (pw != cpw) {
				document.getElementById("error_pw").innerHTML="enter correct email";
				return false;
			}

			//email
			var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
			if (email.match(pattern)) {

			}
			else{
				//document.getElementById("error_email").innerHTML="enter valid email";
				alert("Email is invalid");
			}

		}

	</script>


</head>
<body>

	<form name="myform" id="myform" onsubmit="return valid()">
		
		Name : <input type="text" name="name"> <br>
		
		password : <input type="password" name="pw"> <br>
		conf password : <input type="password" name="cpw"> <br>
		<span id="error_pw" style="color:red;"></span>

		email : <input type="email" name="email"> <br>
		<span id="error_email" style="color:red;"></span>

		<span id="error_msg" style="color:red;"></span>

		<input type="submit" name="submit" action="sumnew.php">





	</form>

</body>
</html>
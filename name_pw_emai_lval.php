<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
	<script type="text/javascript">
		function fill()
		{
			//define variable
			var name = document.forms["myform"]["name"].value;
			var pws = document.forms["myform"]["pw"].value;
			var pwsc = document.forms["myform"]["pwconf"].value;
			var email = document.forms["myform"]["email"].value;

			//name valid
			if (name == "" || pws=="" || pwsc=="" || email=="" ) {
				// alert("fill name");
				document.getElementById("error1").innerHTML="Please Fill All Fields";
				return false;		
			}	
			//pw valid
			if (pws != pwsc) {
				
				document.getElementById("error11").innerHTML="Password Not Match";
				return false;
			}
			
			//Email Valid
			var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
			if (email.match(pattern)) {
				
			}
			else{
				alert("not ok");
			}

		}
		
	</script>
	
</head>
<body>
<form name="myform" id="myform" onsubmit="return fill()">

	Enter Name :
	<input type="text" name="name" id="name"><br>
	<span id="error1" style="font-size:12px; color: red;"></span><br>

	Enter Password : <input type="pasword" name="pw" id="pw" ><br>
	Enter Password Confirmation : <input type="pasword" name="pwconf" id="pwconf"><br>
	<span id="error11" style="font-size:12px; color: red;"></span><br> 

	Enter Email :<input type="email" name="email" id="email"><br>
	<input type="submit" name="submit" value="Submit" id="submit">
</form>
</body>
</html>
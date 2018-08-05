<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type = "text/css" href = "stylelogin.css" >
    <title>Register To Rota System</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<body>

<div class ="container">

    <div class ="header">
        <h1>ROTA SYSTEM SIGNUP</h1>
    </div>

        <div class ="main">
            <form class ="form" action="includes/signup.php" method="POST">
            <legend>Enter signup details below: </legend><br>
                Username:
                <input type="text" name ="username"><br><br>
                Password:
                <input type="text" name ="password"><br><br>
		Confirm Password:
		<input type="text" name ="confpassword"><br><br>
                Email:
                <input type="text" name ="email"><br><br>
                <input class ="submitButton" type ="submit" name ="submitButton" value="SIGN UP" onclick="comparecheck()">   
            </form>
                     
        </div>   

            <div class="help">
                <a href = "">Help</a>
            </div>

            <div class="footer">
                <h3>&copy; Dean Moore</h3>
            </div>  
</div>

<script>
	$('document').ready(function(){});

	function comparecheck(){
		$pass1 = $("#password");
		$pass2 = $("confpassword");
		if($pass1 != $pass2){
			$("#confpassword").css("bordercolor", red);
			alert("please make sure your passwords match");
		}
	}
</script>




</body>
</html>

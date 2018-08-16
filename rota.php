<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type = "text/css" href = "style.css" >
    <title>Rota System</title>
</head>
<body>

<?php
	include_once '../dbh.php';
	if (isset($_POST['submitBut'])){
		$sql = "INSERT INTO added_users(first_name, family_name, job_role, contract) 
		VALUES ('".$_POST["first_name"]."','".$_POST["surname"]."','".$_POST["job_type"]."','".$_POST["contract"]."')";
		mysqli_query($connect, $sql);
	    exit();
	}


?>

<div class = "header"> 
    <h1> Rota System </h1>
</div>

<div class = "container">

	<div class = "left_panel">
		<div class = "DataTable">
			<table style="100%" border="black">
				<tr>
					<th>First Name</th>
					<th>Surname</th>
					<th>Job Role</th>
					<th>Contract</th>
				</tr>
				<tr>
					<td>Dean</td>
					<td>Moore</td>
					<td>CSA Evening</td>
					<td>20</td>
				</tr>
			</table>
		</div>
	</div>

	<div class = "right_panel">
		<div class = "addData_panel">
			First Name
			<input type="text" name="first_name">
			Surname
			<input type="text" name="surname">
			Job Type
			<input type="text" name="job_type">
			Contract
			<input type="text" name="contract">
			<div class = "sub">
				<input type="Submit" name="submitBut">
			</div>


		</div>
	</div>	

	<div class = "footer">
	    <h3> &copy; Dean Moore</h3>
	</div>

</div>
</body>
</html>
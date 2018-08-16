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

<div class = "header"> 
    <h1> Rota System </h1>
</div>

<div class = "container">

    <div class = "left_panel">
        <h2>Current System</h2>
    <?php
		include_once 'dbh.php';
		$sql = "SELECT username FROM login";	
		$result = mysqli_query($connect, $sql);
		if($result == true){
			$rowcount = "SELECT COUNT(*) FROM login";
			$rowcountResult = mysqli_query($connect, $rowcount);
			$rowcountInt = (int)$rowcountResult;
			for('$rowcountInt', '$rowcountInt' > 0, '$rowcountInt'--){
				echo '$rowcountInt';
			}
		}else{
			die("Connection Failed");		
			}
	?>
    </div>

    <div class = "right_panel">
        <h2>Add More</h2>
        <p></p>
    </div>

</div>

<div class = "footer">
    <h3> &copy; Dean Moore</h3>
</div>


<script src = "script.js"></script>
</body>
</html>

<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">

<?php
	if(isset($_POST['user'])){
		echo("sudo pkill -KILL -u " . $_POST['user']);
		shell_exec("sudo pkill -KILL -u " . $_POST['user']);

	}
	else{
		echo "Not valid option!";
	}
?>

<form>
<input type="button" value="Return to dash..." onclick="location.href='/index.html';">
</form>
</div>
    
</body>
</html>

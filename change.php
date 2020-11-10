<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">

<?php
	if(isset($_POST['user']) && isset($_POST['password'])){
		if($_POST['user'] == "root"){
			die("Cannot change for user root!<br/>");
		}
		else{
			shell_exec("sudo usermod -p `openssl passwd " . $_POST['password'] . "` " . $_POST['user']);
			echo "Completed!<br/>";
		}
		if(isset($_POST['logOff'])){
			shell_exec("sudo pkill -KILL -u " . $_POST['user']);
		}	
	}
	else{
		echo "Not valid option!<br/>";
	}
?>

<form>
<input type="button" value="Return to dash..." onclick="location.href='/index.html';">
</form>
</div>
    
</body>
</html>

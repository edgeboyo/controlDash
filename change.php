<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">

<?php
	if(isset($_POST['user'])){
		if($_POST['user'] == "root"){
			echo "Cannot change for user root!<br/>";
		}
		else{
			shell_exec("sudo passwd --expire " . $_POST['user']);
			echo "Completed!<br/>";
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

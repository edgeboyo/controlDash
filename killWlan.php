<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">

<?php

	$intip = shell_exec("curl -s ifconfig.me");
	shell_exec("sudo ufw default deny incoming");
	shell_exec("sudo ufw enable");
		echo "Completed!<br/>";
?>

<form>
<input type="button" value="Return to dash..." onclick="location.href='/index.html';">
</form>
</div>
    
</body>
</html>

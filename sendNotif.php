<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">

<?php
	if(isset($_POST['message'])){
		echo shell_exec('sudo ./sendNotif.sh "' . $_POST['message'] . '"');
		echo "Completed!<br/>";
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

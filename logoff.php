<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">
<h2>Log user off</h2>
    <form action="/logUserOff.php">
    <label>
        Select user to log off:</label><br/>
    <input type="submit" value="Disconnect from WLAN"/>

</form>
<?php
	$list = shell_exec("who | cut -d' ' -f1 | sort | uniq");

	echo $list;
?>
</div>
    
</body>
</html>

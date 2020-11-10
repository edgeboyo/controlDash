<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">
<h2>Change user's password</h2>
    <form action="/change.php" method="post">
    <label>
        Select user to expire the password:</label>
    <select name="user">
    	<?php
	$list = shell_exec("cat /etc/passwd | grep nologin -v | awk -F':' '{ print $1}'");

	$arr = explode("\n", $list);

	foreach($arr as $usr){
    		if($usr != "root")
		  echo "<option value=" . $usr . ">" . $usr . "</option>";
	}
	?>
	</select><br/>
	<label> Enter password: </label>
	<input type="password" name ="password" required/> </br>
	<label> Log out too? </label>
	<input type="checkbox" name="logOff" style="height: inherit"/> </br>
    <input type="submit" value="Change user's password..."/>

</form>

</div>
    
</body>
</html>

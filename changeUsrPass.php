<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">
<h2>Log user off</h2>
    <form action="/change.php" method="post">
    <label>
        Select user to expire the password:</label><br/>
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
    <input type="submit" value="Log user out..."/>

</form>

</div>
    
</body>
</html>
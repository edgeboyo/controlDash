<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">
<h2>Log user off</h2>
    <form action="/logUserOff.php" method="post">
    <label>
        Select user to log off:</label><br/>
    <select name="user">
    	<?php
	$list = shell_exec("who | cut -d' ' -f1 | sort | uniq");

	$arr = explode("\n", $list);

	foreach($arr as $usr){
		echo "<option value=" . $usr . ">" . $usr . "</option>";
	}
	?>
	</select><br/>
    
    <input type="submit" value="Log user out..."/>

</form>

</div>
    
</body>
</html>

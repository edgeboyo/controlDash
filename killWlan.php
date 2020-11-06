<html>

<head>
  <title> Laptop control dashboard </title>
  <link rel="stylesheet" href="css/style.css">
</head>
  
<body>

<div class ="centered">

<?php
    $wireless = shell_exec("ifconfig -a | sed 's/[ \t].*//;/^\(lo\|\)$/d' | awk -F':' '{print $1;}' | grep -v lo | grep wl");
    $arr = explode("\n", $wireless);

    foreach($arr as $device){
        shell_exec("sudo ifdown " . $device);
    }

		echo "Completed!<br/>";
?>

<form>
<input type="button" value="Return to dash..." onclick="location.href='/index.html';">
</form>
</div>
    
</body>
</html>

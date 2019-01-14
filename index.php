<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encirding="UTF-8" standalone="yes"?>';

echo '<response>';
	$food=$_GET['food'];
	$foodArray= array('tuna','jinger','guava','wheat');
	if(in_array($food,$fooArray))
	echo 'We do have'.$food. '!';
	elseif ($food=='')
        echo 'Enter a food you idiot';
	else
	    echo 'Sorry We do not have '.$food.'!';


echo '</response>';




?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<script type="text/javascript" src="index.js"></script>
</head>
<body onload="process()">
<h3>Food Store</h3>
<P>Enter food to order:<input type="text" id="userinput" /></P>
<div id="underinput" />
</body>
</html>
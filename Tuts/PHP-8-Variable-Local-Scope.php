<!DOCTYPE html> 
<html>
<head></head>
<body>

<?php

function myTest() {
	$x =5; // Local Scope Variable 
	echo "<p> Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p> Variable x outside function is: $x</p>";

?> 

</body> 
</html>
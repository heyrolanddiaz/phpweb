<!DOCTYPE html>
<html>
<head></head>
<body>

<?php

$x = 5; // Global Scope Variable 

function myTest() {

	// Using x inside this functional will generate an error
	
	echo "<p> Variable x inside function is: $x</p>"; 
}

myTest(); 

echo "<p> Variable x outside function is: $x</p>";

?>
</body>
</html>
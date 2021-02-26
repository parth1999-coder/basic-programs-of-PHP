<html>
<body>
<h1>
for each loop
</h1>
<?php 
$employee = array( 
	"name" => "Robert", 
	"email" => "robert112233@mail.com", 
	"age" => 18, 
	"gender" => "male"

); 
foreach($employee as $key => $element) 
{ 
	echo $key . ": " . $element . "<br>"; 
} 

?> 

<html>
<body>
<h1>
Calculate and print the factorial of a number using a for loop
</h1>

<?php
$n = 6;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n";
?>
</html>
</body>
<html>
<body>
<h1>
using string formatting>
</h1>
<?php
printf("i have %s pants and %s shirts.<br><br>",4,12);
$string = sprintf("after the sale i have %s pants and %s shirts.<br>",6,21);
echo $string, "<br>";
$price = 2789.992;
echo "the price is";
printf("\$%01.2f<br><br>",$price);

echo "printf(\"%6.2f\", 3.1) gives you";
printf("%6.2f<br>", 3.1);
echo"printf(\"%6.2f\", 30.1) gives you";
printf("%6.2f<br>", 30.1);
echo"printf(\"%6.3f\", 300.1) gives you";
printf("%6.2f<br>", 300.1);

$year = 2007;
$month = 9;
$day = 2;
echo"the date is";
printf("%04d-%02d-%02d<br>",$year,$month,$day);

?>
</body>
</html

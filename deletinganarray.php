<html>
<body>
<h1>
deleting and array element
</h1>
<?php
$actors[0] = "green grant";
$actors[1] = "myran loy";
$actors[2] = "parth hinge";

unset($actors[1]);

echo $actors[0],"<br>";
echo $actors[1],"<br>";
echo $actors[2],"<br>";
?>
</body>
</html>
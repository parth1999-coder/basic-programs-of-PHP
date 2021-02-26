<html>
<body>
<h1>
using the elseif statement 
</h1>
<?php
$temperature = 76;
if ($temperature < 32)
{
echo "too cold.";
}
elseif ($temperature < 60)
{
echo "pretty chilly.";
}
elseif ($temperature < 70)
{
echo "pretty nice outside.";
}

elseif ($temperature < 80)
{
echo "pretty warm outside.";
}
else {
echo "too hot.";
}
?>
</body>
</html>

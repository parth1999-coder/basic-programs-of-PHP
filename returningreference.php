<html>
<body>
<h1>
returning references
</h1>
<?php
$value = 4;
echo "current value:", $value, "\n";
$ref = &return_reference($value);
$ref++;
echo "new value:",$value,"\n";
function &return_reference(& $ref)
{
return $ref;
}
?>
</body>
</html>
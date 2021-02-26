<html>
<body>
<h1>
while loop
</h1>
<?php
$debts ["jill"] = 2345.34;
$debts ["parth"] = 34545.23;
$debts ["nikhil"] = 34543.44;

while (list($key, $value) = each ($debts))
{
echo "key:$key; value:$value <br>";
}
?>
</body>
</html>
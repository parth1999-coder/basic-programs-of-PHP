<html>
<body>
<h1>
exracting data from array
</h1>
<?php
$ice_cream["good"] = "orange";
$ice_cream["better"] = "vanilla";
$ice_cream["best"] = "rum";
extract($ice_cream);
echo"\$good = $good<BR>";
echo"\$better = $better<BR>";
echo"\$best = $best<BR>";
?>
</body>
</html>
<html>
<head>
<title>Using the math operator</title>
<style>
h1{
background-color: cyan;
color: red;
border-radius: 20px;
padding: 10px;
}
</style>
</head>
<body>
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10; $row++) { 
echo "<tr> \n";
for ($col=1; $col <= 10; $col++) { 
$p = $col * $row;
echo "<td>$p</td> \n";
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
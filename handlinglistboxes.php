<head>
<title>
reading data from list boxes
</title>
</head>
<body>
<h1>
reading data from list boxes
</h1>
your ice cream flavors:
<BR>
<?php
foreach($_REQUEST["ice_cream"] as $flavor){
echo $flavor,"<br>";
}
?>
</body>
</html>
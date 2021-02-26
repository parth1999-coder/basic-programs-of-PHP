<html>
<body>
<h1>
reading data from text areas
</h1>
you orderred a pizza with: <br>
<?php
$text = $_REQUEST["data"];
echo str_replace("\n","<br>", $text);
?>
</body>
</html>
<html>
<body>
<h1>
opening a file 
</h1>
<?php
$handle = fopen("quotes.txt", "r");
if ($handle)
{
echo"file opened ok,";
}
?>
</body>
</html>

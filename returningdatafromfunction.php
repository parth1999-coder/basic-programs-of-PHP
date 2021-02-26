<html>
<body>
<h1>
returning data from funtion
</h1>
<?php
echo "hi i 'am' 'parth' 'hinge?' to connector...<br>";
echo "i am a programmer:",connector("am","parth","hinge?");

function connector()
{
$data = "";
$argument = func_get_args();

for($loop_index = 0; $loop_index < func_num_args(); $loop_index++)
{
$data .= $argument[$loop_index] ." ";
}
return $data;
}
?>
</body>
</html>

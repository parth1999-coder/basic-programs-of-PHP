<html>
<body>
<h1>
persisting user data
</h1>
<?php
$errors_array = array();
if(isset($_REQUEST["welcome_already_seen"]))
{
check_data();
if(count($errors_array)!=0)
{
show_errors();
show_welcome();
}
else
{
handle_data();
}
}
else
{
show_welcome();
}
function show_welcome()
{
$first_name = isset($_REQUEST["first"]) ? $_REQUEST["first"] :"";
$last_name = isset($_REQUEST["last"]) ? $_REQUEST["last"] :"";

echo"<form method='post'>";
echo"enter your first name:";
echo"<input name='first' type='text' value='",$first_name, "'>";
echo"<br>";
echo"<br>";
echo"enter your last name:";
echo"<input name='last' type='text' value='",$last_name, "'>";
echo"<br>";
echo"<br>";
echo"<input type='submit' value='submit'>";
echo"<input type=hidden name='welcome_already_seen' vlaue='already_seen'>";
echo"</form>";
}
function check_data()
{
global $errors_array;
if ($_REQUEST["first"] == "")
{
$errors_array[] = "<font color='red'>Enter your first name</font>";
}
if($_REQUEST["last"] == "")
{
$errors_array[] = "<font color='red'>Enter your last name</font>";
}
}
function show_errors()
{
global $errors_array;
foreach ($errors_array as $err)
{
echo $err, "<br>";
}
}
function handle_data()
{
echo "here is your first name:";
echo $_REQUEST["first"];
echo "<br>here is your first name:";
echo $_REQUEST["last"];
}













































<?php

$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$mysqli = new mysqli("localhost","root","","app_example");

$result = mysqli_query($mysqli,"select * from user_login where usrname='$username' and  pass='$password'");

if($data = mysqli_fetch_array($result))
{
echo '1';
}

?>

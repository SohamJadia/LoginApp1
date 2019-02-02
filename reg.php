<?php
$fullname = filter_input(INPUT_POST,"fullname");
$password = filter_input(INPUT_POST,"password");
$useremail= filter_input(INPUT_POST,"email");
$useraddress= filter_input(INPUT_POST,"useradd");
$usermobileno= filter_input(INPUT_POST,"usermobile");
$userboxno= filter_input(INPUT_POST,"userboxno");
$usercardno= filter_input(INPUT_POST,"usercardno");
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
$mysqli = new mysqli("localhost","root","Sudoopen2058$","app_example");
$result = mysqli_query($mysqli,"insert into user_info values(,''$fullname'',''$useraddress'',''$useremail'','$usermobileno','$userboxno','$usercardno',''$password''");
//$col= mysqli_query($mysqli,"select * from user_info");
if($data = mysqli_fetch_array($result))
{
echo '1';
}
?>

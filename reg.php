<?php
$fullname = filter_input(INPUT_POST,"fullname");
$password = filter_input(INPUT_POST,"password");
$useremail= filter_input(INPUT_POST,"email");
$useraddress= filter_input(INPUT_POST,"useradd");
$usermobileno= filter_input(INPUT_POST,"usermobile");
$userboxno= filter_input(INPUT_POST,"userboxno");
$usercardno= filter_input(INPUT_POST,"usercardno");
//$usermobi= 120923;
//$name="soham";
//$add="sohamsjadi";
//$usemail="sjsoni20@gmail.com";
//$userbox="shjaj298982";
//$usercard=2847387481;
//$pass="sjsoni";
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
$mysqli = new mysqli("localhost","root","Sudoopen2058$","app_example");
$sql="INSERT INTO user_info VALUES(NULL,'$fullname','$useraddress','$useremail','$usermobileno','$userboxno','$usercardno','$password')";
//$sql="INSERT INTO user_info VALUE(NULL,'$name','$add','$usemail','$usermobi','$userbox','$usercard','$pass')";
if(isset($fullname))
{
	if(mysqli_query($mysqli,$sql))
	{
	 	echo "1";
	}
	else
	{
		echo "0";
	}
}
/*$col = mysqli_query($mysqli,"select * from user_info");
if($dat = mysqli_fetch_row($col))
{
echo "1";
}
else
{
echo "<br>Error:" .$dat. "<br>" . $mysqli->error;
}*/

?>

<?php
/*$fullname = filter_input(INPUT_POST,"fullname");
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
/*if($data = mysqli_fetch_array($result))
{
echo '1';
}*/
?>

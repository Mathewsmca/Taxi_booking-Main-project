<?php
include("dbcon.php");
session_start();
$username=$_POST["txt_name"];
$password=mysqli_real_escape_string($conn,md5($_POST["txt_password"]));
$sql=mysqli_query($conn,"SELECT * FROM driver where email='$username' and password='$password'");
$display=mysqli_fetch_array($sql);
if($display>0)
{
	$_SESSION["d_id"]=$display["driver_id"];
	header("location:../driver/index.php");

}
else
{
echo "<script>alert('Invalid Username/Password!!');window.location='#'</script>";
}
?>
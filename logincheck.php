<?php
if(@$_POST['submit'])	{
@$username=$_POST['username'];@$password=md5($_POST['password']);
@$cnt=$data->login_validation($username,$password);
if($cnt == 1){
@$res="SELECT `fname` FROM `registration` WHERE `email`='$username'";
@$fetch=mysqli_fetch_array(mysqli_query($data->connection,$res));
@$fname=$fetch[0];
$sess->session_create($username,$fname);
echo"<script>location.href='address.php';</script>";		
			 }
else		 {
echo"<script>alert('Invalid UserID/Password');location.href='login.php';</script>";	
			 }
						}
?>
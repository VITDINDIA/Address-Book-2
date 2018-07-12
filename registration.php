<?php
include("class/session.php");
@$sess=new session();
include("class/database.php");
@$data=new database();
$fname=@$_POST['fname'];$lname=@$_POST['lname'];
$email=@$_POST['email'];$pass=@md5($_POST['pass']);
if(@$_POST['submit'])
	{
$data->newuser($fname,$lname,$email,$pass);
$sess->session_create($email,$fname);
echo"<script>location.href='address.php';</script>";
	}

?>
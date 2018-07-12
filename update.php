<?php
if(@$_POST['submit'])
	{
@$fname=$_POST['fname'];@$lname=$_POST['lname'];
$data->update_data($email,$fname,$lname);
$sess->update_session($fname);
echo"<script>alert('Profile Updated Successfully');location.href='home.php';</script>";
	}

?>
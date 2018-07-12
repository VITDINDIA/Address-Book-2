<?php
$cname=@$_POST['cname'];$contact=@$_POST['contact'];
$street=@$_POST['street'];$city=@$_POST['city']; $state=@$_POST['state'];
$pcode=@$_POST['pcode']; $country=@$_POST['country'];
if(@$_POST['submit'])
	{
	$data->new_reg($email,$cname,$contact,$street,$city,$state,$pcode,$country);		
	echo"<script>alert('Successfully Inserted');location.href='address.php';</script>";
	}

?>
<?php
include("class/session.php");
@$sess=new session();
include("class/database.php");
@$data=new database();
@$email=$sess->idsession_fetch();
@$fname=$sess->name_session_fetch();
@$sess->session_check();
@$Search=$_POST['search'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Address Book</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="mycontact.php">Address Book</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><form method="post" action="search_out.php"><input type="search" name="search" style="margin-top:8%;" placeholder="Search By Name"></form></li>
        <li><a href="address.php" > <span class="glyphicon glyphicon-envelope"></span> Add Contact</a></li>
        <li><a href="logout.php" > <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <li><a href="home.php" > <?php	echo"Hello $fname";	?></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">    
<div class="jumbotron">
    <h2>Contact List</h2> 
  </div>
        <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>SrNo.</th>
        <th>Remove</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Address Validate</th>
        <th>Validate Address</th>
        <th>Street View</th>
        <th>Walkscore </th>
        <th>Contact Update </th>
      </tr>
    </thead>
    <tbody>
    <?php	
@$data->search_list($email,$Search);
	?>
    </tbody>
  </table>
  </div>
   </div>
    <div style="height:40px;" >
   </div> 
   	 <?php if(@$_POST['gcode']){	include("api/1.php");	} 	?>
     <?php if(@$_POST['wscore']){	include("api/3.php");	} 	?>
     <?php if(@$_POST['update']){	include("update_address.php");	} 	?>
   </div>
    <?php  if(@$_POST['sview']){include("api/2.php");	}	?>
    <div style="height:40px;" >
   </div> 
    <?php	
if(@$_POST['submit'])
	{
	$cname=@$_POST['cname'];$contact=@$_POST['contact'];
	$street=@$_POST['street'];$city=@$_POST['city']; $state=@$_POST['state'];
	$pcode=@$_POST['pcode']; $country=@$_POST['country'];$cont=@$_POST['cont'];	
	$data->update_reg($cont,$email,$cname,$contact,$street,$city,$state,$pcode,$country);		
	echo"<script>alert('Update Successfully');location.href='mycontact.php';</script>";
	}
?> 
  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left"><center>2017 - Address Book</center>
      </p>
    </div>
    
    
  </div>
</body>
</html>

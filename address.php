<?php
include("class/session.php");
include("class/database.php");
@$data=new database();
@$sess=new session();
@$email=$sess->idsession_fetch();
@$fname=$sess->name_session_fetch();
$sess->session_check();
include("contactreg.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type= "text/javascript" src = "js/countries.js"></script>
  <script type= "text/javascript" src = "js/contact.js"></script>
  
  
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
        <li><a href="mycontact.php" > <span class="glyphicon glyphicon-envelope"></span> Contact List</a></li>
        <li><a href="logout.php" > <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <li><a href="home.php" > <?php	echo"Hello $fname";	?></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">    
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Hello <?php echo"$fname";	?> Please Create Your Contacts</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
           
  <form method="post" onsubmit="return validate();">
    <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" name="cname" required class="form-control" >
   </div>
   <div class="form-group">
  <label for="usr">Contact:</label>
  <input type="text" name="contact" id="contact" required class="form-control" maxlength="10" >
   </div>
  	<div class="form-group">
  <label for="usr">Address:</label>
  <input type="text" name="street" required class="form-control" >
   </div>
  <div class="form-group">
  <label for="usr">Country:</label>
   <select id="country" name ="country" class="form-control"></select>
   </div>
   <div class="form-group">
  <label for="usr">State:</label>
  <select name ="state" id ="state" class="form-control"></select> 
   </div>
   <script language="javascript">
	populateCountries("country", "state"); 
   </script>
    <div class="form-group">
  <label for="usr">City:</label>
  <input type="text" name="city" class="form-control" required >
   </div>
   <div class="form-group">
  <label for="usr">Postal Code:</label>
  <input type="text" name="pcode" id="pcode" maxlength="6" class="form-control" required >
   </div>
   <div class="form-group">
   <center><button type="submit" name="submit" value="Submit" class="btn btn-default">Add Contact</button></center>
  </div>
  </form>
						</div>
                      </div>                     
                    </div>  
                </div>      
          </div>
    <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left"> <center>2017 - Address Book</center>
      </p>
    </div>
    
    
  </div>
</body>
</html>

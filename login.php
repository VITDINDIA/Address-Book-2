<?php	
include("class/session.php");	
include("class/database.php");
@$sess=new session();
@$data=new database();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
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
      <a class="navbar-brand" href="index.php">Address Book</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
      </ul>
    </div>
  </div>
</nav>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Log In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" required="required" type="email" class="form-control" name="username" value="" placeholder="E-mail Id" />                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" required="required" type="password" class="form-control" name="password" placeholder="Password" />
                                    </div>
                               
          
                             <div >
                                      <center><button type="submit" name="submit" value="submit" class="btn btn-danger">Login</button></center>
                                    </div>        
                            </form>     

<?php	include("logincheck.php");	?>

                        </div>                     
                    </div>  
        </div>
        
    </div>
    
<hr />
<div class="row">
  <div class="col-sm-3">
 <div class="well">
 <h3>Add Contacts</h3>
 <p style="color: #F96CAB;" >Add, Validate and Navigate Your Contacts. </p>
 </div>
 </div>
 <div class="col-sm-3">
 <div class="well">
 <h3>Google Map</h3>
 <p style="color: #F96CAB;">It offers satellite imagery of your contact's address. </p>
 </div>
 </div>
 <div class="col-sm-3">
 <div class="well">
  <h3>Street View</h3>
   <p style="color: #F96CAB;">It Offers 360 panoramic views of your contact's address. </p>
 </div>
 </div>
 <div class="col-sm-3">
 <div class="well">
  <h3>Walk Score</h3>
   <p style="color: #F96CAB;">It measures the walkability of your contact's address.</p>
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

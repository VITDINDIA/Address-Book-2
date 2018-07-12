<?php	
@$cont=$_POST['cnt'];	
@$UpdateFetch=mysqli_fetch_array(mysqli_query($data->connection,"SELECT `cname`,`contact`,`street` ,`city`,`state`,`pcode`,`country` FROM `contactlist` WHERE `uid`='$email' and `cnt`='$cont'"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type= "text/javascript" src = "js/countries.js"></script>
  <script type= "text/javascript" src = "js/contact.js"></script>
<body>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
	           <div style="padding-top:30px" class="panel-body" >
                       <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>          
  <form method="post" onsubmit="return validate();">
    <div class="form-group">
  <input type="hidden" name="cont" value="<?php	echo"$cont";	?>"  >
  <label for="usr">Name:</label>
  <input type="text" name="cname" value="<?php	echo"$UpdateFetch[0]";	?>" required class="form-control" >
   </div>
   <div class="form-group">
  <label for="usr">Contact:</label>
  <input type="text" name="contact" id="contact" value="<?php	echo"$UpdateFetch[1]";	?>" required class="form-control" maxlength="10" >
   </div>
  	<div class="form-group">
  <label for="usr">Address:</label>
  <input type="text" name="street" value="<?php	echo"$UpdateFetch[2]";	?>"  required class="form-control" >
   </div>
  <div class="form-group">
   <label for="usr">Country:</label>
   <input type="text" id="country" name ="country"  value="<?php	echo"$UpdateFetch[6]";	?>"   class="form-control" >
   </div>
   <div class="form-group">
   <label for="usr">State:</label>
   <input type="text"  id ="state" name ="state"  value="<?php	echo"$UpdateFetch[6]";	?>"   class="form-control" >

   </div>
   <script language="javascript">
	populateCountries("country", "state"); 
   </script>
    <div class="form-group">
  <label for="usr">City:</label>
  <input type="text" name="city" value="<?php echo"$UpdateFetch[3]";	?>" class="form-control" required >
   </div>
   <div class="form-group">
  <label for="usr">Postal Code:</label>
  <input type="text" name="pcode" value="<?php echo"$UpdateFetch[5]";	?>" maxlength="6" id="pcode" class="form-control" required >
   </div>
   <div class="form-group">
   <center><button type="submit" name="submit" value="Submit" class="btn btn-default">Update Address</button></center>
  </div>
  </form>
						</div>
                      </div>                     
                    </div>  
                </div>      
          </div>
 

</body>
</html>

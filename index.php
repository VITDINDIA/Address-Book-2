<?php
include("registration.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Address Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
    }
  </style>
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
      <a class="navbar-brand" href="#">Address Book</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" > <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/1.jpg">
          <div class="carousel-caption">
           
          </div>
        </div>

        <div class="item">
          <img src="img/2.jpg" alt="Image" >
          <div class="carousel-caption">
            
          </div>
        </div>
        
        <div class="item">
          <img src="img/3.jpg" alt="Image" >
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item">
          <img src="img/4.png" alt="Image" >
          <div class="carousel-caption">
            
          </div>
        </div>
        
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
  <div class="col-sm-4">
  <h3 align="center">Registration Form</h3>
  <form method="post">
  	<div class="form-group">
  <label for="usr">First Name:</label>
  <input type="text" name="fname" required class="form-control" id="usr">
   </div>
    <div class="form-group">
  <label for="usr">Last Name:</label>
  <input type="text" name="lname" class="form-control" required id="usr">
   </div>
    <div class="form-group">
  <label for="usr">Email:</label>
  <input type="email" name="email" class="form-control" required id="usr">
   </div>
	 <div class="form-group">
  <label for="usr">Password:</label>
  <input type="password" name="pass" class="form-control" required id="usr">
   </div>
   <button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>
  </div>
  </form>
</div>

<hr />
<div class="row">
  <div class="col-sm-3">
 <div class="well">
 <h3>Add Contacts</h3>
 <p style="color: #F96CAB;">Add, Validate and Navigate Your Contacts. </p>
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
   <p style="color: #F96CAB;"> It Offers 360 panoramic views of your contact's address. </p>
 </div>
 </div>
 <div class="col-sm-3">
 <div class="well">
  <h3>Walk Score</h3>
   <p style="color: #F96CAB;">It measures the walkability of your contact's address.</p>
 </div>
 </div>
 
 </div>
</div>


<center>2017 - Address Book</center>
 
    
    
  </div>
</body>
</html>


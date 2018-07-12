<?php
class database
	{
public $connection;		
function __construct()
				{ 
$this->connection=mysqli_connect("localhost","root","","addressbook");
				}
function newuser($fname,$lname,$email,$pass)
				{
					
$count=mysqli_num_rows(mysqli_query($this->connection,"SELECT `cnt` FROM `registration` WHERE `email`='$email'") );
if($count==0)
{
mysqli_query($this->connection,"insert into `registration`(`fname`,`lname`,`email`,`pass`) values('$fname','$lname','$email','$pass')");	

}
else
{
echo"<script>alert('email id already exist');location.href='index.php';</script>";
}				

				}
function new_reg($email,$cname,$contact,$street,$city,$state,$pcode,$country)
				{
mysqli_query($this->connection,"insert into `contactlist`(`uid`,`cname`,`contact`,`street`,`city`,`state`,`pcode`,`country`) values('$email','$cname','$contact','$street','$city','$state','$pcode','$country')");
				}
function contact_list($email)
				{
@$Res=mysqli_query($this->connection,"SELECT `cname`,`contact`,`street`,`city`,`state`,`pcode`,`country`,`cnt` FROM `contactlist` WHERE `uid`='$email' order by `cnt` desc ");
$i=1;
	while(@$Fetch=mysqli_fetch_array($Res))	{
	@$Address=$Fetch[2].", ".$Fetch[3].", ".$Fetch[4].", ".$Fetch[6];				
?>				
     <tr>
        <td><?php	echo"$i";	?></td>
        <td><center><a href='delete.php?x=<?php echo"$Fetch[7]";	?>' onclick="return confirm('Are you sure you want to delete this contact ?');"><span class="glyphicon glyphicon-remove"></span></a></center></td>
        <td><?php	echo"$Fetch[0]";	?></td>
        <td><?php	echo"$Fetch[1]";	?></td>
        <td><?php	echo"$Address";	?></td>
        <td><form method="post" ><input type="hidden" name="address" value="<?php echo"$Address";	?>"><button type="submit" name="gcode" value="Geocode!" class="btn btn-info">Address Validate</button></form></td>
        <td><form method="post" ><input type="hidden" name="address" value="<?php echo"$Address";	?>"><button type="submit" name="sview" value="sview" class="btn btn-info">Street View</button></form></td>
        <td><form method="post" ><input type="hidden" name="address" value="<?php echo"$Address";	?>"><button type="submit" name="wscore" value="sview" class="btn btn-info">Walkscore</button></form></td>
        <td><form method="post" ><input type="hidden" name="cnt" value="<?php echo"$Fetch[7]";	?>"><button type="submit" name="update" value="update" class="btn btn-info">Contact Update</button></form></td>
        
      </tr>
<?php
	$i++;
											}
				}
function search_list($email,$Search)
				{
@$Res=mysqli_query($this->connection,"SELECT `cname`,`contact`,`street`,`city`,`state`,`pcode`,`country`,`cnt` FROM `contactlist` WHERE `uid`='$email' and `cname` like '%$Search%' order by `cnt` desc ");
$i=1;
	while(@$Fetch=mysqli_fetch_array($Res))	{
	@$Address=$Fetch[2].", ".$Fetch[3].", ".$Fetch[4].", ".$Fetch[6];				
?>				
     <tr>
        <td><?php	echo"$i";	?></td>
        <td><center><a href='delete.php?x=<?php echo"$Fetch[7]";	?>' onclick="return confirm('Are you sure you want to delete this contact ?');"><span class="glyphicon glyphicon-remove"></span></a></center></td>
        <td><?php	echo"$Fetch[0]";	?></td>
        <td><?php	echo"$Fetch[1]";	?></td>
        <td><?php	echo"$Address";	?></td>
        <td><form method="post" ><input type="hidden" name="address" value="<?php echo"$Address";	?>">
        <button type="submit" name="gcode" value="Geocode!" class="btn btn-info">Address Validate</button></form></td>
        <td><form method="post" ><input type="hidden" name="address" value="<?php echo"$Address";	?>">
        <button type="submit" name="sview" value="sview" class="btn btn-info">Street View</button></form></td>
        <td><form method="post" ><input type="hidden" name="address" value="<?php echo"$Address";	?>"><button type="submit" name="wscore" value="sview" class="btn btn-info">Walkscore</button></form></td>
        <td><form method="post" ><input type="hidden" name="cnt" value="<?php echo"$Fetch[7]";	?>"><button type="submit" name="update" value="update" class="btn btn-info">Contact Update</button></form></td>
        
      </tr>
<?php
	$i++;
											}
				}
								
function get_data($email)
				{
@$GetData=mysqli_fetch_array(mysqli_query($this->connection,"SELECT `fname`,`lname` FROM `registration` WHERE `email`='$email'"));
return $GetData;
				}		
function update_data($email,$fname,$lname)
				{
mysqli_query($this->connection,"update `registration` set `fname`='$fname',`lname`='$lname' WHERE `email`='$email'");	
				}
function update_reg($cont,$email,$cname,$contact,$street,$city,$state,$pcode,$country)
				{
mysqli_query($this->connection,"update `contactlist` set `cname`='$cname',`contact`='$contact',`street`='$street',`city`='$city',`state`='$state',`pcode`='$pcode',`country`='$country' WHERE `cnt`='$cont' and `uid`='$email'");	
				}				
function login_validation($username,$password)
				{
@$res="SELECT `fname` FROM `registration` WHERE `email`='$username' and `pass`='$password'";
@$cnt=mysqli_num_rows(mysqli_query($this->connection,$res));
return $cnt;
				}
function delete($x)
				{
mysqli_query($this->connection,"delete FROM `contactlist` WHERE `cnt`='$x'");
				}																								
	}

?>
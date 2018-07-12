<?php
class session
	{
function __construct()
				{
session_start();	
				}
function session_create($email,$fname)
				{
$_SESSION['email']=@$email;$_SESSION['name']=@$fname;
				}
function idsession_fetch()
				{
@$email=$_SESSION['email'];
return @$email;
				}
function name_session_fetch()
				{
@$name=$_SESSION['name'];
return @$name;
				}
function update_session($sess)
				{
$_SESSION['name']=@$sess;

				}				
function session_check()
				{
@$email=$this->idsession_fetch();					
if(@$email== ""){	echo"<script>location.href='index.php';</script>";		}
				}													
	}

?>
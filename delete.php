<?php
include("class/database.php");
@$data=new database();
@$x=$_GET['x'];
$data->delete($x);
echo"<script>location.href='mycontact.php';</script>";
?>

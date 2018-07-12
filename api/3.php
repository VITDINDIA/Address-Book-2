<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#ws-walkscore-tile{position:relative;text-align:left}
#ws-walkscore-tile *{float:none;}#ws-foottext, #ws-footer a,#ws-footer a:link{font:11px/14px Verdana,Arial,Helvetica,sans-serif;margin-right:6px;white-space:nowrap;padding:0;color:#000;font-weight:bold;text-decoration:none}
#ws-footer a:hover{color:#000;text-decoration:none}#ws-footer a:active{color:#b14900}
</style>
</head>

<body>
<?php
	$Address=$_POST['address'];	
?>
<script type='text/javascript'>
var ws_wsid = '3a35e3284f214c8f823a1efbf7882e3d';
var ws_address = '<?php	 echo"$Address";	?>';
var ws_width = '1000';
var ws_height = '500';
var ws_layout = 'horizontal';
var ws_commute = 'true';
var ws_transit_score = 'true';
var ws_map_modules = 'all';
</script><div id='ws-walkscore-tile'><div id='ws-footer' style='position:absolute;top:464px;left:8px;width:688px'>
<span id='ws-foottext' style='float: left;'> <a id='ws-a' href='https://www.redfin.com/how-walk-score-works' target='_blank'></a> </span>

</div></div>

<script type='text/javascript' src='http://www.walkscore.com/tile/show-walkscore-tile.php'></script>
<div style="height:50px;"></div>
</body>
</html>
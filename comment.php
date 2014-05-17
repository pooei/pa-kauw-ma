<?php session_start();
include("connect.php");
		$cdb=new ConnectDB();
	    $cdb->openConn();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ผ้าขาวม้า  ความคิดเห็น</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ผ้าขาวม้า</title>
</head>

<body>

  <img src= "aaa.jpg">

<table>
	<tr>
		<td>user</td>
		<td>comment</td>
	</tr>
	<tr>
		<td>นาย โก้</td>
		<td> ซัค ...................................................... ซัคt</td>
	</tr>
</table>
<p><form>
	<input type="text" /><br/>
	<input type="text" /><br/>
	<input type="submit" />
	
</form></p>
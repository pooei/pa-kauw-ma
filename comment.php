<?php session_start();
include("connect.php");
		$cdb=new ConnectDB();
	    $cdb->openConn();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>��Ң�����  �����Դ���</title>
body,td,th {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
</style>
</head>

<body>
�ѡ�ҡ��
  <img src= "aaa.jpg">

<table>
	<tr>
		<td>���ͼ����ҹ</td>
		<td>�����Դ���</td>
	</tr>
	<tr>
		<td>��� ��</td>
		<td> �Ѥ ...................................................... �Ѥt</td>
	</tr>
</table>
<p><form>
	��ª��� <input type="text"  name = "user" /><br/>
	�����Դ���<input type="text" name  = "comment" /><br/>
	<input type="submit" />
	
</form></p>
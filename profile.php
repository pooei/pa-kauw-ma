<?php session_start();
include("connect.php");
		$cdb=new ConnectDB();
	    $cdb->openConn();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ผ้าขาวมา - profile</title>
<style type="text/css">
.style23 {font-size: 10px; color: #669900; font-family: "Times New Roman", Times, serif; }
</style>
</head>

<body>
 
<?php
	

if((isset($_GET['edit'])&&($_GET['edit']==1))&&(isset($_GET['id'])&&($_GET['id']!="")))
{
	$sqlbb="SELECT * FROM voiceovers WHERE voic_id='".$_GET['id']."'";
	$result=$cdb->getsql($sqlbb);
	$voic_id=$result[0][voic_id];	
	$voic_fname=$result[0]['voic_fname'];
	$voic_lname=$result[0][voic_lname];
		
	$voic_nick=$result[0][voic_nick];
	$voic_education=$result[0][voic_education];
	$voic_principle=$result[0][voic_principle];
	$voic_email=$result[0][voic_email];
	$voic_profile=$result[0][voic_profile];
	$voic_brith=$result[0][voic_brith];
	$voic_photo=$result[0][voic_photo];

	?>
    
<table width="800" border="0" align="center">
  <tr>
    <td colspan="4" align="center"><? echo "<img src='$voic_photo'" ?>&nbsp;</td>
  </tr>
  <tr>
    <td width="106" align="right">&nbsp;</td>
    <td width="237">&nbsp;</td>
    <td width="169" align="right">&nbsp;</td>
    <td width="270">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">ชื่อ</td>
    <td><? echo $voic_fname;?></td>
    <td align="right">คติ</td>
    <td><input name="username2" type="text" id="username2" value="<? echo $voic_principle;?>" size="25" /></td>
  </tr>
  <tr>
    <td align="right">นามสกุล</td>
    <td><input name="lname" type="text" id="lname" value="<? echo $voic_lname;?>" size="25" /></td>
    <td align="right">วันเกิด</td>
    <td><input name="username" type="text" id="username" value="<? echo $voic_brith;?>" size="25" /></td>
  </tr>
  <tr>
    <td align="right">ชื่อเล่น</td>
    <td><input name="lname2" type="text" id="lname2" value="<? echo $voic_nick;?>" size="25" />
    </td>
    <td align="right">อีเมล์</td>
    <td><input name="frm_pwd" type="text" id="frm_pwd" value="<? echo $voic_email;?>" size="25" /></td>
  </tr>
  <tr>
    <td align="right" >ประวัติการศึกษา</td>
    <td align="left" valign="middle"><textarea name="address" cols="30" rows="5" id="address">
    <? echo $voic_education; ?></textarea></td>
    <td align="right">ประวัติการทำงาน </td>
    <td align="left" valign="middle">
    <textarea name="address2" cols="30" rows="5" id="address2">
	<? echo $voic_profile; } ?></textarea></td>
  </tr>
  <tr>
    <td align="right"><a href="voic_list.php">กลับ</a>
    </td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
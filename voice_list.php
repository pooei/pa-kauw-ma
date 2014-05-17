<?php session_start();
include("connect.php");
		$cdb=new ConnectDB();
	    $cdb->openConn();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ผ้าขาวม้า</title>
</head>

<body><center><form id="form1" name="form1" method="post" action="">

       <?php
		$sqle="";
		$rse=array();
		$chk=0;
				$sqle="SELECT * FROM voiceovers";
				$rse=$cdb->getsql($sqle);

	
				if(count($rse)>=1){$chk=1;} 
				
			else{$chk=2;}
		
		if($chk==1)
		{
			$nc=count($rse);
			if($nc>=1)
			{
			
			?>
         </font></p>
     <font size="2" color="#333333">
<table  accesskey="1" cellpadding="1" cellspacing="1" >
  <tr>
    <td height="41" colspan="3" align="center" valign="top" bgcolor="#DEDEDE"><img src="voice_over.jpg" width="59" height="91" /></td>
  </tr>
  <?php
	for($i=0;$i<$nc;$i++)
	{
	 ?>
  <tr>
    <td width="100" height="41" rowspan="2" align="center" valign="top"><img src=<?php echo($rse[$i]['voic_photo']);?> height="100" /><br /><br /></td>
    <td width="67" rowspan="2" align="right" valign="top"><span class="style1">ชื่อ-สกุล</span> : <br />
    <span class="style1">ชื่อเล่น</span> : </td>
    <td width="166" align="left" valign="top"><?php echo($rse[$i]['voic_fname']);?>&nbsp;&nbsp;<?php echo($rse[$i]['voic_lname']);?><br />
    <?php echo($rse[$i]['voic_nick']);?><br /></td>
  </tr>
  <tr>
    <td align="right" valign="top"><font color="#333333" size="2">
    <a href="profile.php?edit=1&id=<?php echo($rse[$i]['voic_id']);?>">เพิ่มเติม</a></font>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>

  <?php }//end for ?>
    <tr>
    <td height="41" colspan="3" align="center" valign="top" bgcolor="#DEDEDE"><p>
    </p>  </td>
    </tr>
</table>
</font>
<p>&nbsp;</p>
     <p><a href="index.php">กลับ</a><font size="2" color="#333333">
       <?php
		
	}//end if nc>=1
}//end if chk==1
elseif($chk==2)
{
	echo("<font color='red'> ไม่พบข้อมูล </font>");
}		
 ?>
       
       </font>
     </p></form>
  </center>
</body>
</html>
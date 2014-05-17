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

<body>

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
<table  accesskey="1" cellpadding="1" cellspacing="1" bordercolor="#0072A6">
  <tr bgcolor="#006EA6">

    <td width="49"><div align="center" class="style1">รหัส</div></td>
      <td width="153"><div align="center" class="style1">ชื่อ-สกุล</div></td>
      <td width="80"><div align="center" class="style1">ชื่อเล่น</div></td>
	 <td width="80"><div align="center" class="style1">รูป</div></td>
    </tr>
  <?php
	for($i=0;$i<$nc;$i++)
	{
	 ?>
  <tr>
    <td width="49" height="41" align="center" valign="top"><?php echo($rse[$i]['voic_id']);?></td>
      <td width="153" align="left" valign="top"><?php echo($rse[$i]['voic_fname']);?>&nbsp;&nbsp;<?php echo($rse[$i]['voic_lname']);?></td>
      
      <td align="left" valign="top"><?php echo($rse[$i]['voic_nick']);?></td>
	  <td  align="left" valign="top"><img src=<?php echo($rse[$i]['voic_photo']);?> width="100" height="100" ></td>
    </tr>
  <?php }//end for ?>
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
     </p>
  <p>
</body>
</html>
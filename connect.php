<?php
class ConnectDB
{

	
	public $host="localhost";
	public $user="pakauwma";
	public $pass= "pakauwma";
	public $dbname="pakauwma";

	function openConn() 
	{
		mysql_connect($this->host,$this->user,$this->pass) or die("Could not connect:" . mysql_error());
		$this->selectDB();
	}
	function closeConn() 
	{
		mysql_close();
	}

	function selectDB()
	{
		mysql_select_db($this->dbname) or die("Cannot select database.");
		mysql_query("SET NAMES UTF8");
	}
	function getsql($sql)
    {  
        $qry = mysql_query($sql);
		$results=array();
		if($qry)
		{
			while ($row = mysql_fetch_array($qry))
			{    
			   $results[] = $row;
			}
		}
		return $results;
    }
	function querysql($sql)
    {  
        $qry = mysql_query($sql);
		if($qry)
		{
			return 1;
		}
		else
		{
			return "";
		}
    }
}

?>
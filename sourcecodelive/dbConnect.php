<?PHP 
$con = mysql_connect("mysql401.opentransfer.com", "respons_keyr", "Locked1243");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("respons_kr02", $con);
  
?>
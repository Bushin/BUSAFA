<?php
 error_reporting(E_ALL & ~E_DEPRECATED);
 $connect = mysql_connect('localhost','root','14011995') or die(mysql_error());
 mysql_select_db('mysql');
 
$request= "SELECT Ntext, Ntitle, Ndate FROM news ORDER BY id DESC LIMIT 5";
$result=mysql_query($request);
while($row=mysql_fetch_array($result)){
	echo "<table align="center" width=98% border="0" cellpadding=3 cellspacing=1 bgcolor=#FDFEFF>";
	echo "<tr><td bgcolor=#FFFFFF>".$row['Ntitle']."   Дата ".$row['Ndate']." </td></tr>";
	echo "<tr><td bgcolor=#FFFFFF>".$row['Ntext']."</td></tr>";
	echo "<tr><td bgcolor=#F4F4F4> </td></tr></table><br>";
}
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.t_tabula{
text-align:right;
}
</style><title>Visi tulkojumi</title></head><body>
<?php
$db_con = mysql_connect('localhost','root','1500447707');
if (!isset($db_con)){
Exit();
}
mysql_select_db('tulkojumi',$db_con);
mysql_query("ALTER DATABASE tulkojumi CHARACTER SET utf8;");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
$result = mysql_query("SELECT * FROM vardi");
echo "<table border='1' width='1250'><tr><th>Latviešu</th><th>English</th><th>Русский</th></tr>";
$skaits=0;
while($row = mysql_fetch_array($result))
{
$skaits=$skaits+1;
echo "<tr><td>" . $row['lv'] . "</td><td>" . $row['en'] . "</td><td>" . $row['ru'] . "</td></tr>";
}
echo "</table>";
echo("<br/>Tulkojumu skaits: $skaits");
mysql_close($db_con);

?>
</body></html>

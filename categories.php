<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.t_tabula{text-align:right;}
</style>
<title>Tulkojumu kategorijas</title>
</head>
<script>
var car;
function annuler () {
car = document.meklesana.mekl.value;
 car=car.replace(/\u200b/g, "");
document.meklesana.mekl.value=car;
}
</script>
<body>
<div class="izvelne"
	<ul class="izvelne">
	<li><a href="search">Sākums</a></li>
	<li><a href="import">Importēt</a></li>
	<li><a href="all">Viss</a></li>
	<li><a href="categories">Kategorijas</a></li>
	<li><a href="login">Ienākt/reģistrēties</a></li>
	</ul><br/><br/>
</div>
<form name="meklesana" action = "categories.php" method = "post" enctype="multipart/form-data">
<br/><br>
Izvēlieties kategoriju:<br/>
<select name="kategorijas">
	<option value="">(Izvēlieties..)</option>
	<option value="-l">Lietvārds</option>
	<option value="-d">Darbības vārds</option>
	<option value="-i">Īpašības vārds</option>
	<option value="-v">Vietniekvārds</option>
	<option value="-a">Apstākļa vārds</option>
	<option value="-s">Skaitļa vārds</option>
	<option value="-n">Īpašvārds</option>
	<option value="-c">Cits</option>
	<option value="?f">Frāze</option>
	<option value="?j">Jautājums</option>
	<option value="?t">Teikums</option>
	<option value=".i">Ikdienas situācija</option>
	<option value=".o">Oficiāla saruna</option>
	<option value=".c">Neoficiāla saruna</option>
</select>
<br/><br/>
<input type = "submit" value = "Meklēt" name = "meklet" style="width: 100px ; height: 40px"><br/><br/>
</form>
<?php
$db_con = mysql_connect('localhost','root','1500447707');
if (!isset($db_con))
{
	alert("Error: connection failed!");
	Exit();
}
mysql_select_db('tulkojumi',$db_con);
mysql_query("ALTER DATABASE tulkojumi CHARACTER SET utf8;");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");

if (isset($_POST['kategorijas']))
{
	$kat=$_POST['kategorijas'];
	$result = mysql_query("SELECT * FROM vardi where kat like '%$kat%'");
}
else
{
	Exit();
}

$skaits=0;
while($row = mysql_fetch_array($result))
{
	$skaits=$skaits+1;
	if ($skaits==1)
	echo "<table border='1' width='1250'><tr><th>Latviešu</th><th>English</th><th>Русский</th></tr>";
	echo "<tr><td><a href=info/?id=" . $row['id'] . ">" . $row['lv'] . "</a></td><td>" . $row['en'] . "</td><td>" . $row['ru'] . "</td></tr>";
}
if($skaits>0)
echo "</table>";
if ($skaits==0)
	echo("<br/>Nekas nav atrasts.");
if ($skaits==1)
	echo("<br/>Atrasts 1 rezultāts.");
else
if ($skaits>0)
echo("<br/>Atrasti $skaits rezultāti.");

mysql_close($db_con);
$name="searchhistory.txt";
$file=fopen("$name","a");
$a=microtime();
$laiks=date('d-m-Y H:i:s');
fwrite($file,"$laiks	Teksts: $teksts	Valoda: $valoda	Tips: $tips\r\n");
fclose($file);
$valoda="";
$teksts="";
$tips="";

?>
</body>
</html>

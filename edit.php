<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
<?php
if(login_check($mysqli) == true)
{
echo <<< EOT
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.t_tabula{text-align:right;}
</style>
<title>Labot tulkojumu</title>
</head>
<body>
EOT;
?>
<?php
$result="";
$id="";
$id=strval($_GET["id"]);
if (($id=="")||($id==0))
	Exit();
$db_con = mysql_connect('localhost','root','1500447707');
if (!isset($db_con))
{
	alert("Kļūda: Neizdodas savienoties!");
	Exit();
}
$valoda="en";
$teksts="";
$tips="";
mysql_select_db('tulkojumi',$db_con);
mysql_query("ALTER DATABASE tulkojumi CHARACTER SET utf8;");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
$result = mysql_query("SELECT * FROM vardi where id = $id");
while($row = mysql_fetch_array($result))
{
	$en=$row['en'];
	$lv=$row['lv'];
	$ru=$row['ru'];
}
if($lv=="")
	Exit();
mysql_close($db_con);
?>
<form name="redigesana" action = "edit.php" method = "post" enctype="multipart/form-data">
	<table>
		<center>ID: <?php echo $id;?><br/></center>
		<tr><td class = "t_tabula"><span title="Latvian (example: sveiki!)">Latviešu:</span></td><td><input type = "text" name = "lv" size = "160" maxlength = "255" value="<?php echo $lv;?>"></td></tr>
		<tr><td class = "t_tabula"><span title="English (example: hello!)">English:</span></td><td><input type = "text" name = "en" size = "160" maxlength = "255" value="<?php echo $en;?>"></td></tr>
		<tr><td class = "t_tabula"><span title="Russian (example: здравствуйте!)">Русский:</span></td><td><input type = "text" name = "ru" size = "160" maxlength = "255" value="<?php echo $ru;?>"></td></tr>
	</table><br/>
	<input type = "submit" value = "Saglabāt" name = "meklet" style="width: 100px ; height: 40px"><br/><br/>
</form>
<?php
if(isset($_POST["meklet"]))
{
	$ulv=$_POST["lv"];
	$uen=$_POST["en"];
	$uru=$_POST["ru"];
	$ulv=trim($ulv);
	$uen=trim($uen);
	$uru=trim($uru);
	if ($uen=="")
	{
		echo("Lūdzu, ievadiet angļu tulkojumu!");
		Exit();
	}
	if (($ulv==$lv)&&($uen==$en)&&($uru==$ru))
		Exit("Tulkojumi netika mainīti. Nekas nav izdarīts.");
	$db_con = mysql_connect('localhost','root','1500447707');
	if (!isset($db_con))
	{
		alert("Kļūda: Neizdodas savienoties!");
		Exit();
	}
	mysql_query("ALTER DATABASE tulkojumi CHARACTER SET utf8;");
	mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER SET utf8");
	mysql_select_db('tulkojumi',$db_con);
	$sid=strval($id);
	mysql_query("UPDATE `tulkojumi`.`vardi` SET `lv`='$ulv',`en`='$uen',`ru`='$uru' WHERE `vardi`.`id` = $id LIMIT 1 ;") or die(mysql_error());
	$lv="";
	$en="";
	$ru="";
	$ulv="";
	$uen="";
	$uru="";
}
}
else
{
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	echo 'Jūs neesat autorizējies. Lūdzu, <a href="login">ielogojieties</a>!';
}
?>
</body>
</html>

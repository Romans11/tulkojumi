<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.t_tabula{
text-align:right;
}
</style>
<title>Importēt tulkojumus</title>
</head>
<body OnLoad="document.t.tulkojums.focus();">
<div id = "vidus">
<form name="t" action = "import.php" method = "post" enctype="multipart/form-data">
<br/>
<center><h3>Importēt tulkojumus</h3></center>
Pievienošanas kārtība: 1) LV ; 2) EN ; 3) RU ; 4) Kategorija ; 5) Tukša rinda<br/><br/>
<textarea name="tulkojums" rows=25 cols=150></textarea><br/>
<center><input type = "submit" value = "Pievienot" name = "saglabat" style="width: 100px ; height: 50px"><br/><br/><br/>
Vairāk: <a href="all">Visi tulkojumi</a></center>
</form>
</div>
<?php
if(isset($_POST["saglabat"])){
$tteksts=$_POST["tulkojums"];
$tskaits=substr_count($tteksts,"\n");
$sk=0;
$db_con = mysql_connect('localhost','root','1500447707');
if (!isset($db_con)){
alert("Kļūda: Neizdodas savienoties ar datubāzi!");
Exit();
}
mysql_query("ALTER DATABASE tulkojumi CHARACTER SET utf8;");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
mysql_select_db('tulkojumi',$db_con);
foreach(preg_split("/((\r?\n)|(\r\n?))/", $tteksts) as $line){
$sk=$sk+1;
$skk=$sk%5;
if ($skk==1)
$lv=$line;
if ($skk==2)
$en=$line;
if ($skk==3)
$ru=$line;
if ($skk==4)
$kat=$line;
$lv=trim($lv);
$en=trim($en);
$ru=trim($ru);
$kat=trim($kat);
if ($skk==4)
{
mysql_query("INSERT INTO vardi (lv,en,ru,kat) VALUES ('$lv','$en','$ru','$kat')");
$lv="";
$en="";
$ru="";
$kat="";
}
}
}
?>
</body>
</html>
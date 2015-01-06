<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.t_tabula{
text-align:right;
}
</style>
<title>Meklēt tulkojumus</title>
</head>
<script type="text/javascript">
if (document.layers)
document.captureEvents(Event.KEYDOWN);
document.onkeydown =
function (evt) {
var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
if (keyCode == 13) { 
document.getElementById('meklet').click();
}
};
</script>
<script type="text/javascript"> 
function alpha(item) { 
var input = document.meklesana.mekl;
if (document.selection) { 
input.focus();
range = document.selection.createRange() ;
range.text = item ;
range.select(); 
}
else if (input.selectionStart || input.selectionStart == '0') {
var startPos = input.selectionStart;
var endPos = input.selectionEnd;
var cursorPos = startPos;
var scrollTop = input.scrollTop;
var baselength = 0;
input.value = input.value.substring(0, startPos)
+ item
+ input.value.substring(endPos, input.value.length);
cursorPos += item.length;
input.focus();
input.selectionStart = cursorPos;
input.selectionEnd = cursorPos;
input.scrollTop = scrollTop;
}
else {
input.value += item;
input.focus();
}
}

var car;
function annuler () {
car = document.meklesana.mekl.value;
 car=car.replace(/\u200b/g, "");
document.meklesana.mekl.value=car;
}
</script>
<body OnLoad="document.meklesana.mekl.focus();">
<form name="meklesana" action = "search.php" method = "post" enctype="multipart/form-data">
<br/><b>Valoda:</b><br/>
<input type="radio" name="valoda" value="a" checked>Viss 
<input type="radio" name="valoda" value="lv">Latviešu 
<input type="radio" name="valoda" value="en">Angļu 
<input type="radio" name="valoda" value="ru">Krievu 
<br/><br/><b>Ierakstu tips:</b><br/>
<input type="radio" name="tips" value="auto" checked>Auto
<input type="radio" name="tips" value="skip">Izlaist teikumus
<input type="radio" name="tips" value="start">Sākas ar
<input type="radio" name="tips" value="end">Beidzas ar
<input type="radio" name="tips" value="regex">RegEx
<br/><br/>
<b>Vārds vai teksts:</b>
<input type = "text" name = "mekl" size = "100" maxlength = "255">
<input type="button" value="|" onclick="alpha(&#39;|&#39;)"/>
<input type="button" value="\" onclick="alpha(&#39;\\&#39;)"/>
<br/>
<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
echo ('<br/>Vairāk: <a href="table.php">Visi tulkojumi</a></a><br/>');
?>
<br/>
<input type = "submit" value = "Meklēt" name = "meklet" style="width: 100px ; height: 40px"><br/><br/>
</form>
<?php
$db_con = mysql_connect('localhost','root','1500447707');
if (!isset($db_con)){
alert("Error: connection failed!");
Exit();
}
$valoda="en";
$teksts="";
$tips="";
if(isset($_POST['meklet'])){
if (!isset($_POST['mekl'])){
echo("Lūdzu, ievadiet meklējamo tekstu!");
Exit();
}
$teksts=$_POST['mekl'];
if ($teksts==""){
echo("Lūdzu, ievadiet meklējamo tekstu!");
Exit();
}
if (isset($_POST['valoda']))
$valoda=$_POST['valoda'];
if ($valoda=="")
$valoda="en";
if (isset($_POST['tips']))
$tips=$_POST['tips'];
if ($tips=="")
$tips="auto";
mysql_select_db('tulkojumi',$db_con);
mysql_query("ALTER DATABASE tulkojumi CHARACTER SET utf8;");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
$skaits=0;
if ($valoda=="a"){
if ($tips=="auto")
$result = mysql_query("SELECT * FROM vardi where lv like '%$teksts%' or en like '%$teksts%' or ru like '%$teksts%'");
if ($tips=="skip")
$result = mysql_query("SELECT * FROM vardi where lv like '%$teksts%' or en like '%$teksts%' or ru like '%$teksts%'");
if ($tips=="start")
$result = mysql_query("SELECT * FROM vardi where lv rlike '^$teksts' or en rlike '^$teksts' or ru rlike '^$teksts'");
if ($tips=="end")
$result = mysql_query("SELECT * FROM vardi where lv rlike '$teksts$' or en rlike '$teksts$' or ru rlike '$teksts$''");
if ($tips=="regex")
$result = mysql_query("SELECT * FROM vardi where lv rlike '$teksts' or en rlike '$teksts' or ru rlike '$teksts'");
}
else
{
if ($tips=="auto")
$result = mysql_query("SELECT * FROM vardi where $valoda like '%$teksts%'");
if ($tips=="skip")
$result = mysql_query("SELECT * FROM vardi where $valoda like '%$teksts%'");
if ($tips=="start")
$result = mysql_query("SELECT * FROM vardi where $valoda rlike '^$teksts'");
if ($tips=="end")
$result = mysql_query("SELECT * FROM vardi where $valoda rlike '$teksts$'");
if ($tips=="regex")
$result = mysql_query("SELECT * FROM vardi where $valoda rlike '$teksts'");
}
if ($result==""){
echo ("Nekas nav atrasts!");
Exit();
}
while($row = mysql_fetch_array($result))
{
if($tips=="skip"){
if(strlen($row['en'])<26){
$skaits=$skaits+1;
if ($skaits==1)
echo "<table border='1' width='1250'><tr><th>Latviešu</th><th>English</th><th>Русский</th></tr>";
echo "<tr><td><a href=info/?id=" . $row['id'] . ">" . $row['lv'] . "</a></td><td>" . $row['en'] . "</td><td>" . $row['ru'] . "</td></tr>";
}
}
else
{
$skaits=$skaits+1;
if ($skaits==1)
echo "<table border='1' width='1250'><tr><th>Latviešu</th><th>English</th><th>Русский</th></tr>";
echo "<tr><td><a href=info/?id=" . $row['id'] . ">" . $row['lv'] . "</a></td><td>" . $row['en'] . "</td><td>" . $row['ru'] . "</td></tr>";
}
}
if($skaits>0)
echo "</table>";
if ($skaits==1){
echo("<br/>Atrasts 1 rezultāts.");
}
else
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
}
?>
</body>
</html>

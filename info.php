<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.t_tabula{
text-align:right;
}
</style>
<title>Informācija par tulkojumu</title>
</head>
<body>
<br/><br/>
<?php
$eid="";
$eid=strval($_GET['id']);
if ($eid==""){
Exit();
}
$result="";
$db_con = mysql_connect('localhost','root','1500447707');
if (!isset($db_con)){
alert("Kļūda: Neizdodas savienoties!");
Exit();
}
$teksts="";
mysql_select_db('tulkojumi',$db_con);
mysql_query("ALTER DATABASE tulkojumi CHARACTER SET utf8;");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
$result = mysql_query("SELECT * FROM vardi where id = $eid");
if ($result==""){
echo ("");
Exit();
}
$c="";
while($row = mysql_fetch_array($result))
{
echo("<big><b><span title=Latviešu>Latviešu</span></b>: ".$row['lv']."<br/>");
echo("<b><span title=English>Angļu</span></b>: ".$row['en']."<br/>");
echo("<b><span title=Русский>Krievu</span></b>: ".$row['ru']."<br/>");
$c=$row['i'];
}
echo "</table><br/>";
mysql_close($db_con);
echo("<a href=\"../edit?id=$id\">Labot šo tulkojumu</a><br/><br/>");
if (strlen($c)==0){
echo("Šis tulkojums nav nevienā kategorijā.");
Exit();
}
echo("<br/><h2>Kategorijas</h2><big>");
function nosen($k)
{
if ($k=="-l") $k="Noun";
if ($k=="-d") $k="Verb";
if ($k=="-i") $k="Adjective";
if ($k=="-v") $k="Pronoun";
if ($k=="-a") $k="Adverb";
if ($k=="-s") $k="Numeral";
if ($k=="-n") $k="Proper name";
if ($k=="-c") $k="Other";
if ($k=="?f") $k="Phrase";
if ($k=="?j") $k="Question";
if ($k=="?t") $k="Sentence";
if ($k==".i") $k="Everyday situation";
if ($k==".o") $k="Formal conversation";
if ($k==".c") $k="Casual conversation";
return $k;
}
function noslv($k)
{
if ($k=="-l") $k="Lietvārds";
if ($k=="-d") $k="Darbības vārds";
if ($k=="-i") $k="Īpašības vārds";
if ($k=="-v") $k="Vietniekvārds";
if ($k=="-a") $k="Apstākļa vārds";
if ($k=="-s") $k="Skaitļa vārds";
if ($k=="-n") $k="Īpašvārds";
if ($k=="-c") $k="Cits";
if ($k=="?f") $k="Frāze";
if ($k=="?j") $k="Jautājums";
if ($k=="?t") $k="Teikums";
if ($k==".i") $k="Ikdienas situācija";
if ($k==".o") $k="Oficiāla saruna";
if ($k==".c") $k="Neoficiāla saruna";
return $k;
}
function nosru($k)
{
if ($k=="-l") $k="Существительное";
if ($k=="-d") $k="Глагол";
if ($k=="-i") $k="Прилагательное";
if ($k=="-v") $k="Местоимение";
if ($k=="-a") $k="Наречие";
if ($k=="-s") $k="Число";
if ($k=="-n") $k="Имя собственное";
if ($k=="-c") $k="Другoe";
if ($k=="?f") $k="Фраза";
if ($k=="?j") $k="Вопрос";
if ($k=="?t") $k="Предложение";
if ($k==".i") $k="Повседневная ситуация";
if ($k==".o") $k="Формальный разговор";
if ($k==".c") $k="Неформальный разговор";
return $k;
}
if (strlen($c)==2){
echo ("<table border=0><tr><td><b>Latviešu</b></td><td>" . noslv($c) . "</td></tr>");
echo ("<tr><td><b>English</b></td><td>" . nosen($c) . "</td></tr>");
echo ("<tr><td><b>Русский</b></td><td>" . nosru($c) . "</td></tr></table></big>");
Exit();
}
if (strlen($c)==4){

Exit();
}
if (strlen($c)==6){

Exit();
}
if (strlen($c)==8){

Exit();
}
if (strlen($c)==10){

Exit();
}
if (strlen($c)==12){

Exit();
}
?>
</body>
</html>

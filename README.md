TTI PD Tulkojumi

<h2>Izstrādes komanda</h2>

<p class=MsoNormal style='margin-bottom:6.0pt'>Darba izstrādē piedalās viens LU
DF students:</p>

<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l0 level1 lfo1'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Romāns Kolduns, rk13025 (projektēšana, saskarnes
izstrāde, programmēšana)</p>

<h2>Izstrādes platforma</h2>

<p class=MsoNormal>Sistēmu paredzēts izstrādāt PHP 5.2.6 vidē, neizmantojot
papildu bibliotēkas un ietvarus. Datu glabāšanai tiks lietota MySQL datubāze.</p>

<h2>Galvenā funkcionalitāte</h2>

<p class=MsoNormal>Darbā tiks izstrādāta tulkojumu sistēma, kas paredzēta
teksta tulkojumu apkopošanai un kategorizācijai.</p>

<p class=MsoNormal>Sistēmā varēs pievienot, rediģēt un dzēst jebkurus tajā
esošos ierakstus. Tulkojumus varēs ne tikai pievienot pa vienam, bet arī
importēt lielā skaitā vienā reizē.</p>

<p class=MsoNormal>Būs pieejams visu tulkojumu saraksts. Tulkojumi drīkstēs
sastāvēt gan no viena vārda, gan no vesela teikuma. Tātad tie iedalīsies
kategorijās, piemēram, lietvārds, īpašības vārds, teikums (ir iespējamas arī
vairākas kategorijas vienlaicīgi). Katram ierakstam varēs apskatīt detalizētu
informāciju un tulkojumus visās pieejamajās valodās.</p>

<p class=MsoNormal>Būs meklēšanas iespēja. Būs atļauts meklēt gan pēc
kategorijām, gan arī, izmantojot regulārās izteiksmes.</p>

<h2>Datu reģistri</h2>

<p class=MsoNormal>Sistēma sastāv no ierakstiem, kur katrs ieraksts satur
tulkojumus visās pieejamajās valodās (kā mimimums, latviešu, krievu un angļu)
un kategorijas. Tulkojumi tiek kārtoti pēc kategorijas.</p>

<h2>Lietotāju lomas</h2>

<p class=MsoNormal>Sistēmā būs 3 lietotāju grupas – autentificētie, anonīmie
lietotāji un administrators. Katrai no šīm grupām ir atšķirīgas tiesības:</p>

<p class=MsoNormal style='margin-bottom:6.0pt'>Anonīmie lietotāji:</p>

<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l0 level1 lfo1'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>var apskatīt katru kategoriju un tajā esošos
ierakstus (redzēt tikai saites uz detalizētu informāciju, bet pati informācija
nebūs pieejama).</p>

<p class=MsoNormal style='margin-bottom:6.0pt'>Autentificētie lietotāji:</p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l0 level1 lfo1'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>var veikt tās pašas darbības, ko anonīmie
lietotāji;</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l0 level1 lfo1'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>pievienot, rediģēt un dzēst jebkuru ierakstu;</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt;mso-list:l0 level1 lfo1'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>apskatīt detalizētu informāciju jebkuram
tulkojumam.</p>

<p class=MsoNormal style='margin-bottom:6.0pt'>Administrators:</p>

<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l0 level1 lfo1'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>var visu.</p>

<h2>Lietotāju autentifikācija</h2>

<p class=MsoNormal>Lietotāji varēs piekļūt sistēmai, izmantojot Facebook
autentifikāciju. Būs iespējams reģistrēties, izvēloties lietotājvārdu un
paroli. Izveidotais lietotājs netiks sasaistīts ar Facebook profilu.</p>

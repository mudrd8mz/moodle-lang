<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9.3+ (Build: 20081112) (2007101531)


$string['description'] = 'Ta metoda bo ponavljajoče preverjala in procesirala posebno formatirano besedilno datoteko na lokaciji, ki jo boste določili. Ta datoteka mora biti tipa CSV (comma separated), ki ima štiri do šest podatkov v vsaki vrstici:
<pre>
* operacija, vloga, številka ID (uporabnika), številka ID (predmeta) [, začetek, konec]
kjer je:
* operacija = add | del
* vloga = student | teacher | teacheredit
* številka ID (uporabnika) = idnumber v tabeli uporabnikov NB not id
* idnumber(course) = idnumber v tabeli predmetov NB not id
* začetek = začetni čas (v sekundah od epoch) - opcijsko
* konec = končni čas (v sekundah od epoch) - opcijsko
</pre>
Datoteka naj zgleda nekako takole:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Navadna datoteka';
$string['filelockedmail'] = 'Besedilne datoteke, ki jo uporabljate za vpis na osnovi datoteke ($a) cron proces ne more izbrisati.  To običajno pomeni, da so njena dovoljenja napačna.  Prosimo, popravite dovoljenja tako, da Moodle lahko izbriše datoteko, sicer bo lahko obdelovana vedno znova.';
$string['filelockedmailsubject'] = 'Pomembna napaka: datoteka vpisa';
$string['location'] = 'Lokacija datoteke';
$string['mailadmin'] = 'Obvesti skrbnika z e-pošto';
$string['mailusers'] = 'Obvesti uporabnike z e-pošto';

?>

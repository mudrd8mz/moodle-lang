<?PHP // $Id:enrol_imsenterprise.php from enrol_imsenterprise.xml
      // Comments: tomaz at zid dot si

$string['enrolname'] = 'Datoteka IMS Enterprise';
$string['basicsettings'] = 'Osnovne nastavitve';
$string['usersettings'] = 'Možnosti uporabniških podatkov';
$string['coursesettings'] = 'Možnosti podatkov o predmetu';
$string['miscsettings'] = 'Razno';
$string['description'] = 'Ta način bo redno preverjal in obdeloval posebno oblikovano besedilno datoteko na lokaciji, ki jo navedete.  Datoteka mora ustrezati <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>specifikaciji IMS Enterprise</a> in vsebovati XML elemente oseba, skupina in članstvo (person, group in membership).';
$string['createnewusers'] = 'Ustvari uporabniške račune za uporabnike, ki še niso registrirani';
$string['deleteusers'] = 'Izbriši uporabniške račune, če je tako določeno v IMS podatkih';
$string['fixcaseusernames'] = 'Spremeni uporabniška imena v male črke';
$string['fixcasepersonalnames'] = 'Spremeni osebna imena v Velike Začetnice';
$string['truncatecoursecodes'] = 'Skrajšaj kode predmetov na to dolžino';
$string['createnewcourses'] = 'Ustvari nove (skrite) predmete, če jih ni v Moodle';
$string['createnewcategories'] = 'Ustvari nove (skrite) kategorije predmetov, če jih ni v Moodle';
$string['zeroisnotruncation'] = '0 označuje brez krajšanja';
$string['cronfrequency'] = 'Pogostost obdelave';
$string['allowunenrol'] = 'Dovoli IMS podatkom <strong>izpis</strong> udeležencev in izvajalcev';
$string['sourcedidfallback'] = 'Uporabi &quot;sourcedid&quot; za userid osebe, če polje &quot;userid&quot; ni najdeno';
$string['usecapitafix'] = 'Označite ta okvirček, če uporabljate &quot;Capita&quot; (njihov zapis XML je nekoliko napačen)';
$string['location'] = 'Mesto datoteke';
$string['mailusers'] = 'Obvesti uporabnike z e-pošto';
$string['mailadmins'] = 'Obvesti skrbnika z e-pošto';
$string['processphoto'] = 'Dodaj fotografijo uporabnika v profil';
$string['processphotowarning'] = 'Opozorilo: Obdelava slik bo verjetno dodala pomembno obremenitev strežnika. Če pričakujete obdelavo velikega števila udeležencev, ni priporočljivo vključiti te možnosti.';
$string['logtolocation'] = 'Mesto zapisovanja datoteke dnevnika  (prazno brez beleženja dnevnika)';
$string['restricttarget'] = 'Obdelaj podatke samo, če je določen naslednji cilj';
$string['aftersaving...'] = 'Ko ste shranili vaše nastavitve, boste morda želeli';
$string['doitnow'] = 'takoj izvesti uvoz IMS Enterprise';
$string['filelockedmailsubject'] = 'Pomembna napaka: datoteka vpisa';
$string['filelockedmail'] = 'Besedilne datoteke, ki jo uporabljate za vpis na osnovi IMS datoteke ($a) cron proces ne more izbrisati.  To običajno pomeni, da so njena dovoljenja napačna.  Prosimo, popravite dovoljenja tako, da Moodle lahko izbriše datoteko, sicer bo lahko obdelovana vedno znova.';


?>
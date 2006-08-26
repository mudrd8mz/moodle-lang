<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.6 + (2006050506)


$string['aftersaving...'] = 'Jednom kad ste sačuvali svoja podešavanja, možda ćete poželeti da';
$string['allowunenrol'] = 'Dozvoliti IMS podacima da <strong>ispisuju</strong> studente/predavače';
$string['basicsettings'] = 'Osnovna podešavanja';
$string['coursesettings'] = 'Opcije podataka kursa';
$string['createnewcategories'] = 'Kreiranje novih (skrivenih) kategorija kurseva ako ne budu pronađene u Moodle sistemu';
$string['createnewcourses'] = 'Kreiranje novih (skrivenih) kurseva ako ne budu pronađeni u Moodle sistemu';
$string['createnewusers'] = 'Kreiranje korisničkih naloga za korisnike koji još nisu registrovani u Moodle sistemu';
$string['cronfrequency'] = 'Učestalost procesiranja';
$string['deleteusers'] = 'Obrisati korisničke naloge ako tako nalažu IMS podaci';
$string['description'] = 'Ovaj metod će konstantno tražiti i procesirati specijalno formatiranu tekstualnu datoteku na lokaciji koju ste naveli. Datoteka mora da bude u skladu sa <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>IMS Enterprise specifikacijama</a> i da sadrži XML elemente osobe, grupe i članstva.';
$string['doitnow'] = 'izvršiti IMS Enterprise uvoz upravo sada';
$string['enrolname'] = 'IMS Enterprise datoteka';
$string['filelockedmail'] = 'Tekstualnu datoteku korišćenu za IMS-bazirane upise ($a) ne može obrisati cron proces. To obično znači da ona ima pogrešne dozvole pristupa. Molimo ispravite ih i podesite tako da Moodle može da obriše datoteku, jer bi u protivnom ona bila u situaciji da se neprestano procesira.';
$string['filelockedmailsubject'] = 'Važna greška: Datoteka upisa';
$string['fixcasepersonalnames'] = 'Sva lična imena čuvati zapisana velikim početnim slovima';
$string['fixcaseusernames'] = 'Sva korisnička imena čuvati zapisana malim slovima';
$string['location'] = 'Lokacija datoteke';
$string['logtolocation'] = 'Lokacija za datoteku sa zapisima o korišćenju (prazno ako se ne kreiraju takvi zapisi)';
$string['mailadmins'] = 'Obavestiti administratora e-poštom';
$string['mailusers'] = 'Obavestiti korisnike e-poštom';
$string['miscsettings'] = 'Razno';
$string['processphoto'] = 'Dodavanje fotografije korisnika u profil';
$string['processphotowarning'] = 'Upozorenje: procesiranje slika će vrlo verovatno dodatno opteretiti server. Preporučuje Vam se da ne aktivirate ovu opciju ako se očekuje procesiranje velikog broja studenata.';
$string['restricttarget'] = 'Samo procesirati podatke ako je sledeća lokacija specificirana';
$string['sourcedidfallback'] = 'Koristiti \"sourcedid\" za identifikator korisnika ako \"userid\" polje nije pronađeno';
$string['truncatecoursecodes'] = 'Skratiti kod kursa na ovu dužinu.';
$string['usecapitafix'] = 'Potvrdite ovu opciju ako koristite \"Capita\" (njihov XML format je pomalo netačan)';
$string['usersettings'] = 'Opcije korisničkih podataka';
$string['zeroisnotruncation'] = '0 znači bez skraćivanja';

?>

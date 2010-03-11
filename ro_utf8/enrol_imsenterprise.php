<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['aftersaving...'] = 'După salvarea setărilor recomandăm realizarea următoarelor acţiuni:';
$string['allowunenrol'] = 'Permite IMS data să  <strong>anuleze</strong> înscrierile  cursanţilor/profesorilor';
$string['basicsettings'] = 'Setări de bază';
$string['coursesettings'] = 'Opţiuni date cursuri';
$string['createnewcategories'] = 'Creează categorii noi de cursuri (ascunse) dacă nu sunt găsite în Moodle';
$string['createnewcourses'] = 'Creează cursuri noi (ascunse) dacă nu sunt găsite în Moodle';
$string['createnewusers'] = 'Creează conturi pentru utilizatori care nu s-au înregistrat încă pe Moodle';
$string['cronfrequency'] = 'Frecvenţă procesare';
$string['deleteusers'] = 'Şterge conturi utilizatori atunci când acest lucru este specificat în IMS data';
$string['description'] = 'Această metodă va verifica în mod repetat existenţa şi va procesa un fişier text cu formatare specială situat în locaţia specificată de dumneavoastră. Fişierul trebuie să fie conform cu <a href=\'../help.php?module=enrol/imsenterprise&amp;file=formatoverview.html\'>IMS Enterprise specifications</a> şi să conţină elemente XML persoană, grup şi relaţie.';
$string['doitnow'] = 'efectuează o operaţiune de import IMS Enterprise în acest moment';
$string['enrolname'] = 'Fişier IMS Enterprise';
$string['filelockedmail'] = 'Fişierul text ($a) pe care îl folosiţi pentru înscrierile pe bază de fişier IMS nu poate fi şters de procesul cron. Acest lucru se întâmplă cel mai adesea din cauză că nu există permisiunea necesară. Vă rugăm setaţi permisiunile necesare astfel încât Moodle să poată şterge fişierul respectiv, în caz contrar va fi procesat în buclă';
$string['filelockedmailsubject'] = 'Eroare importantă: Fişier Înscrieri';
$string['fixcasepersonalnames'] = 'Scrie numele personale cu majuscule';
$string['fixcaseusernames'] = 'Scrie numele de utilizatori cu litere mici';
$string['imsrolesdescription'] = 'Specificaţiile IMS Enterprise includ 8 tipuri diferite de roluri. Vă rugăm stabiliţi modul în care doriţi ca aceste roluri să fie folosite în cadrul Moodle, şi de asemenea dacă doriţi să eliminaţi vreunul din ele.';
$string['location'] = 'Locaţie fişier';
$string['logtolocation'] = 'Locaţia în care se salvează fişierul cu înregistrarea activităţii (lăsaţi necompletat dacă nu doriţi înregistrarea activităţii)';
$string['mailadmins'] = 'Notifică admin prin email';
$string['mailusers'] = 'Notifică utilizatori prin email';
$string['miscsettings'] = 'Diverse';
$string['processphoto'] = 'Adaugă informaţiile despre fotografia utilizatorului la profil';
$string['processphotowarning'] = 'ATENŢIE!: procesarea imaginilor va aduce o încărcătură suplimentară serverului. În cazul în care estimaţi un număr mare de utilizatori se recomandă să nu activaţi această opţiune.';
$string['restricttarget'] = 'Procesează datele doar dacă se specifică următoarea valoare';
$string['sourcedidfallback'] = 'Foloseşte &quot;sourcedid&quot; ca userid al unei persoane dacă nu s-a găsit câmpul &quot;userid&quot;';
$string['truncatecoursecodes'] = 'Fragmentează codurile cursurilor la această lungime';
$string['usecapitafix'] = 'Selectaţi această căsuţă dacă folosiţi &quot;Capita&quot; (formatul XML al acestora este puţin greşit)';
$string['usersettings'] = 'Opţiuni date utilizator';
$string['zeroisnotruncation'] = 'completaţi 0 dacă nu doriţi fragmentarea';

?>

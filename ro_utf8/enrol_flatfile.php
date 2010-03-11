<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['description'] = 'Această metodă va verifica în mod repetat existenţa şi va procesa un fişier text cu formatare specială, situat în locaţia specificată de dumneavoastră.
Fişierul este de tip \"comma separated file\" şi se presupune că are patru sau şase câmpuri pe fiecare linie:
<pre>
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
unde:
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber in the user table NB not id
* idnumber(course) = idnumber in the course table NB not id
* starttime = start time (in seconds since epoch) - optional
* endtime = end time (in seconds since epoch) - optional
</pre>
Iată un exemplu de un astfel de fişier:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Flat file';
$string['filelockedmail'] = 'Fişierul text ($a) pe care îl folosiţi pentru înscrierile pe bază de fişier nu poate fi şters de procesul cron. Acest lucru se întâmplă cel mai adesea din cauză că nu există permisiunea necesară. Vă rugăm setaţi permisiunile necesare astfel încât Moodle să poată şterge fişierul respectiv, în caz contrar va fi procesat în buclă.';
$string['filelockedmailsubject'] = 'Eroare importantă: fişier înscriere';
$string['location'] = 'Locaţie fişier';
$string['mailadmin'] = 'Notifică admin prin email';
$string['mailusers'] = 'Notifică utilizatori prin email';

?>

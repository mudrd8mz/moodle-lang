<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.7 beta + (2006101003)


$string['description'] = 'Ar šo metodi jūsu norādītajā atrašanās vietā tiks vairākkārt pārbaudīts un apstrādāts īpaši formatēts teksta fails.
Šis fails ir ar komatiem atdalītu vērtību fails, pieņemot, ka katrā rindiņā ir četri vai seši lauki:
<pre>
* operācija, loma, ID numurs (lietotājs), ID numurs (kurss) [, sākuma laiks, beigu laiks]
Kur:
* operācija             = add | del
* loma                  = student | teacher | teacheredit
* ID numurs (lietotājs) = lietotāju tabulas lauka idnumber vērtība, bet ne ID
* ID numurs (kurss)     = kursu tabulas lauka idnumber vērtība, bet ne ID
* sākuma laiks          = sākuma laiks (sekundēs kopš epohas)&nbsp;— nav obligāti
* beigu laiks           = beigu laiks (sekundēs kopš epohas)&nbsp;— nav obligāti
</pre>
Varētu izskatīties šādi:
<pre>
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Izplātais fails';
$string['filelockedmail'] = 'Cron process nevar izdzēst teksta failu, ko izmantojat reģistrācijai, kuras pamatā ir faili ($a). Tas parasti nozīmē, ka tam iestatītas nepareizas atļaujas. Lūdzu, izlabojiet atļaujas, lai sistēma Moodle varētu izdzēst šo failu, citādi iespējama atkārtota tā apstrāde.';
$string['filelockedmailsubject'] = 'Svarīga kļūda: reģistrācijas fails';
$string['location'] = 'Faila atrašanās vieta';
$string['mailadmin'] = 'Paziņot administratoram pa e-pastu';
$string['mailusers'] = 'Paziņot lietotājiem pa e-pastu';

?>

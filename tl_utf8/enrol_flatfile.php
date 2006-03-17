<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.6 development (2006022400)


$string['description'] = 'Ang paraang ito ay paulit-ulit na tsetsekin at ipoproseso ang isang text file na may ispesyal na format, sa lokasyon na itinakda mo.  
Ang file na ito ay file na pinaghihiwalay ng kuwit ang laman, na inaakalang may apat o anim na field sa bawat linya:

<pre>
* operasyon, papel, numero-na-id(user), numero-na-id(course) [, simulang-oras, katapusang-oras]
kung saan:
* operasyon = add | del
* papel = student | teacher | teacheredit
* numero-na-id(user) = numero-na-id sa teybol ng user NB hindi id
* idnumber(course) = idnumber in the course table NB not id
* simulang-oras = simulang oras (sa segundo simula epoch) - opsiyonal
* katapusang-oras = katapusang oras (sa segundo simula epoch) - opsiyonal
</pre>

Ganito ang maaaring maging itsura ng file:

<pre>
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['filelockedmail'] = 'Ang text file na ginagamit mo para sa enrolment na nakabatay sa file ($a) ay hindi mabura ng prosesong cron.  Kadalasan ay nangangahulugan ito na ang mga permiso nito ay malî.  Pakiayos po ang mga permiso upang mabura ng Moodle ang file, kundi ay maaari itong maproseso nang paulit-ulit.';
$string['filelockedmailsubject'] = 'Mahalagang error: File sa pag-eenrol';
$string['location'] = 'Lokasyon ng file';
$string['mailadmin'] = 'Patalastasan ang admin sa email';
$string['mailusers'] = 'Patalastasan ang mga user sa email';

?>

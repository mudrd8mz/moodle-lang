<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.7 dev (2006050501)


$string['description'] = 'Ang paraang ito ay paulit-ulit na tsetsekin at ipoproseso ang isang tekstong sako na may espesyal na anyo, sa lokasyon na itinakda mo.  
Ang sako na ito ay sako na pinaghihiwalay ng kuwit ang laman, na inaakalang may apat o anim na pitak sa bawat linya:

<pre>
* operasyon, papel, numero-na-id(tagagamit), numero-na-id(kurso) [, simulang-oras, katapusang-oras]
kung saan:
* operasyon = add | del
* papel = student | teacher | teacheredit
* numero-na-id(tagagamit) = numero-na-id sa teybol ng tagagamit na NB hindi ang id
* idnumber(course) = bilang na id sa teybol ng kurso na NB hindi ang id
* simulang-oras = simulang oras (sa segundo simula epoch) - opsiyonal
* katapusang-oras = katapusang oras (sa segundo simula epoch) - opsiyonal
</pre>

Ganito ang maaaring maging itsura ng sako:

<pre>
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Flat na sako';
$string['filelockedmail'] = 'Ang tekstong sako na ginagamit mo para sa pag-eenrol na nakabatay sa sako ($a) ay hindi mabura ng prosesong cron.  Kadalasan ay nangangahulugan ito na ang mga permiso nito ay malî.  Pakiayos po ang mga permiso upang mabura ng Moodle ang sako, kundi ay maaari itong maproseso nang paulit-ulit.';
$string['filelockedmailsubject'] = 'Mahalagang error: Sako sa pag-eenrol';
$string['location'] = 'Lokasyon ng sako';
$string['mailadmin'] = 'Patalastasan ang admin sa email';
$string['mailusers'] = 'Patalastasan ang mga tagagamit sa email';

?>

<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9 + (Build: 20080304) (2007101509)


$string['description'] = 'Denne metode vil kontinuerligt kontrollere og behandle en specielt formateret tekstfil som du specificere hvor ligger. Denne fil kan ligne noget i stil med dette:
<pre>
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
where:
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber in the user table NB not id
* idnumber(course) = idnumber in the course table NB not id
* starttime = start time (in seconds since epoch) - optional
* endtime = end time (in seconds since epoch) - optional
</pre>
It could look something like this:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Flad fil';
$string['filelockedmail'] = 'Tekstfilen der bruges til filbaseret tilmelding ($a) kan ikke slettes af cron processen. Dette betyder som oftest at rettighederne på den er forkert. Ret venligst rettighederne så moodle kan slette den, i modsat fald kan den tilmeldingerne blive behandlet flere gange.';
$string['filelockedmailsubject'] = 'Alvorlig fejl: Tilmeldingsfil.';
$string['location'] = 'Fil location';
$string['mailadmin'] = 'Orienter admin via e-mail';
$string['mailusers'] = 'Orienter brugere via e-mail';

?>

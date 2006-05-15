<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.7 dev (2006050300)


$string['description'] = 'Tato metoda bude opakovaně kontrolovat a zpracovávat speciálně formátovaný textový soubor, jehož umístění zde určíte.
Řádky v souboru obsahují čtyři až šest polí oddělených čárkou podle následujícího formátu:
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

Soubor může mít strukturu podobnou téhle:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Ze souboru';
$string['filelockedmail'] = 'Textovy soubor, ktery pouzivate pro zapisy ($a), nemuze byt odstranen procesem cron. Vetsinou je to zpusobeno spatne nastavenymi pravy. Prosim, opravte prava tak, aby mohl Moodle tento soubor odstranit. Jinak muze dochazet k jeho opakovanemu zpracovani.';
$string['filelockedmailsubject'] = 'Dulezita chyba: Soubor se zapisy';
$string['location'] = 'Umítění souboru';
$string['mailadmin'] = 'Upozornit správce emailem';
$string['mailusers'] = 'Upozornit uživatele emailem';

?>

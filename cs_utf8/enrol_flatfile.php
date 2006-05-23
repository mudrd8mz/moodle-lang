<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.6 Beta 5 (2006050502)


$string['description'] = 'Tato metoda bude opakovaně kontrolovat a zpracovávat speciálně formátovaný textový soubor, jehož umístění zde určíte.
Řádky v souboru obsahují čtyři až šest polí oddělených čárkou v následujícím formátu:
<pre>
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
</pre>
kde:
<pre>
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber v tabulce uživatelů, NIKOLIV id
* idnumber(course) = idnumber v tabulce kurzů, NIKOLIV id
* starttime = čas zpřístupnění kurzu (unixové časové razítko) - volitelné
* endtime = čas vyškrtnutí z kurzu (unixové časové razítko) - volitelné
</pre>

Příklad souboru:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Textový soubor';
$string['filelockedmail'] = 'Procesu cron se nepodarilo odstranit textovy soubor, ktery pouzivate pro zapisy ($a). Vetsinou je to zpusobeno spatne nastavenymi pravy. Prosim, opravte prava tak, aby mohl Moodle tento soubor odstranit. Jinak muze dochazet k jeho opakovanemu zpracovani.';
$string['filelockedmailsubject'] = 'Zavazna chyba: Soubor se zapisy';
$string['location'] = 'Cesta k souboru';
$string['mailadmin'] = 'Upozornit správce e-mailem';
$string['mailusers'] = 'Upozornit uživatele e-mailem';

?>

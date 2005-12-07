<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.6 development (2005060201)


$string['description'] = 'Táto metóda bude opakovane kontrolovať a spracovávať špeciálne formátovaný textový súbor, ktorého umiestnenie tu určíte. Súbor môže mať štruktúru podobnú tejto:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000 </pre>';
$string['enrolname'] = 'Zo súboru';
$string['filelockedmail'] = 'Textový súbor, ktorý používate pre zápisy do kurzov($a), nemôže byť odstránený procesom cron. Väčšinou je to spôsobené zle nastavenými právami. Prosím, opravte práva tak, aby mohol Moodle tento súbor odstrániť. Inak môže dochádzať k jeho opakovanému spracovaniu.';
$string['filelockedmailsubject'] = 'Dôležitá chyba: Súbor so zápismi';
$string['location'] = 'Umiestnenie súboru';
$string['mailadmin'] = 'Upozorniť administrátora emailom';
$string['mailusers'] = 'Upozorniť používateľov emailom';

?>

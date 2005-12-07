<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.4 (2004083100)


$string['description'] = 'Ez a módszer ismételten ellenőrzi és feldolgozza az Ön által megadott helyen lévő, speciális formájú szöveges állományt. Az állomány például így nézhet ki: 
<pre>
hozzáad, tanuló, 5, CF101
hozzáad, tanár, 6, CF101
hozzáad, tanárszerkeszt, 7, CF101
töröl, tanuló, 8, CF101
töröl, tanuló, 17, CF101
hozzáad, tanuló, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Egyszerű állomány';
$string['filelockedmail'] = 'AZ Ön által beíratkozásra használt szöveges állományt ($a) a cron folyamattal nem lehet törölni. Ez olyankor fordul elő, ha nem megfelelő engedélyek vannak hozzárendelve. Állítsa be az engedélyeket úgy, hogy a Moodle törölni tudja az állományt, ellenkező esetben feldolgozása megismétlődhet.';
$string['filelockedmailsubject'] = 'Lényeges hiba: beíratkozási állomány';
$string['location'] = 'Állomány helye';
$string['mailadmin'] = 'Adminisztrátor értesítése e-mailben';
$string['mailusers'] = 'Felhasználók értesítése e-mailben';

?>

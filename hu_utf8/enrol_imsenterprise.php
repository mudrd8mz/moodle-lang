<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.7 beta + (2006101003)


$string['aftersaving...'] = 'A beállítások mentése után lehetőség van';
$string['allowunenrol'] =  'Az IMS adataival tanulók/tanárok kiiratkoztatása';
$string['basicsettings'] = 'Alapbeállítások';
$string['coursesettings'] = 'Kurzusadatokkal kapcsolatos lehetőségek';
$string['createnewcategories'] = 'Új (rejtett) kurzuskategóriák létrehozása, ha a Moodle-ban nem találhatók';
$string['createnewcourses'] = 'Új (rejtett) kurzusok létrehozása, ha a Moodle-ban nem találhatók';
$string['createnewusers'] = 'Új felhasználói fiókok létrehozása a Moodle-ban még nem regisztrált felhasználók számára';
$string['cronfrequency'] = 'Feldolgozás gyakorisága';
$string['deleteusers'] = 'Felhasználók törlése, ha az IMS adataiban elő van írva';
$string['description'] = 'Ez a módszer ismételten ellenőrzi és feldolgozza az Ön által megadott helyen lévő, speciális formájú szöveges állományt. Az állománynak az <a href=\'../help.php?module=enrol/imsenterprise&amp;file=formatoverview.html\'>IMS Enterprise specifikációit</a> kell követnie, melyben szerepelnek a személyre, csoportra és tagságra vonatkozó XML-elemek.';
$string['doitnow'] = 'az IMS Enterprise importálás azonnali végrehajtására';
$string['enrolname'] = 'IMS Enterprise állomány';
$string['filelockedmail'] = 'Az IMS-állomány alapú beiratkozáshoz ($a) használt szöveges állományt a cron nem tudja törölni. Ez rendszerint azt jelenti, hogy az engedélyek nem megfelelőek. Javítsa ki az engedélyeket, hogy a Moodle ki tudja törölni a fájlt, ellenkező esetben megismétlődhet annak feldolgozása.';
$string['filelockedmailsubject'] = 'Lényeges hiba: beiratkozási állomány';
$string['fixcasepersonalnames'] = 'A személyneveknek a cím írásmódja szerinti átalakítása';
$string['fixcaseusernames'] = 'Felhasználónevek kisbetűsre módosítása';
$string['imsrolesdescription'] = 'Az IMS Enterprise specifikációja 8 különféle szerepet foglal magában. Válassza ki, miként szeretné ezeket a Moodle-hoz hozzárendelni, és azt is, ha valamelyiket szeretné figyelmen kívül hagyni.';
$string['location'] = 'Állomány helye';
$string['logtolocation'] = 'Naplófájl kimeneti helye (üres, ha nincs naplózás)';
$string['mailadmins'] = 'Rendszergazdák értesítése e-mailben';
$string['mailusers'] = 'Felhasználók értesítése e-mailben';
$string['miscsettings'] = 'Egyéb';
$string['processphoto'] = 'Felhasználó fényképadatainak hozzáadása a profilhoz';
$string['processphotowarning'] = 'Figyelmeztetés: a képfeldolgozás valószínűleg számottevően megterheli a szervert. Ha sok tanuló adatait kell feldolgozni, inkább kapcsolja ki ezt a lehetőséget.';
$string['restricttarget'] = 'Csak az alábbi cél megadása esetén dolgozza fel az adatokat';
$string['sourcedidfallback'] = 'Az adott személy azonosítójaként használja a &quot;sourceid&quot;-t, ha a &quot;userid&quot; mező nem található';
$string['truncatecoursecodes'] = 'Kurzuskódok rövidítése ilyen hosszúságúra';
$string['usecapitafix'] = 'Jelölje be a négyzetet, ha &quot;Capita&quot;-t használ (ezek XML-formája kissé hibás)';
$string['usersettings'] = 'Felhasználói adatok lehetőségei';
$string['zeroisnotruncation'] = 'A 0 azt jelenti, hogy nincs rövidítés';

?>

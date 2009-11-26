<?PHP // $Id$ 
      // simpletest.php - created with Moodle 1.9.2+ (Build: 20080910) (2007101522)

$string['addconfigprefix'] = 'Előtag hozzáadása a konfigurációs fájlhoz';
$string['confignonwritable'] = 'A webszerver nem tud a config.php fájlba írni. Módosítsa az engedélyt vagy szerkessze megfelelő felhasználói fiókból, és a lezáró php-címke elé írja be ezt a sort: <br />
$CFG->unittestprefix = \'tst_\' // A tst_ helyére írjon be egy tetszése szerinti, a $CFG->prefix-től eltérő előtagot.';
$string['deletingnoninsertedrecord'] = 'Olyan rekordot próbál törölni, amelyet nem ezek az egységfeladatok szúrtak be ($a->id azonosító a(z) $a->table táblában).';
$string['deletingnoninsertedrecords'] = 'Olyan rekordokat próbál törölni, amelyeket nem ezek az egységfeladatok szúrtak be (a(z) $a->table táblából).';
$string['droptesttables'] = 'Feladattáblák kihagyása';
$string['installtesttables'] = 'Feladattáblák telepítése';
$string['prefix'] = 'Egységfeladat tábláinak előtagja';
$string['prefixnotset'] = 'Nincs beállítva az egységfeladat adatbázistáblájának előtagja. A config.php-hez való hozzáadáshoz töltse ki és küldje be ezt az űrlapot.';
$string['reinstalltesttables'] = 'Feladattáblák újratelepítése';
$string['tablesnotsetup'] = 'Az egységfeladat táblái még nem készültek el. Elkészíti őket most?';
$string['testdboperations'] = 'Feladat-adatbázis műveletei';
$string['testtablescsvfileunwritable'] = 'A feladattáblák CSV-fájl nem írható ($a->filename).';
$string['testtablesneedupgrade'] = 'A feladat-adatbázis tábláit frissíteni kell. Folytatja a frissítést?';
$string['testtablesok'] = 'A feladat-adatbázis tábláinak telepítése sikerült.';
$string['unittestprefixsetting'] = 'Egységfeladatok előtagja: <strong>$a->unittestprefix</strong> (A config.php szerkesztésével módosíthatja).';
$string['updatingnoninsertedrecord'] = 'Olyan rekordot próbál törölni, amelyet nem ezek az egységfeladatok szúrtak be ($a->id azonosító a(z) $a->table táblában).';

$string['rundbtests'] = 'Az adatbázistesztek végrehajtására is kerüljön sor.';

$string['all'] = 'Mind';
$string['exception'] = 'Kivétel';
$string['fail'] = 'Hiba';
$string['ignorefile'] = 'Az állományban lévő feladatok kihagyása';
$string['ignorethisfile'] = 'A feladatok újbóli végrehajtása ezen feladatállomány kihagyásával.';
$string['moodleunittests'] = 'Moodle-egység feladatai: $a';
$string['notice'] = 'Tájékoztatás';
$string['onlytest'] = 'Feladatok végrehajtása csakis';
$string['pass'] = 'Sikerült';
$string['pathdoesnotexist'] = 'A(z) \'$a\' útvonal nem létezik.';
$string['retest'] = 'A feladatok újbóli végrehajtása';
$string['retestonlythisfile'] = 'Csak ezen feladatállomány újbóli végrehajtása';
$string['runall'] = 'Minden feladatállomány feladatainak végrehajtása';
$string['runat'] = 'Végrehajtás ekkor: $a.';
$string['runonlyfile'] = 'Csak ezen feladatállományban lévő feladatok végrehajtása';
$string['runonlyfolder'] = 'Csak ezen mappában lévő feladatok végrehajtása';
$string['runtests'] = 'Feladatok végrehajtása';
$string['rununittests'] = 'Egységfeladatok végrehajtása';
$string['showpasses'] = 'Sikeres és sikertelen végrehajtások megjelenítése';
$string['showsearch'] = 'Feladatállományok keresésének megjelenítése';
$string['stacktrace'] = 'Veremfigyelés:';
$string['summary'] = '{$a->run}/{$a->total} feladateset kész: {$a->passes} sikerült, {$a->fails} nem sikerült és {$a->exceptions} kivétel.';
$string['thorough'] = 'Alapos teszt végrehajtása (lassú lehet).';
$string['uncaughtexception'] = 'Kihagyott kivétel [{$a->getMessage()}] a [{$a->getFile()}:{$a->getLine()}] sorban, FELADATOK ABBAHAGYÁSA.';
$string['unittests'] = 'Egységfeladatok';
$string['version'] =  'A <a href=\"http://sourceforge.net/projects/simpletest/\">SimpleTest</a>  $a változatával.';

?>

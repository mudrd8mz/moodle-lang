<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.8 + (2007021503)


$string['aftersaving...'] = 'Po uložení nastavení můžete';
$string['allowunenrol'] = 'Povolit souboru IMS <strong>vyškrtávat</strong> studenty/učitele z kurzů';
$string['basicsettings'] = 'Základní nastavení';
$string['coursesettings'] = 'Nastavení dat kurzu';
$string['createnewcategories'] = 'Vytvořit nové (skryté) kategorie kurzů, pokud nejsou v Moodlu nalezeny';
$string['createnewcourses'] = 'Vytvořit nové (skryté) kurzy, pokud nejsou v Moodlu založeny';
$string['createnewusers'] = 'Vytvořit nové účty pro uživatele doposud neregistrované v Moodlu';
$string['cronfrequency'] = 'Periodicita zpracování souboru';
$string['deleteusers'] = 'Odstranit uživatelské účty označené ke smazání v souboru IMS';
$string['description'] = 'Tato metoda bude opakovaně kontrolovat a zpracovávat speciálně formátovaný textový soubor, jehož umístění zde určíte. Soubor musí odpovídat specifikaci <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>IMS Enterprise</a> a obsahovat XML prvky popisující osobu a její příslušnost ke kurzu a ke skupině.';
$string['doitnow'] = 'okamžitě provést import ze souboru IMS Enterprise';
$string['enrolname'] = 'Soubor formátu IMS Enterprise';
$string['filelockedmail'] = 'Procesu cron se nepodarilo odstranit textovy soubor formatu IMS Enterprise, ktery pouzivate pro zapisy ($a). Vetsinou je to zpusobeno spatne nastavenymi pravy. Prosim, opravte prava tak, aby mohl Moodle tento soubor odstranit. Jinak muze dochazet k jeho opakovanemu zpracovani.';
$string['filelockedmailsubject'] = 'Zavazna chyba: Soubor se zapisy';
$string['fixcasepersonalnames'] = 'Převést počáteční písmena jmen uživatelů na Velká Písmena';
$string['fixcaseusernames'] = 'Převést zápis uživatelských jmen na malá písmena';
$string['imsrolesdescription'] = 'IMS specifikace má 8 různých typů rolí. Prosím vyberte, jak je chcete přidělit v Moodle, včetně případného ignorování některé z nich.';
$string['location'] = 'Cesta k souboru';
$string['logtolocation'] = 'Cesta k log souboru (nevyplňujte, nechcete-li vytvářet log)';
$string['mailadmins'] = 'Informuj správce e-mailem';
$string['mailusers'] = 'Informuj uživatele e-mailem';
$string['miscsettings'] = 'Různé';
$string['processphoto'] = 'Přidat do uživatelského profilu fotografii';
$string['processphotowarning'] = 'Upozornění: zpracování obrazových souborů může výrazně zatížit server. Doporučujeme nepoužívat tuto volbu, pokud hodláte zpracovávat velký počet uživatelů.';
$string['restricttarget'] = 'Zpracovat soubor pouze v případě, že je v něm uveden následující \'target\'';
$string['sourcedidfallback'] = 'Není-li k dispozici pole \'userid\', použít jako id uživatele pole \'sourcedid\'';
$string['truncatecoursecodes'] = 'Zkrátit kódy kurzů na následující počet znaků';
$string['usecapitafix'] = 'Zaškrtněte pro soubory vytvořené systémem společnosti \'Capita\' (jejich formát XML obsahuje chyby)';
$string['usersettings'] = 'Nastavení dat uživatelů';
$string['zeroisnotruncation'] = '0 (nula) vyřazuje zkracování';

?>

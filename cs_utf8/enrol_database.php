<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.8 + (2007021503)


$string['autocreate'] = 'Pokud jsou v externí databázi studenti zapsáni do kurzů, které ještě nejsou v Moodlu vytvořeny, lze takové kurzy založit v Moodlu automaticky.';
$string['autocreation_settings'] = 'Nastavení automatického vytvoření kurzů';
$string['category'] = 'Kategorie pro automaticky vytvořené kurzy';
$string['course_fullname'] = 'Jméno pole, v němž je uložen celý název kurzu.';
$string['course_id'] = 'Jméno pole, v němž je uloženo ID kurzu. Hodnoty v tomto poli jsou porovnávány s údaji v poli \'enrol_db_l_coursefield\' v lokální tabulce kurzů.';
$string['course_shortname'] = 'Jméno pole, v němž je uložen krátký název kurzu.';
$string['course_table'] = 'Jméno tabulky, v níž jsou uloženy údaje o kurzu (krátký název, celý název, ID ad.).';
$string['dbhost'] = 'Název nebo IP adresa serveru';
$string['dbname'] = 'Název databáze';
$string['dbpass'] = 'Přístupové heslo';
$string['dbtable'] = 'Tabulka databáze';
$string['dbtype'] = 'Typ databáze';
$string['dbuser'] = 'Uživatelské jméno pro přístup';
$string['defaultcourseroleid'] = 'Role, která bude přidělena implicitně, pokud není specifikováno jinak.';
$string['description'] = 'Pro řízení zápisů do kurzů můžete použít externí databázi (téměř jakéhokoliv druhu). Předpokládá se, že externí databáze obsahuje pole s ID kurzu a pole s ID uživatele. Tato jsou porovnána s poli, která si vyberete v lokálních tabulkách kurzů a uživatelů.';
$string['enrol_database_autocreation_settings'] = 'Automatické vytváření nových kurzů';
$string['enrolname'] = 'Externí databáze';
$string['general_options'] = 'Obecná nastavení';
$string['host'] = 'Síťové jméno externího databázového serveru';
$string['local_fields_mapping'] = 'Pole lokální databáze';
$string['localcoursefield'] = 'Název pole v tabulce kurzů (course), které bude použito k provázání s externí databází (např. idnumber).';
$string['localrolefield'] = 'Název pole v tabulce rolí (roles), které bude použito k provázání s externí databází (např. shortname).';
$string['localuserfield'] = 'Název pole v tabulce uživatelů (user), které bude použito k provázání s externí  databází (např. idnumber).';
$string['name'] = 'Jméno databáze.';
$string['pass'] = 'Heslo pro přístup k serveru.';
$string['remote_fields_mapping'] = 'Pole zápisu do kurzů v (externí) databázi.';
$string['remotecoursefield'] = 'Název pole v externí databázi, které bude použito k provázání s tabulkou kurzů (course).';
$string['remoterolefield'] = 'Název pole v externí databázi, které bude použito k provázání s tabulkou rolí (roles).';
$string['remoteuserfield'] = 'Název pole v externí databázi, které bude použito k provázání s tabulkou uživatelů (user).';
$string['server_settings'] = 'Nastavení externího databázového serveru';
$string['student_coursefield'] = 'Jméno pole v tabulce se záznamy o zápisech studentů do kurzů, v němž je uloženo ID kurzu.';
$string['student_l_userfield'] = 'Jméno pole v lokální tabulce uživatelů, s nímž budou porovnávány záznamy o zápisech studentů do kurzů uložené v externí tabulce.';
$string['student_r_userfield'] = 'Jméno pole v externí tabulce zápisů studentů do kurzů, v němž je uloženo ID uživatele.';
$string['student_table'] = 'Jméno tabulky, v níž jsou uloženy záznamy o zápisu studentů do kurzů.';
$string['teacher_coursefield'] = 'Jméno pole v tabulce přiřazení učitelů ke kurzům, v němž je uloženo ID kurzu.';
$string['teacher_l_userfield'] = 'Jméno pole v lokální tabulce uživatelů, s nímž budou porovnávány záznamy o přiřazení učitelů ke kurzům uložené v externí tabulce.';
$string['teacher_r_userfield'] = 'Jméno pole v externí tabulce přiřazení učitelů ke kurzům, v němž je uloženo ID uživatele.';
$string['teacher_table'] = 'Jméno tabulky, v níž jsou uloženy záznamy o přiřazení učitelů ke kurzům.';
$string['template'] = 'Volitelné: automaticky vytvořené kurzy mohou převzít nastavení z předem připraveného kurzu-šablony. Zadejte zkrácený název kurzu, který chcete použít jako šablonu.';
$string['type'] = 'Typ databázového serveru.';
$string['user'] = 'Uživatelské jméno pro přístup k serveru.';
$string['local_coursefield'] = 'Jméno pole v tabulce kurzů ([prefix]_course) používaného pro porovnávání s externí databází (např. \'idnumber\').'; // ORPHANED

?>

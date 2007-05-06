<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.8 + (2007021503)


$string['description'] = '<p>K řízení zápisů do kurzů můžete použív rovněž váš server LDAP. Předpokládá se, že váš strom (tree) LDAP obsahuje skupiny (groups) odpovídající vašim kurzům a že každá z těchto skupin má položky členství odpovídající studentům.</p>

<p>Každý kurz by tedy měl mít nadefinován jako LDAP skupina a každá z těchto skupin bude mít několik polí členství (<em>member</em> nebo <em>memberUid</em>), která obsahují unikátní identifikaci uživatele.</p>

<p>Chcete-li tento režim zápisů do kurzů použít, <strong>musí</strong> mít vaši uživatelé ve svých profilech vyplněno platné pole idnumber. Skupiny LDAP, které odpovídají kurzům, uvedou toto idnumber v polích svých členů. Tento způsob by měl bez problémů fungovat, pokud už používáte ověřování uživatelů pomocí LDAP.</p>

<p>Zápisy v kurzech (tzv. enrolments) budou aktualizovány pokaždé, když se uživatel přihlásí. Pro  synchronizaci můžete rovněž spouštět skript <em>enrol/ldap/enrol_ldap_sync.php</em> (další informace ve zdrojovém kódu uvedeného skriptu).</p>

<p>Tento doplněk může být rovněž použit pro automatické vytváření nových kurzů, jakmile se odpovídající skupiny objeví ve vašem serveru LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurzy mohou být vytvářeny automaticky, pokud se objeví zápis do kurzu, který v Moodlu ještě neexistuje.';
$string['enrol_ldap_autocreation_settings'] = 'Nastavení automatického vytváření kurzů';
$string['enrol_ldap_bind_dn'] = 'Chcete-li v vyhledání uživatelů použít bind-user, uveďte zde plný název. Něco jako  \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Heslo pro bind-user.';
$string['enrol_ldap_category'] = 'Kategorie automaticky vytvářených kurzů.';
$string['enrol_ldap_contexts'] = 'Kontexty LDAP';
$string['enrol_ldap_course_fullname'] = 'Volitelné: LDAP pole, odkud se převezme celý název.';
$string['enrol_ldap_course_idnumber'] = 'Na který unikátní identifikátor v LDAP mapovat id kurzu. Většinou <em>cn</em> nebo <em>uid</em>. Doporučuje se tuto hodnotu uzamknout, pokud používáte automatické vytváření kurzů.';
$string['enrol_ldap_course_settings'] = 'Nastavení zápisů do kurzů';
$string['enrol_ldap_course_shortname'] = 'Volitelné: LDAP pole, odkud se převezme krátký název.';
$string['enrol_ldap_course_summary'] = 'Volitelné: LDAP pole, odkud se převezme souhrn kurzu.';
$string['enrol_ldap_editlock'] = 'Uzamknout hodnotu';
$string['enrol_ldap_general_options'] = 'Obecná nastavení';
$string['enrol_ldap_host_url'] = 'Hostitel LDAP ve formě URL - např. ldap://ldap.naseskola.cz/\' nebo ldaps://ldap.naseskola.cz/\'';
$string['enrol_ldap_memberattribute'] = 'Atribut členství (member) v LDAP';
$string['enrol_ldap_objectclass'] = 'objectClass použitá při vyhledávání kurzů. Většinou \'posixGroup\'.';
$string['enrol_ldap_roles'] = 'Mapování rolí';
$string['enrol_ldap_search_sub'] = 'Příslušnost ke skupině hledat v subkontextech';
$string['enrol_ldap_server_settings'] = 'Nastavení serveru LDAP';
$string['enrol_ldap_student_contexts'] = 'Seznam kontextů, ve kterých jsou umístěny skupiny se zápisy studentů v kurzech. Kontexty oddělujte středníkem \';\'. Např.: \'ou=kurzy,o=org; ou=dalsi,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Atribut skupiny, pokud je uživatel jejím členem (tj. student je zapsán do příslušného kurzu). Většinou \'member\' nebo \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Nastavení zápisu do kurzů';
$string['enrol_ldap_teacher_contexts'] = 'Seznam kontextů, ve kterých jsou umístěny skupiny se zápisy vyučujících v kurzech. Kontexty oddělujte středníkem \';\'. Např.: \'ou=kurzy,o=org; ou=dalsi,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Atribut skupiny, pokud je uživatel jejím členem (tj. uživatel je vyučujícím v příslušném kurzu). Většinou \'member\' nebo \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Nastavení vyučujících v kurzech';
$string['enrol_ldap_template'] = 'Volitelné: automaticky vytvářené kurzy mohou převzít nastavení z nějaké šablony (vzorového kurzu).';
$string['enrol_ldap_updatelocal'] = 'Aktualizovat lokální data';
$string['enrol_ldap_version'] = 'Verze protokolu LDAP, který používá váš server';
$string['enrolname'] = 'LDAP';

?>

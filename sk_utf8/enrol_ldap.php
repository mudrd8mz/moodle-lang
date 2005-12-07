<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.6 development (2005060201)


$string['description'] = '<p>Na kontrolu Vašich zápisov, môžete použiť LDAP server. Predpokladom je, že Váš LDAP strom obsahuje skupiny, ktoré mapujú kurzy a každá z týchto skupín/kurzov obsahuje záznamy o používateľoch, ktoré mapujú študentov.</p>
<p>Predpokladá sa, že kurzy sú definované ako skupiny v LDAP a každá skupina má viacero používateľských polí (<em>člen</em> alebo <em>Uidčlena</em>), ktoré zabezpečujú jednoznačnú identifikáciu používateľa.</p>
<p>Aby ste mohli použiť LDAP zapisovanie, Vaši používatelia  <strong>musia</strong> mať platné pole idnumber. LDAP skupiny musia mať idnumber v poliach pre používateľa, aby sa mohli zapisovať do kurzov. Toto bude pravdepodobne fungovať bez problémov, ak už používate LDAP Autentifikáciu.</p>
<p>Zápisy sa budú aktualizovať, keď sa používateľ prihlási. Na synchronizáciu uchovávania zápisov, môžete použiť aj skript. Pozrite sa do  <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Tento plugin môže byť nastavený na automatické vytváranie nových kurzov, ak sa objavia nové skupiny v LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurzy môžu byť vytvárané automaticky, ak existujú zápisy do kurzov, ktoré ešte neexistujú v Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Nastavenia automatického vytvárania kurzov';
$string['enrol_ldap_bind_dn'] = 'Ak chcete použiť spoluužívateľa na vyhľadávanie používateľov, definujte to tu. Niečo ako: \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Heslo pre spoluužívateľa.';
$string['enrol_ldap_category'] = 'Kategória pre automaticky vytvorené kurzy.';
$string['enrol_ldap_course_fullname'] = 'Nepovinné: LDAP pole, z ktorého sa má vybrať celé meno používateľa.';
$string['enrol_ldap_course_idnumber'] = 'Plán jednoznačného identifikátora v LDAP, obyčajne  <em>cn</em> alebo <em>uid</em>. Odporúča sa \"uzamknúť\" túto hodnotu, ak používate automatické vytváranie kurzov.';
$string['enrol_ldap_course_settings'] = 'Nastavenia zápisov do kurzov';
$string['enrol_ldap_course_shortname'] = 'Nepovinné: LDAP pole, z ktorého sa má vybrať skrátené menou používateľa.';
$string['enrol_ldap_course_summary'] = 'Nepovinné: LDAP pole, z ktorého sa má vybrať súhrn.';
$string['enrol_ldap_editlock'] = 'Uzamknúť hodnotu';
$string['enrol_ldap_general_options'] = 'Všeobecné nastavenia';
$string['enrol_ldap_host_url'] = 'Špecifikujte hosťovský LDAP v URL forme, napr:  \'ldap://ldap.myorg.com/\'
alebo \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'Na vyhľadávanie kurzov sa používa objectClass. Obyčajne \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Hľadať účastníkov skupiny  v subkontextoch.';
$string['enrol_ldap_server_settings'] = 'Nastavenia LDAP servera';
$string['enrol_ldap_student_contexts'] = 'Zoznam kontextov, kde sú umiestnené skupiny so zápismi študentov. Rozdielne kontexty oddeľte bodkočiarkou, napr: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Atribút používateľa, keď používatelia patria (sú zapísaní) do skupiny. Obyčajne \'member\'
alebo \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Nastavenia zápisov študentov';
$string['enrol_ldap_teacher_contexts'] = 'Zoznam kontextov, kde sú umiestnené skupiny so zápismi učiteľov. Rozdielne kontexty oddeľte bodkočiarkou, napr: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Atribút používateľa, keď používatelia patria (sú zapísaní) do skupiny. Obyčajne \'member\'
alebo \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Nastavenia zápisov učiteľov';
$string['enrol_ldap_template'] = 'Nepovinné: Pri automaticky vytváraných kurzoch sa môžu ich nastavenia kopírovať zo šablóny kurzu.';
$string['enrol_ldap_updatelocal'] = 'Aktualizovať miestne údaje';
$string['enrol_ldap_version'] = 'Verzia LDAP protokolu, ktorú používa Váš server.';
$string['enrolname'] = 'LDAP (Lightweight Directory Access Protocol)';

?>

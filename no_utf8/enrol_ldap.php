<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.9 (2007101509)


$string['description'] = '<p>Du kan bruke en LDAP server for å kontrollere innmeldingene dine. Det antas at LDAP treet inneholder gruppene for å koble til kursene og at hver av disse gruppene/kursene vil ha medlemsskap-egenskaper til å koble til studentene.</p>
<p>Den antas at kursene er definert som grupper i LDAP, hvor hver gruppe har flere medlemsskap-felter
(<em>medlem</em> eller <em>medlemUid</em>) som inneholder unik identifikasjon til brukeren</p>
<p>For å bruke LDAP innmelding <strong>må</strong> brukerne ha et gyldig idnummerfelt.LDAP gruppene må ha det idnummeret i medlemsfeltet for at brukeren skal meldes inn i kurset. Dette vil vanligvis virke bra hvis du allerede bruker LDAP autentisering.</p>
<p>Innmeldingene vil oppdateres når brukeren logger på. Du kan også kjøre et script for å holde innmeldingene oppdatert. Se i <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Dette tillegget kan også settes til å opprette nye kurs automatisk når nye grupper opprettes i LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurs kan automatisk bli opprettet når det er innrulleringer til kurs som ikke eksisterer i Moodle ennå.';
$string['enrol_ldap_autocreation_settings'] = 'Innstillinger for automatisk kursopprettelse';
$string['enrol_ldap_bind_dn'] = 'Hvis du ønsker å bruke bind-user for å søke etter brukere angi her. Noe som ligner på \'cn=ldapbruker,ou=heleskola,o=1klasse\'';
$string['enrol_ldap_bind_pw'] = 'Passord for bind-user';
$string['enrol_ldap_category'] = 'Kategori for auto-opprettede kurs';
$string['enrol_ldap_contexts'] = 'LDAP kontekst';
$string['enrol_ldap_course_fullname'] = 'Valgfritt: LDAP felt hvor en henter fullt navn fra.';
$string['enrol_ldap_course_idnumber'] = 'Lenke til unik identifisering i LDAP, vanligvis <em>cn</em> eller <em>uid</em>. Det er anbefalt at du låser denne verdien hvis du bruker automatisk kursoppretelse';
$string['enrol_ldap_course_settings'] = 'Innstillinger for kursinnmelding';
$string['enrol_ldap_course_shortname'] = 'Valgfritt: LDAP felt å få kortnavn fra.';
$string['enrol_ldap_course_summary'] = 'Valgfritt: LDAP felt å få \"beskrivelse av deg selv\" fra.';
$string['enrol_ldap_editlock'] = 'Lås verdi';
$string['enrol_ldap_general_options'] = 'Generelle valg';
$string['enrol_ldap_host_url'] = 'Angi LDAP vert på URL måte eks: \'ldap://ldap.minvert.no/\' eller \'ldaps://ldap.minvert.no/\'';
$string['enrol_ldap_memberattribute'] = 'LDAP medlemsinnstilling';
$string['enrol_ldap_objectclass'] = 'objectClass brukt for å søke kurs. Vanligvis \'posixGroup\'';
$string['enrol_ldap_roles'] = 'Rolle lenking';
$string['enrol_ldap_search_sub'] = 'Søk gruppemedlemsskap fra underkategorier';
$string['enrol_ldap_server_settings'] = 'LDAP serverinnstillinger';
$string['enrol_ldap_student_contexts'] = 'Listing av kontekst hvor grupper med studentinnmeldinger finnes. Forskjellige kontekster adskilles med \';\'. For eksempel: \'ou: kurs,o=org; ou=andre,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Medlemsegenskaper, når brukeren hører til (er innmeldt) i en gruppe. Vanligvis \'member\' eller \'memberUid\'';
$string['enrol_ldap_student_settings'] = 'Innstilling for studentinnmelding';
$string['enrol_ldap_teacher_contexts'] = 'Liste med sammenhenger hvor grupper med lærerinnmeldinger finnes. Angir forskjellige sammenhenger med \';\'. For eksempel:  \'ou: kurs,o=org; ou=andre,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Medlemsegenskaper, når brukeren hører til (er innmeldt) i en gruppe. Vanligvis \'member\' eller \'memberUid\'';
$string['enrol_ldap_teacher_settings'] = 'Innstillinger for lærerinnmeldinger';
$string['enrol_ldap_template'] = 'Valgfri: auto-opprettede kurs kan kopiere innstillinge fra et malkurs.';
$string['enrol_ldap_updatelocal'] = 'Oppdater lokale data';
$string['enrol_ldap_version'] = 'Versjon av LDAP-protokoll serveren din bruker.';
$string['enrolname'] = 'LDAP';

?>

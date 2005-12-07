<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.5.2 + (2005060223)


$string['description'] = '<p>Możesz użyć serwera LDAP do kontroli zapisów.
Zakłada się że twoje drzewo LDAP zawiera grupy odwzorowujące kursy że każda z tych grup/kursów będzie miała wpisy członkowskie odwzorowujące studentów. </p>
Zakłada się, że kursy są zdefiniowane jako grupy w LDAPie, a każda z tych grup ma wiele pól czlonkowkich (<em>member</em> lub <em>memberUid</em>)  które zawierają unikatowy identyfikator użytkownika.
Aby wykorzystywać zapisy przez LDAP twoi użytkownicy <strong> muszą </strong> mieć ważne (aktualne, poprawne) pole idnumber. Grupy LDAP muszą mieć ten idnumber w polach członków aby użytkownik został zapisany na kurs.
To będzie działać poprawnie jeśli już korzystasz z autoryzacji LDAP.</p>
Zapisywanie będzie uaktualniane kiedy użytkownik zaloguje się. Można również uruchomić skrypt do synchronizacji zapisów. Zobacz w em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p> Ta wtyczka może również tworzyć automatycznie nowe kursy, kiedy pojawiają się nowe grupy w LDAP. </p>';
$string['enrol_ldap_autocreate'] = 'Kursy mogą być tworzone automatycznie jeżeli pojawia się zgłoszenie na kurs, który dotychczas nie istnieje w Moodle';
$string['enrol_ldap_autocreation_settings'] = 'Ustawinia automatycznego tworzenia kursów';
$string['enrol_ldap_bind_dn'] = 'Jeżeli chcesz używać bind-user do poszukiwania użytkowników, określ ich tutaj. Podobnie do \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Hasło dla bind-user';
$string['enrol_ldap_category'] = 'Kategoria dla automatycznie tworzonych kursów';
$string['enrol_ldap_course_fullname'] = 'Opcjonalne: Pole skąd LDAP ma pobierać pełną nazwę.';
$string['enrol_ldap_course_idnumber'] = 'Mapuj (odwzoruj) unikalny identyfikator w LDAP, przeważnie <em>cn</em> lub <em>uid</em>. Blokuj tę wartość jeżeli używasz automatycznego tworzenia kursów.';
$string['enrol_ldap_course_settings'] = 'Ustawienie zapisywania na kurs';
$string['enrol_ldap_course_shortname'] = 'Opcjonalne:Pole skąd LDAP ma pobierać nazwę skróconą';
$string['enrol_ldap_course_summary'] = 'Opcjonalne:Pole skąd LDAP ma pobierać opis';
$string['enrol_ldap_editlock'] = 'Blokuj wartość';
$string['enrol_ldap_general_options'] = 'Opcje ogólne';
$string['enrol_ldap_host_url'] = 'Określ URL hostu LDAP podobnie do: \'ldap://ldap.myorg.com/\' 
lub \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass używany do szukania kursów. Przeważnie \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Szukaj członków grupy dla podkontekstów.';
$string['enrol_ldap_server_settings'] = 'Ustawienia sewera LDAP';
$string['enrol_ldap_student_contexts'] = 'Wymień kolejno listę kontekstów gdzie grupy z zapisanymi studentami są rozmieszczane . Oddziel różne konteksty \';\'. Np: ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Cecha członek grupy, określa kiedy student należy (jest zapisany) do grupy. Zwykle zawiera pole \'member\' albo \'memberUid\'. ';
$string['enrol_ldap_student_settings'] = 'Ustawienia zapisywania studentów';
$string['enrol_ldap_teacher_contexts'] = 'Wymień kolejno listę kontekstów gdzie grupy z zapisanymi prowadzącymi są rozmieszczane . Oddziel różne konteksty \';\'. Np: ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Cecha członek grupy, określa kiedy prowadzący należy (jest zapisany) do grupy. Zwykle zawiera pole \'member\' albo \'memberUid\'. ';
$string['enrol_ldap_teacher_settings'] = 'Ustawienia zapisywania prowadzących';
$string['enrol_ldap_template'] = 'Opcjonalnie: Auto-tworzenie kursów może kopiować ustawienia z wzorcowego kursu.';
$string['enrol_ldap_updatelocal'] = 'Uaktualnij dane lokalne';
$string['enrol_ldap_version'] = 'Wersja protokołu LDAP zainstalowana na Twoim serwerze.';
$string['enrolname'] = 'LDAP';

?>

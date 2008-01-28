<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9 Beta 4 (2007101506)


$string['autocreate'] = 'Jeśli są użytkownicy zapisani do nieistniejącego kursu, kurs ten może zostać utworzony automatycznie.';
$string['autocreation_settings'] = 'Ustawienia automatycznego tworzenia kursu';
$string['category'] = 'Kategoria zawierająca automatycznie tworzone kursy.';
$string['course_fullname'] = 'Nazwa pola używanego do przechowywania pełnej nazwy kursu.';
$string['course_shortname'] = 'Nazwa pola używanego do przechowywania skróconej nazwy kursu.';
$string['course_table'] = 'Nazwa tabeli, w której znajdują się szczegóły kursu (skrócona nazwa, pełna nazwa, ID, itp.).';
$string['dbhost'] = 'Host serwera bazy danych';
$string['dbname'] = 'Nazwa bazy danych';
$string['dbpass'] = 'Hasło';
$string['dbtable'] = 'Tabela w bazie danych';
$string['dbtype'] = 'Typ serwera baz danych';
$string['dbuser'] = 'Nazwa użytkownika';
$string['defaultcourseroleid'] = 'Domyślna rola, która będzie przypisywana w przypadku nieokreślenia żadnej innej.';
$string['description'] = 'Możesz użyć zewnętrznej bazy danych (niemalże każdego rodzaju) aby kontrolować zapisywanie się na kursy. Założenie jest takie, że Twoja zewnętrzna baza danych zawiera pole z ID kursu i pole z ID użytkownika. Pola te są porównywane z tabelą kursów i użytkowników w Moodle.';
$string['disableunenrol'] = 'Jeśli ustawiono na tak, użytkownicy poprzednio zapisani do kursu przez zewnętrzny plugin bazy danych nie zostaną wypisani przez ten sam plugin bez względu na zawartość bazy.';
$string['enrol_database_autocreation_settings'] = 'Automatyczne tworzenie nowych kursów';
$string['enrolname'] = 'Zewnętrzna baza danych';
$string['general_options'] = 'Opcje ogólne';
$string['host'] = 'Nazwa hosta serwera bazodanowego';
$string['ignorehiddencourse'] = 'Jeśli ustawiono na tak, użytkownicy nie będą zapisywani do kursów, które zostały oznaczone jako niedostępne dla uczniów.';
$string['local_fields_mapping'] = 'Lokalne pola bazy danych Moodle\'a.';
$string['localcoursefield'] = 'Nazwa pola z tabeli kursów Moodle, które używamy w celu weryfikacji zapisów (np. idnumber)';
$string['localrolefield'] = 'Nazwa pola z tabeli ról Moodle, które używamy do dopasowywania wpisów w zewnętrznej bazie (np. shortname).';
$string['localuserfield'] = 'Nazwa pola z tabeli użytkowników Moodle, które używamy w celu weryfikacji zapisów (np. idnumber)';
$string['name'] = 'Nazwa używanej bazy danych.';
$string['pass'] = 'Hasło do serwera.';
$string['remotecoursefield'] = 'Nazwa pola z tabeli w zewnętrznej bazie danych oznaczającego ID kursu.';
$string['remoteuserfield'] = 'Nazwa pola z tabeli w zewnętrznej bazie danych oznaczającego ID użytkownika.';
$string['server_settings'] = 'Ustawienia zewnętrznego serwera bazy danych';
$string['template'] = 'Opcjonalne: automatycznie utworzone kursy mogą skopiować ustawienia z kursu szablonowego. Wpisz tutaj skróconą nazwę kursu szablonowego.';
$string['type'] = 'Typ serwera bazodanowego';
$string['user'] = 'Nazwa użytkownika na serwerze.';

?>

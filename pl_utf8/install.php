<?PHP // $Id$ 
      // install.php - created with Moodle 1.5.2 + (2005060222)


$string['admindirerror'] = 'Podany katalod admin jest nieprawidłowy';
$string['admindirname'] = 'Katalog admin';
$string['caution'] = 'Ostrzeżenie';
$string['chooselanguage'] = 'Wybierz język';
$string['compatibilitysettings'] = 'Sprawdzanie Twoich ustawień PHP';
$string['configfilenotwritten'] = 'Instalator nie mógł automatycznie utworzyć plik config.php zawierający Twoje parametry instalacyjne, prawdopodobnie dlatego że katalog Moodle nie ma prawa zapisu. Musisz ręcznie przekopiować poniższy kod do pliku config.php, który powinien znajdować się w głównym katalogu Moodle.';
$string['configfilewritten'] = 'config.php został pomyślnie stworzony';
$string['configurationcomplete'] = 'Konfiguracja skończona';
$string['database'] = 'Baza danych';
$string['databasecreationsettings'] = 'Teraz skonfiguruj bazę danych gdzie Moodle może przechowywać dane. Ta baza danych będzie stworzona automatycznie przez instalator: Moodle4Windows z parametrami instalacyjnymi określanymi poniżej.<br />
<br /> <br />
<b>Typ:</b>Instalator ustalił  \"mysql\"<br/>
<b>Host:</b> Instalator ustalił \"localhost\"<br />
<b>nazwa:</b>Nazwa Twojej bazy danych, np. Moodle<br/>
<b>Użytkownik:</b> użytkownik Twojej bazy danych<br />
<b>Hasło:</b> Hasło dostępu do bazy danych<br />
<b>Prefiksy tabel:</b> opcjonalny prefiks używany przed wszystkimi nazwami tabeli ';
$string['databasesettings'] = 'Teraz skonfiguruj bazę danych gdzie Moodle może przechowywać dane. Baza danych musi być utworzona, oraz użytkownik i hasło który może się odwoływać do bazy danych.<br/><br/><br/>
<b>Typ:</b> mysql lub postgres 7<br/>
<b>Host:</b> np: localhost lub db.isp.com<br />
<b>nazwa:</b>Nazwa Twojej bazy danych, np. Moodle<br/>
<b>Użytkownik:</b> użytkownik Twojej bazy danych<br />
<b>Hasło:</b> Hasło dostępu do bazy danych<br />
<b>Prefiksy tabel:</b> opcjonalny prefiks używany przed wszystkimi nazwami tabeli';
$string['dataroot'] = 'Katalog z danymi';
$string['datarooterror'] = 'Katalog z danymi który podałeś nie może być znaleziony lub utworzony. Popraw ścieżkę lub utwórz katalog ręcznie.';
$string['dbconnectionerror'] = 'Nie można połączyć się z podaną bazą danych. Sprawdź ustawienia Twojej bazy danych.';
$string['dbhost'] = 'Serwer baz danych';
$string['dbpass'] = 'Hasło';
$string['dbprefix'] = 'prefiksy tabel';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p> Potwierdź lokalizację dla tej instalacji Moodle.</p>

<p><b>Adres w sieci:</b>
Podaj pełny adres w sieci gdzie Moodle będzie dostępny. 
Jeżeli adresów w sieci jest wiele wybierz jeden który będą używali studenci. Nie dodawaj slash</p>

<p><b> Katalog Moodle:</b>
Podaj pełną ścieżkę dostępu do tej intalacji upewnij się że wielkość liter jest poprawna. </p>

<p><b> Katalog z danymi:</b>
Miejsce gdzie Moodle może przechowywać pliki, Ten katalog powinien mieć prawo odczytu i ZAPISU dla serwera www(przeważnie \'nobody\' lub \'apache\'), ale nie ma być dostępny bezpośrednio przez sieć </p>';
$string['dirroot'] = 'Katalog Moodle';
$string['dirrooterror'] = '\"Katalog Moodle\" wydaje się być nieprawidłowy - tam nie można znaleźć instalacji Moodle. Wartości poniżej zostaną usunięte.';
$string['download'] = 'Pobierz';
$string['fail'] = 'zawieść';
$string['fileuploads'] = 'Plik pobrany';
$string['fileuploadserror'] = 'Powinno być włączone';
$string['gdversion'] = 'versja biblioteki GD';
$string['installation'] = 'Instalacja';
$string['magicquotesruntime'] = 'Magic Quotes Runtime';
$string['magicquotesruntimeerror'] = 'Powinno być wyłączone';
$string['memorylimit'] = 'Ograniczenie pamięci';
$string['phpversion'] = 'wersja PHP';
$string['phpversionerror'] = 'Wersja PHP musi być ca najmniej 4.1.0';
$string['phpversionhelp'] = '<p> Moodle wymaga wersji PHP co najmniej 4.1.0. </p> 
<p>Obecnie jest uruchomiona wersja $a</p>
<p> Musisz uaktualnić wersje PHP lub przenieść na host z nowszą wersją PHP!</p>';
$string['safemode'] = 'Bezpieczny tryb';
$string['safemodeerror'] = 'Moodle ma trudności z włączeniem bezpiecznego trybu';
$string['sessionautostarterror'] = 'To powinno być wyłączone';
$string['wwwroot'] = 'Adres w sieci';
$string['wwwrooterror'] = 'Adres w sieci wydaje się być niepoprawny - wydaje się że nie ma tam instalacji Moodle';

?>

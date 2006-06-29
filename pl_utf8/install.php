<?PHP // $Id$ 
      // install.php - created with Moodle 1.6 Beta 5 (2006050500)


$string['admindirerror'] = 'Podany katalod admin jest nieprawidłowy';
$string['admindirname'] = 'Katalog admin';
$string['admindirsettingsub'] = 'Niektóre webhost’y używają / admin jako specjalne URL w celu akcesu do panela kontrolnego a także w innych celach. Niestety powoduje to konflikt ze standardową lokalizacją dla stron administratora w Moodle. Powyższy konflikt można naprawić zmieniając nazwę katalogu administratora podczas instalacji i wstawiając nową nazwę. Na przykład: 
<br /> <br /><b>moodleadmin</b><br /> <br />
Zostaną również poprawione linki administratora w Moodle';
$string['caution'] = 'Ostrzeżenie';
$string['chooselanguage'] = 'Wybierz język';
$string['chooselanguagehead'] = 'Wybierz język';
$string['compatibilitysettings'] = 'Sprawdzanie Twoich ustawień PHP';
$string['compatibilitysettingshead'] = 'Sprawdzanie Twoich ustawień PHP';
$string['configfilenotwritten'] = 'Instalator nie mógł automatycznie utworzyć plik config.php zawierający Twoje parametry instalacyjne, prawdopodobnie dlatego że katalog Moodle nie ma prawa zapisu. Musisz ręcznie przekopiować poniższy kod do pliku config.php, który powinien znajdować się w głównym katalogu Moodle.';
$string['configfilewritten'] = 'config.php został pomyślnie stworzony';
$string['configurationcomplete'] = 'Konfiguracja skończona';
$string['configurationcompletehead'] = 'Konfiguracja skończona';
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
$string['dbcreationerror'] = 'Błąd tworzenia bazy danych. Nie można stworzyć bazy danych o takiej nazwie z dostarczonymi ustawieniami';
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
$string['downloadlanguagebutton'] = 'Pobierz &quot;$a&quot; pakiet językowy';
$string['downloadlanguagehead'] = 'Pobierz pakiet językowy';
$string['fail'] = 'zawieść';
$string['fileuploads'] = 'Plik pobrany';
$string['fileuploadserror'] = 'Powinno być włączone';
$string['fileuploadshelp'] = '<p> Załadowywany plik nie jest dostępny na Twoim serwerze.</p>

<p> Możesz nadal instalować Moodle, lecz bez tego ustawienia nie będziesz mógł załadowywać plików kursu lub obrazów profilów nowych użytkowników.</p>

<p> Ażeby umożliwić załadowywanie plików musisz sam (lub z pomocą swojego administratora systemu) edytować główny plik php.ini w swoim systemie i zmienić ustawienie <b>file_uploads</b> to \'1\'.</p>';
$string['gdversion'] = 'versja biblioteki GD';
$string['gdversionerror'] = 'Aby przeprowadzać operacje i kreować obrazy niezbędna jest biblioteka GD';
$string['gdversionhelp'] = '<p> Nie masz zainstalowanego GD na swoim serwerze.</p>
<p>„GD jest biblioteką wymaganą przez PHP w celu umożliwienia Moodle operacji na obrazach (takich jak ikony profilu użytkownika) i w celu tworzenia nowych obrazów (takich jak wykresy logowań). Moodle będzie pracował bez GD – te możliwości nie będą jednak dla Ciebie dostępne.</p>
<p> Aby dodać GD do PHP pod Unix-em, skompiluj PHP używając parametru -- with-gd. </p>

<p> Pod Windows-em można zazwyczaj edytować php.ini i pominąć linię odwołującą się do libgd.dll.</p>”';
$string['globalsquoteserror'] = 'Ustal swoje ustawienia PHP:  niedostępne register_globals i/lub udostępnione magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p> Nie jest zalecane ustawienie równocześnie kombinacji niedostępnego Magoc Quotes GPC i udostępnionego Register Globals.</p>

<p> Zalecane ustawienie: <b>magic_quotes_gpc = On</b> i <b>register_globals = Off</b> in your php.ini</p>

<p> Jeśli nie posiadasz dostępu do swojego php.ini, możesz zamieścić następującą linię w pliku called.htacces w swoim katalogu Moodle.
	<blockquote>php_value magic_quotes_gpc On</blockquote>
   	<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Instalacja';
$string['magicquotesruntime'] = 'Magic Quotes Runtime';
$string['magicquotesruntimeerror'] = 'Powinno być wyłączone';
$string['magicquotesruntimehelp'] = 'Aby Moodle funkcjonowało poprawnie tryb pracy Magic Quotes powinien być wyłączony.</p>

<p> Domyślne ustawienie jest wyłączone ... zobacz ustawienie <b>magic_quotes_runtime</b> w swoim pliku php.ini.</p>

<p>Jeśli nie posiadasz dostępu do swojego php.ini, możesz zamieścić następującą linię w pliku called.htacces w swoim katalogu Moodle:
	 <blockquote>php_value magic_quotes_runtime Off</blockquote> </p>';
$string['memorylimit'] = 'Ograniczenie pamięci';
$string['memorylimiterror'] = '= Limit pamięci PHP jest ustawiony zbyt nisko ... może to powodować problemy w przyszłości';
$string['memorylimithelp'] = 'Limit pamięci PHP dla Twojego serwera jest ustawiony obecnie na $a.</p>

<p> Może to stworzyć sytuację, w której Moodle będzie miał w przyszłości problemy z pamięcią, zwłaszcza jeśli masz udostępnionych wiele modułów i/lub wielu użytkowników.</p>

<p> Jeśli jest to możliwe, zalecamy ustawienie konfiguracji PHP z wyższym limitem, np. 16M.
Istnieje kilka sposobów przeprowadzenia tej operacji, których możesz spróbować: </p>
<ol>
<li> Jeśli możesz przekompiluj PHP za pomocą <i>--enable-memory-limit</i>.
Pozwoli to Moodle ustawić samoczynnie limit pamięci. </li>
<li> Jeśli masz dostęp do swojego pliku php.ini, możesz w nim zmienić ustawienie <b>memory_limit</b> do wielkođci 16M. Jeśli nie posiadasz tego dostępu możesz poprosić swojego administratora aby zrobił to za Ciebie.</li>
<li> Na niektórych serwerach PHP można stworzyć plik. htaccess w katalogu Moodle zawierający poniższą linię:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p> jednakże na niektórych serwerach będzie uniemożliwiało to działanie <b> wszystkich </b> stron PHP (ujrzysz błędy na stronie), a więc będziesz zmuszony usunąć plik .htaccess. </p></li></ol>”';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nie został prawidłowo skonfigurowany z rozszerzeniem MySQL, co może zostać zakomunikowane przez MySQL. Sprawdź proszę swój plik php.ini lub przekompiluj PHP';
$string['phpversion'] = 'wersja PHP';
$string['phpversionerror'] = 'Wersja PHP musi być ca najmniej 4.1.0';
$string['phpversionhelp'] = '<p> Moodle wymaga wersji PHP co najmniej 4.1.0. </p> 
<p>Obecnie jest uruchomiona wersja $a</p>
<p> Musisz uaktualnić wersje PHP lub przenieść na host z nowszą wersją PHP!</p>';
$string['safemode'] = 'Bezpieczny tryb';
$string['safemodeerror'] = 'Moodle ma trudności z włączeniem bezpiecznego trybu';
$string['safemodehelp'] = '“<p> Moodle może mieć wiele zróżnicowanych problemów z trybem bezpiecznym z czego nie najmniejszym jest brak możliwości tworzenia nowych plików. 

<p> Tryb bezpieczny jest zazwyczaj dostępny jedynie na publicznych host-ach web a więc musisz znaleźć nową firmę hostingową dla Twojej strony Moodle.</p>

<p> Można kontynuować instalacje, lecz należy spodziewać się pewnych problemów w przyszłości.</p>';
$string['sessionautostarterror'] = 'To powinno być wyłączone';
$string['wwwroot'] = 'Adres w sieci';
$string['wwwrooterror'] = 'Adres w sieci wydaje się być niepoprawny - wydaje się że nie ma tam instalacji Moodle';

?>

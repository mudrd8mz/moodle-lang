<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 Beta 5 (2006050500)


$string['adminacceptccs'] = 'Który typ karty kredytowej będzie akceptowany?';
$string['adminavs'] = 'Sprawdź to jeśli na swoim koncie authorize.net aktywowałeś system weryfikacji adresu (AVS). Wymusza pola adresu takie jak ulica, miasto, kraj i zipuje gdy użytkownik wypełnia formę płatności';
$string['admincronsetup'] = 'Skrypt zarządzania cron.php nie został uruchomiony przez ostatnie 24 godziny. <br />Cron musi być ustawiony jeśli chcesz używać właściwości autoprzechwytywania. <br />Jeśli wyłączysz funkcję autoprzechwytywania, transakcje będą unieważnianie chyba że przeglądniesz je w ciągu 30 dni. <br />Sprawdź an_review i wprowadź zero w pole an_capture_day <br /> jeśli chcesz ręcznie akceptować/odrzucać płatności w ciągu 30 dni.';
$string['adminemailexpired'] = 'Wyślij e-mail’a z ostrzeżeniem do administratorów na <b>$a</b> dni przed - jaki status otrzymała transakcja \'przechwytywanie autoryzowane/ oczekujące\', zanim transakcje wygasną.(0 = wysyłanie e-mail’i nieczynne, domyślnie = 2, max = 5). <br /> Jest to użyteczne jeśli dopuścisz przechwytywanie ręczne';
$string['anlogin'] = 'Nazwa użytkownika';
$string['anpassword'] = 'Hasło';
$string['anreferer'] = 'Zdefiniuj URL polecający (URL Referer), jeśli masz to ustawione w twoim koncie authorize.net.  Spowoduje to wysyłanie linii \"Referer: URL\" razem z żądaniem HTTP.';
$string['antestmode'] = 'Uruchom testową transakcję (pieniądze nie będą pobrane)';
$string['antrankey'] = 'Klucz transakcji';
$string['ccexpire'] = 'Data ważności';
$string['ccexpired'] = 'Data ważności karty kredytowej';
$string['ccinvalid'] = 'Niepoprawny numer karty';
$string['ccno'] = 'Numer karty kredytowej';
$string['cctype'] = 'Typ karty kredytowej';
$string['ccvv'] = 'Sprawdzenie karty';
$string['ccvvhelp'] = 'Sprawdź 3 ostatnie cyfry na odwrocie Twojej karty';
$string['choosemethod'] = 'Jeżeli znasz kurs dostępu do kursu to wprowadź go, w przeciwnym wypadku musisz zapłacić za ten kurs.';
$string['chooseone'] = 'Wypełnij jedno lub oba z następnych pól';
$string['description'] = 'Authorize.net moduł pozwala ustwawiać zapłatę za kurs przez dostawcę CC. Jeżeli koszt jakiegoś kursu jest zero to studenci nie są wzywani do zapłaty za wejście. Tutaj jest koszt wejścia na strony ustawiony jako domyślny, można ustawić koszt wejścia na każdy kurs w ustawieniach kursu. Koszt kursu unieważnia koszt strony.';
$string['enrolname'] = 'Karta Kredytowa brama';
$string['httpsrequired'] = 'Z przykrością stwierdzamy, iż Twoja sugestia nie może być przeprowadzona prawidłowo. To ustawienie strony nie może być przeprowadzone poprawnie. 
<br /><br />
Proszę nie wprowadzać numeru swojej karty kredytowej do czasu pojawienia się żółtej kłódki na dole przeglądarki. Oznacza to, iż wszelkie dane przesyłane pomiędzy klientem a serwerem będą kodowane. A więc informacja przesyłana podczas transakcji pomiędzy dwoma komputerami jest chroniona  a numer Twojej karty kredytowej nie zostanie ujawniony w internecie';
$string['logindesc'] = 'Możesz ustawić opcje <a href=\"$a->url\">loginhttps</a> w zmienne/ bezpieczeństwo.
Włączając to Moodle będzi używał połączenia z użyciem protokołu https dla stron ogowania i zapłaty. ';
$string['nameoncard'] = 'Nazwa karty';
$string['paymentpending'] = 'Twoja płatność jest w trakcie oczekiwania dla Twojego kursu z poniższym numerem porządkowym. $a->orderid';
$string['reviewday'] = 'Zachowaj dane Twojej karty kredytowej automatycznie, chyba że nauczyciel lub administrator przeprowadzi weryfikacje w ciągu <b>$a</b> dni. CRON MUSI BYĆ WŁĄCZONY. <br/> (0 dni oznacza niedopuszczenie do autozapamiętywania, oznacza to, iż nauczyciel lub administrator przeprowadza weryfikację ręcznie. Transakcja będzie unieważniona jeśli nie ma zgody na autozapamiętywanie lub jeśli przeprowadzisz weryfikację w ciągu 30 dni.)';
$string['reviewnotify'] = 'Twoja płatność będzie zweryfikowana w ciągu kilku dni oczekuj e-maila od swojego nauczyciela';
$string['sendpaymentbutton'] = 'Wyślij zapłatę';
$string['zipcode'] = 'kod pocztowy';

?>
